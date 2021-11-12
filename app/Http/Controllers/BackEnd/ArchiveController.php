<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $courses = Courses::onlyTrashed()->get();
        return view('back_end.courses.archive',['courses'=>$courses]);
    }
    public function restore(Request $request){
        $courses = Courses::withTrashed()->where('id',$request->id_restore)->restore();
        return response()->json([
            'title' => __('sweet_alert.archive'),
            'msg' => __('sweet_alert.restore arvhive'),
          'status'=>200
        ]);
    }

    public function delete(Request $request ){
        $courses= Courses::find($request->id);
         Storage::disk('file_courses')->delete($courses->img);
           $courses->forceDelete();
           return response()->json([
            'title' => __('sweet_alert.delete'),
            'msg' => __('sweet_alert.delete course'),
          'status'=>200
           ]);
    }
}
