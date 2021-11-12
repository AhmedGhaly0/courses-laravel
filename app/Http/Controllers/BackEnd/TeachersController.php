<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Repository\TeacherRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherStore;

class TeachersController extends Controller
{
    protected $Teacher;
    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }
    public function index(){
        return $this->Teacher->index();
    }
    public function create(){
        return $this->Teacher->create();
    }
    public function store(TeacherStore $request){
            return $this->Teacher->store($request);
    }
    public function edit($id){
        return $this->Teacher->edit($id);
    }
    public function update(Request $request){
        return $this->Teacher->update($request);
    }
    public function delete($id){
        return $this->Teacher->delete($id);
    }
}
