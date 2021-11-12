<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\lessons;
use App\Models\Courses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\upload_lesson;
use Livewire\WithFileUploads;


class ListLessonsLiveWire extends Component
{
    use WithFileUploads;

    // proparty
    public $stepEdit = 1;
    public $showtable = true;
    public $form_edit = false;
    public $formUploadFile = false;
    public $UpdateMessage = '', $deleteMessage = '',$deleteFileMessage='';
    public $id_lesson,$id_file;
    public $data_lesson;
    public $test='test';

    // Name Form One
    public $name_en, $name_ar, $nub_leson, $course_id,
        // Name Form Tow
        $ex_link, $sn_link, $name_f_en, $name_f_ar, $upload_file;


    public function render()
    {
        $lessons = lessons::all();
        $courses = Courses::all();
        $lesson = lessons::where('id', $this->data_lesson)->get();
        $upload_lesson = upload_lesson::where('lesson_id', $this->data_lesson)->get();
        return view('livewire.list-lessons-live-wire',
        ['lessons' => $lessons, 'courses' => $courses,'lesson' => $lesson,'upload_lesson' => $upload_lesson]);
    }
    public function showformedit($id)
    {
        $this->showtable = false;
        $this->form_edit = true;
        $this->id_lesson = $id;
        $lesson = lessons::find($id);
        $this->name_en = $lesson->getTranslation('name', 'en');
        $this->name_ar = $lesson->getTranslation('name', 'ar');
        $this->nub_leson = $lesson->number;
        $this->ex_link = $lesson->external_link;
        $this->sn_link = $lesson->screen_link;
        $this->course_id = $lesson->course_id;
    }
    public function updateLesson()
    {
        $lesson = lessons::find($this->id_lesson);
        $lesson->name = ['en' => $this->name_en, 'ar' => $this->name_ar];
        $lesson->name_file = ['en' => $this->name_f_en, 'ar' => $this->name_f_ar];
        $lesson->number = $this->nub_leson;
        $lesson->course_id = $this->course_id;
        $lesson->screen_link = $this->sn_link;
        $lesson->external_link = $this->ex_link;
        $lesson->user_by = Auth::user()->name;
        $lesson->save();
        $this->UpdateMessage = trans('sweet_alert.update lesson');
        $this->showtable = true;
        $this->stepEdit = 1;
    }
    public function delete($id)
    {
        $lesson = lessons::find($id);
        $lesson->delete();
        $this->showtable = true;
        $this->deleteMessage = trans('sweet_alert.delete lesson');
    }
    public function deleteFile($id)
    {
        $lesson = upload_lesson::find($id);
        $lesson->delete();
        $this->showtable = true;
        // $this->deleteFileMessage = trans('sweet_alert.deleteFile');

    }

    public function viewditals($id)
    {
        $this->showtable = false;
        $this->form_edit = false;
        $this->data_lesson = $id;
        $this->id_file = $id;
    }
    public function showFile($file_name)
    {
        $files = Storage::url($file_name);
        return '<img src="'. $files .'" alt="">';
    }
    public function file_upload(){
        if(!empty($this->upload_file)){
        $lesson = new upload_lesson();
        $lesson->lesson_id = $this->id_file;
        // $lesson->name_file=['en' => $this->name_f_en, 'ar' =>$this->name_f_ar ];
            $file = $this->upload_file->store('lessons');
             $lesson->file = $file;
             $lesson->save();
        }
        $this->clearForm();
    }
    public function clearForm(){
        $this->name_f_en = '';
        $this->name_f_ar = '';
        $this->upload_file = '';
    }
    public function steptow()
    {
        $this->stepEdit = 2;
    }
    public function stepthree()
    {
        $this->stepEdit = 3;
    }
    public function back($step)
    {
        $this->stepEdit = $step;
    }
    public function showtablelessons()
    {
        $this->showtable = true;
    }
    public function showformupload(){
        $this->formUploadFile = true;
    }
}
