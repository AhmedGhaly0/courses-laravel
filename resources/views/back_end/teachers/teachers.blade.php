@extends('layout_back.app')
@section('title')
 {{ __('main_back.teacher') }} - {{ __('main_back.learnto') }}
@endsection
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

                    <h1 class="m-0 text-dark">{{__('main_back.teacher')}} <i class="fas fa-users"></i></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a class="btn btn-primary text-white" href="{{route('home')}}">{{__('main_back.back')}}</a></li>
                <li class="breadcrumb-item active">{{__('main_back.teacher')}}</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
<!-- /.content-header -->
<section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a href="{{url('teachers/add-new-teacher')}}" class="btn btn-success">{{__('page_back.new teacher')}} <i class="fas fa-plus ml-1"></i> </a>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
    </div>
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            @foreach ($teachers as $teacher)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    <small>Facebook : <a href="{{$teacher->facebook}}">{{$teacher->facebook}}</a> </small> <br>
                    <small>Github : <a href="{{$teacher->github}}">{{$teacher->github}}</a> </small>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$teacher->name}}</b></h2>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <small>{{$teacher->adress}}</small> </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : <small>0{{$teacher->number_phone}}</small> </li>
                      </ul>
                    </div>

                    <div class="col-5 text-center">
                      <img src="{{asset('images/teachers/'. $teacher->photo )}}" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <p class="text-muted text-sm ml-2"><b>About: </b> <small>{{$teacher->adress}}</small>  </p>

                <div class="card-footer">

                  <div class="text-right">
                    <a href="teachers/{{$teacher->id}}/edit-teacher" class="btn btn-xs bg-primary " ><i class="far fa-edit"></i> {{__('page_back.edit')}}</a>
                    <a href="delete/{{$teacher->id}}" class="btn btn-xs bg-danger "><i class="fas fa-trash-alt"></i> {{__('page_back.delete')}}</a>

                  </div>
                </div>

              </div>

            </div>
            @endforeach

          </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer -->
      </div>
      <!-- /.card-body -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
@endsection

@section('js')
@if (Session::has('message'))
    <script>
        toastr.success("{!! Session::get('message') !!}");
    </script>
@endif
@endsection
