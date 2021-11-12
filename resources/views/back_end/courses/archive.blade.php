@extends('layout_back.app')
@section('title')
 {{ __('main_back.archives') }}-{{ __('main_back.learnto') }}
@endsection

@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">{{__("main_back.Archived Courses")}} <i class="far fa-file-archive"></i></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a class="btn btn-primary text-white" href="{{route('home')}}">{{__('main_back.back')}}</a></li>
                <li class="breadcrumb-item active">{{__("main_back.Archived Courses")}}</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
<!-- /.content-header -->
<section class="content">

    <!-- Default box -->
    <div class="card">
      {{-- <div class="card-header">


        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div> --}}
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th> # </th>
                    <th>{{ __('page_back.name course') }}</th>
                    <th>{{ __('page_back.name teacher') }}</th>
                    <th>{{ __('page_back.img') }}</th>
                    <th>{{ __('page_back.add by') }}</th>
                    <th>{{ __('page_back.date archive') }}</th>
                    <th>{{ __('page_back.processes') }}</th>
                </tr>
            </thead>
            <tbody id="tableCourses" >
                @php
                    $i=0;
                @endphp
                @foreach ($courses as $courses)
                @php
                $i++
                @endphp
                 {{-- wire:poll --}}

                <tr id="up{{$courses->id}}">
                    <td >{{$i}}</td>
                    <td>{{$courses->name}}</td>
                    <td>{{$courses->teacher}}</td>
                    <td>
                        <div  class="filtr-item col-sm-2">

                                <img src="{{asset('images/courses/'.$courses->img)}}"
                                    style="height: 50px; width:50px;"
                                    alt="{{ __('page_back.course img') }}">
                        </div>
                    </td>
                    <td>{{$courses->userby}}</td>
                    <td>{{$courses->deleted_at}}</td>
                    <td>

                            <button type="button" value="{{$courses->id}}" class="btn btn-xs  bg-warning transfer_course" data-toggle="modal" data-target="#transfer_course"><i class="fas fa-exchange-alt "></i></button>
                            <button type="button" value="{{$courses->id}}" class="btn btn-xs bg-danger modal_delete_course" data-toggle="modal" data-target="#delete_course"><i class="fas fa-trash-alt"></i></button>

                      </td>
                </tr>
                @endforeach



            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>

  <div class="modal fade" id="delete_course">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">{{__('page_back.delete course')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" id="formDelete" method="POST">
                @csrf
            <input type="hidden" id="id" name="id" class="form-control"  >
        </form>
            <p>{{__('page_back.are you delete course')}}</p>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">{{ __('page_back.close') }}</button>
          <button type="button" class="btn btn-light delete_course" data-dismiss="modal">{{__('page_back.delete')}}</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  {{-- transfer_course --}}
  <div class="modal fade" id="transfer_course">
    <div class="modal-dialog">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h4 class="modal-title">{{__('page_back.unarchived')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <form action="" id="restoreCourse" method="POST">
                @csrf
            <input type="hidden" id="id_restore" name="id_restore" class="form-control"  >
        </form>
          <p>{{__('page_back.are you close archived')}}</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">{{__('page_back.close')}}</button>
          <button type="button" class="btn btn-success transfer_in_course" data-dismiss="modal"> {{__('page_back.Confirm')}}</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


@endsection
@section('js')
 {{-- modal delete course --}}
 <script>
    $(document).on('click', '.modal_delete_course', function(e) {
            var course_id = $(this).val();
            $('#id').val(course_id);
    });
</script>
{{--  delete course --}}
<script>
    $(document).on('click', '.delete_course', function(e) {
            var formDelete = new FormData($('#formDelete')[0]);
             $.ajax({
                    type: 'post',
                    url: "{{ route('delete.course.archive') }}",
                    data:formDelete,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(response) {
                        $("#example1").load(window.location + " #example1");
                        toastr.error(response.msg,'<p>'+response.title+'</p>');
                    }
    });
    });
</script>
{{-- modal transfer course --}}
<script>
    $(document).on('click', '.transfer_course', function(e) {
            var course_id = $(this).val();
            $('#id_restore').val(course_id);
    });
</script>
{{--  transfer course --}}
<script>
    $(document).on('click', '.transfer_in_course', function(e) {
            var formDelete = new FormData($('#restoreCourse')[0]);
             $.ajax({
                    type: 'post',
                    url: "{{ route('restore.course') }}",
                    data:formDelete,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(response) {
                        $("#example1").load(window.location + " #example1");
                        toastr.warning(response.msg,'<p>'+response.title+'</p>');

                    }
    });
    });
</script>

@endsection
