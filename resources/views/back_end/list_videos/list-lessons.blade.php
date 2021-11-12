@extends('layout_back.app')
@section('title')
{{__('main_back.list lessons')}}-{{ __('main_back.learnto') }}
@endsection
@section('css')
{{-- form-wizard --}}
<link rel="stylesheet" href="{{asset('dashboard/css/form-wizard.css')}}">
@livewireStyles
@endsection
@section('content')

   <!-- Content Header (Page header) -->
   <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">{{__('main_back.list lessons')}} <i class="fas fa-chalkboard-teacher"></i></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a class="btn btn-primary text-white" href="{{route('home')}}">{{__('main_back.back')}}</a></li>
                <li class="breadcrumb-item active">{{__('main_back.add lesson')}}</li>
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

        {{-- <livewire:list-lessons.list-lessons /> --}}
        <livewire:list-lessons-live-wire />
      </div>
    </div>
    <!-- /.card -->

  </section>
@endsection
@section('js')
@livewireScripts
<script>



</script>


@endsection
