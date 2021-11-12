<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Courses;
use App\Models\lessons;
use Illuminate\Support\Facades\Auth;
use App\Models\upload_lesson;
use Livewire\WithFileUploads;

class AddLesson extends Component
{
    use WithFileUploads;
    public function render()
    {
        $courses = Courses::all();

        return view('livewire.add-lesson',['courses'=>$courses]);
    }
    public $uploadFile = 0;
    public $stepform = 1;
    public $SuccessMessage = '';
    // Name Form One
    public $name_en,$name_ar,$nub_leson,$course_id,
    // Name Form Tow
    $ex_link,$sn_link,$desc,$name_f_en,$name_f_ar,$upload_file;



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName , [
            'name_en' => 'required|min:2|max:200',
            'name_ar' => 'required|min:2|max:200',
            'nub_leson' => 'required',
            'course_id' => 'required',
        ]);
    }
    public function steptow(){
        $this->validate([
            'name_en' => 'required|min:2',
            'name_ar' => 'required|min:2',
            'nub_leson' => 'required',
            'course_id' => 'required',
        ]);
        $this->stepform = 2;
    }

    public function stepthree(){
        $this->validate([
            'ex_link' => 'required|min:2',
            'sn_link' => 'required|min:2',
        ]);
        $this->stepform = 3;
    }

    public function uploadFile(){
        $this->uploadFile = 1;
    }
    public function back($step){
        $this->stepform = $step;
    }
    public function clearForm(){
        $this->name_en = '';
        $this->name_ar = '';
        $this->nub_leson = '';
        $this->sn_link = '';
        $this->name_f_en = '';
        $this->ex_link = '';
        $this->name_f_ar = '';
        $this->upload_file = '';
        $this->course_id = '';
    }

    public function storeLesson(){
        $lesson = new lessons();
        $lesson->name=['en' => $this->name_en, 'ar' =>$this->name_ar ];
        $lesson->number=$this->nub_leson;
        $lesson->course_id=$this->course_id;
        $lesson->screen_link=$this->sn_link;
        $lesson->external_link=$this->ex_link;
        $lesson->desc=$this->desc;
        $lesson->user_by=Auth::user()->name;
        $lesson->save();
        $lessons_id = lessons::latest()->first()->id;
        if(!empty($this->upload_file)){
            $upload = new upload_lesson();
            $file = $this->upload_file->store('lessons');
            $upload->file = $file;
            // $upload->name_file = ['en' => $this->name_f_en, 'ar' =>$this->name_f_ar ];
            $upload->lesson_id = $lessons_id;
            $upload->save();
            }
        $this->clearForm();
        $this->stepform = 1;
        $this->SuccessMessage = trans('sweet_alert.add lesson');
    }

}
