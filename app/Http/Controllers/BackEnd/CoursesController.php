<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Traite\TraiteHelper;
use App\Models\Courses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use App\Models\teacher;

class CoursesController extends Controller
{
    use TraiteHelper;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $courses = Courses::all();
        $modal = Courses::all();
        $teachers = teacher::all();
        return view('back_end.courses.courses',['courses'=>$courses,'modal'=>$modal,'teachers'=>$teachers]) ;
    }
    public function store(CourseRequest $request){
        $imageName = $this->saveImage($request->img,'images/courses');
        $course = new Courses();
        $course->name=['en' => $request->name_en, 'ar' =>$request->name_ar ];
        $course->teacher_id=$request->teacher;
        $course->userby=Auth::user()->name;
        $course->img=$imageName;
        $course->save();
        return response()->json([
            'title' => __('sweet_alert.add'),
           'msg'=>__('sweet_alert.add course'),
          'status'=>200
        ]);
    }
    public function edit($id){
        $course = Courses::find($id);
        return response()->json([
          'status'=>200,
            'data'=>$course
        ]);
    }
    public function update(Request $request ){
        $course = Courses::find($request->id);
        if (!empty($request->img)) {
            Storage::disk('file_courses')->delete($course->img);
            $imageName = $this->saveImage($request->img,'images/courses');
        }else{
            $imageName = $request->img = $course->img;
        }
        $course->name=['en' => $request->name_en, 'ar' =>$request->name_ar ];
        $course->teacher_id=$request->teacher;
        $course->userby=Auth::user()->name;
        $course->img=$imageName;
        $course->save();
        return response()->json([
            'title' => __('sweet_alert.update'),
          'msg' => __('sweet_alert.update course'),
          'status'=>200
        ]);
    }
    public function delete(Request $request ){
        $courses= Courses::find($request->id_delete);
         Storage::disk('file_courses')->delete($courses->img);
           $courses->forceDelete();
           return response()->json([
            'title' => __('sweet_alert.delete'),
            'msg' => __('sweet_alert.delete course'),
            'status'=>200
           ]);
    }

    public function archive(Request $request ){
        $courses= Courses::find($request->id_archive);
        $courses->Delete();
        return response()->json([
            'title' => __('sweet_alert.archive'),
            'msg' => __('sweet_alert.transfer archive'),
          'status'=>200
        ]);
    }
}
