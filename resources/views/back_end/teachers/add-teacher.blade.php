@extends('layout_back.app')
@section('title')
 {{ __('page_back.new teacher') }} - {{ __('main_back.learnto') }}
@endsection
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">{{__('page_back.new teacher')}}  <i class="fas fa-user-plus"></i></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a class="btn btn-primary text-white" href="{{url('teachers')}}">{{__('main_back.back')}}</a></li>
                <li class="breadcrumb-item active">{{__('main_back.teacher')}} </li>
                <li class="breadcrumb-item active"> <span>{{__('page_back.new teacher')}}</span> </li>
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
        <form  method="POST" action="{{route('store.teacher')}}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>{{ __('page_back.name teacher en') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="teacher_en" class="form-control @error('teacher_en')   border-danger @enderror"placeholder="{{ __('page_back.type here') }}">
                            @error('teacher_en')
                                <span class=" text-danger">{{ $message }}</span>
                            @enderror


                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>{{ __('page_back.name teacher ar') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="teacher_ar" class="form-control @error('teacher_ar')   border-danger @enderror" placeholder="{{ __('page_back.type here') }}">
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
                        <input type="number"  name="n_phone" class="form-control  @error('n_phone')   border-danger @enderror" placeholder="{{ __('page_back.type here') }}">
                            @error('n_phone')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>{{ __('page_back.adress') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="adress" class="form-control  @error('adress')   border-danger @enderror"placeholder="{{ __('page_back.type here') }}">
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
                        <input type="text"  name="lk_face" class="form-control  @error('lk_face')   border-danger @enderror"placeholder="{{ __('page_back.type here') }}">
                            @error('lk_face')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>{{ __('page_back.githubLink') }}<span class="text-danger"> * </span></label>
                        <input type="text"  name="lk_git" class="form-control  @error('lk_git')   border-danger @enderror"placeholder="{{ __('page_back.type here') }}">
                            @error('lk_git')
                            <span class=" text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-6">
                <h6 class="mt-2 text-bold">{{ __('page_back.img Upload') }} <span class="text-danger"> * </span></h6>
                <div class="custom-file">
                    <input type="file"  name="img" class="custom-file-input " id="customFile">
                    <label class="custom-file-label" for="customFile"></label>
                    @error('img')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label>{{ __('page_back.desc') }}</label>
                   <textarea name="desc" class="form-control"></textarea>
                        <div id="name_ar_error" class="form-text text-danger text-bold error_form"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">

            <button  type="submit"  class="btn btn-primary" >{{ __('page_back.save') }}</button>
        </div>
    </form>
    </div>


      <!-- /.card-body -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>



@endsection
