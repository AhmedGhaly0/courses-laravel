@extends('layout_back.app')
@section('title')
 {{ __('page_back.edit teacher') }} - {{ __('main_back.learnto') }}
@endsection
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">{{__('page_back.edit teacher')}}  <i class="fas fa-user-edit"></i></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a class="btn btn-primary text-white" href="{{url('teachers')}}">{{__('main_back.back')}}</a></li>
                <li class="breadcrumb-item active">{{__('main_back.teacher')}} </li>
                <li class="breadcrumb-item active"> <span>{{__('page_back.edit teacher')}}</span> </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
<!-- /.content-header -->
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-body">
          @foreach ($teacher as $teacher)
          <form  method="POST" action="{{route('update.teacher')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$teacher->id}}">
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>{{ __('page_back.name teacher en') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="teacher_en" class="form-control @error('teacher_en')   border-danger @enderror" value=" {{$teacher->getTranslation('name','en')}}">
                            @error('teacher_en')
                                <span class=" text-danger">{{ $message }}</span>
                            @enderror


                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>{{ __('page_back.name teacher ar') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="teacher_ar" class="form-control @error('teacher_ar')   border-danger @enderror" value=" {{$teacher->getTranslation('name','ar')}}">
                            @error('teacher_ar')
                                <span class=" text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>{{ __('page_back.number phone') }}<span class="text-danger"> * </span></label>
                        <input type="number"  name="n_phone" class="form-control  @error('n_phone')   border-danger @enderror" value="{{$teacher->number_phone}}">
                            @error('n_phone')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>{{ __('page_back.adress') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="adress" class="form-control  @error('adress')   border-danger @enderror" value="{{$teacher->adress}}">
                            @error('adress')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>{{ __('page_back.facebookLink') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="lk_face" class="form-control  @error('lk_face')   border-danger @enderror"value="{{$teacher->facebook	}}">
                            @error('lk_face')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>{{ __('page_back.githubLink') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="lk_git" class="form-control  @error('lk_git')   border-danger @enderror"value="{{$teacher->github	}}">
                            @error('lk_git')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>



                <div class="form-group col-sm-6">
                    <label for="exampleFormControlFile1" >{{ __('page_back.img Upload') }}</label>
                    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" >
                  </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label>{{ __('page_back.desc') }}</label>
                   <textarea name="desc" class="form-control">{{$teacher->desc}}</textarea>
                        <div id="name_ar_error" class="form-text text-danger text-bold error_form"></div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button  type="submit"  class="btn btn-primary" >{{ __('page_back.update') }}</button>
            </div>
    </form>
          @endforeach

    </div>


      <!-- /.card-body -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>



@endsection
