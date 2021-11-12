<?php

namespace App\Repository;

use App\Repository\TeacherRepositoryInterface;
use App\Models\teacher;
use Illuminate\Support\Facades\Auth;
use App\Http\Traite\TraiteHelper;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Storage;


class TeacherRepository implements TeacherRepositoryInterface{

    use TraiteHelper;

    public function index(){
        $teachers = teacher::all();
        return view('back_end.teachers.teachers',['teachers'=>$teachers]);
    }
    public function create(){
        return view('back_end.teachers.add-teacher');
    }
    public function store($request){
        try {
            $imageName = $this->saveImage($request->img,'images/teachers');
            $teacher = new teacher();
            $teacher->name=['en' => $request->teacher_en, 'ar' =>$request->teacher_ar ];
            $teacher->number_phone=$request->n_phone;
            $teacher->facebook	= $request->lk_face;
            $teacher->github= $request->lk_git;
            $teacher->adress= $request->adress;
            $teacher->desc= $request->desc;
            $teacher->user_by=Auth::user()->name;
            $teacher->photo=$imageName;
            $teacher->save();
            return Redirect('/teachers') ->with(Session::flash('message', __('sweet_alert.add teacher')));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function edit($id){
        $teacher = teacher::where('id',$id)->get();
        return view('back_end.teachers.edit-teacher',['teacher'=>$teacher]);
    }
    public function update($request){
        try {
            $teacher = teacher::find($request->id);
            // dd($request);
            if (!empty($request->img)) {
                Storage::disk('upload_teacher')->delete($teacher->img);
                $imageName = $this->saveImage($request->img,'images/teachers');
            }else{
                $imageName = $request->img = $teacher->img;
            }
            $teacher->name=['en' => $request->teacher_en, 'ar' =>$request->teacher_ar ];
            $teacher->number_phone=$request->n_phone;
            $teacher->facebook	= $request->lk_face;
            $teacher->github= $request->lk_git;
            $teacher->adress= $request->adress;
            $teacher->desc= $request->desc;
            $teacher->user_by=Auth::user()->name;
            $teacher->photo=$imageName;
            $teacher->save();
            return Redirect('/teachers') ->with(Session::flash('message', __('sweet_alert.update teacher')));
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function delete($id){

        $courses= teacher::find($id);
        Storage::disk('upload_teacher')->delete($courses->img);
          $courses->forceDelete();
          return Redirect('/teachers') ->with(Session::flash('message', __('sweet_alert.delete teacher')));
    }
}
