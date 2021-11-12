@extends('layout_back.app')

@section('title')
 {{ __('main_back.courses') }}-{{ __('main_back.learnto') }}
@endsection

@section('css')

@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0 text-secondary"> <i class="nav-icon fas fa-book"></i> {{ __('main_back.courses') }}
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item "><a class="btn btn-primary text-white"
                                    href="{{ route('home') }}">{{ __('main_back.back') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('main_back.view courses') }}</li>
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
                    <h3 class="card-title">
                        <button type="button" class="btn btn-block btn-outline-primary btn-lg " data-toggle="modal"
                            data-target="#add_course">
                            {{ __('page_back.add course') }} <i class="fas fa-plus"></i>
                        </button>
                    </h3>


                    <div class="card-tools">
                        <a href="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-minus"></i></a>

                        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button> --}}
                    </div>
                </div>
                @include('back_end.courses.table')
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    </div>
    </section>
   @include('back_end.courses.form_cord');
@endsection
@section('js')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
    {{-- Save Data --}}
    <script>
        $(document).on('click', '.save_data', function(e) {
            e.preventDefault();
            $('.error_form').text('');
            var formData = new FormData($('#courseForm')[0]);
            // formData.text('');
            $.ajax({
                    type: 'post',
                    enctype: "multipart/form-data",
                    url: "{{ route('store.course') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(response) {
                        if(response){
                            $("#example1").load(window.location + " #example1");
                            toastr.success(response.msg,'<p>'+response.title+'</p>');
                            $('#courseForm')[0].reset();
                        }

                }, error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, val) {
                        $("#" + key + "_error").text(val[0]);
                    });
                }
            });

        });
    </script>
    {{-- edit course --}}
    <script>
        $(document).on('click', '.edit_course', function(e) {
                var course_id = $(this).val();
            $.ajax({
                        type: 'get',
                        url: "edit/course/"+course_id,
                        success: function(response) {
                            console.log(response.data.name.en)
                            $('#id_edit').val(course_id);
                            $('#id_delete').val(course_id);
                            $('#name_en_edit').val(response.data.name.en);
                            $('#name_ar_edit').val(response.data.name.ar);
                            $('#teacher_en_edit').val(response.data.teacher.en);
                            $('#teacher_ar_edit').val(response.data.teacher.ar);
                            $('#view_image').html("<img = src={{URL::to('/')}}/images/courses/"+response.data.img+" style='height: 90px; width:90px;' class='rounded' />")

                    }
                });
        });
    </script>

    {{-- update data --}}
        <script type="text/javascript">
            $(document).on('click', '.update_course', function(e) {
                e.preventDefault();
                $('.error_form').text('');
                 var UpdtaeData = new FormData($('#updateForm')[0]);

                $.ajax({
                        type: 'post',
                        enctype: "multipart/form-data",
                        url: "{{ route('update.course') }}",
                        data:UpdtaeData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(response) {
                            $("#example1").load(window.location + " #example1");
                            toastr.success(response.msg,'<p>'+response.title+'</p>');
                    }, error: function(reject) {

                    }
                });

            });
        </script>
        {{-- modal delete course --}}
      <script>
        $(document).on('click', '.modal_delete_course', function(e) {
                var course_id = $(this).val();
                $('#id_delete').val(course_id);
        });
    </script>
    {{--  delete course --}}
    <script>
        $(document).on('click', '.delete_course', function(e) {
                var formDelete = new FormData($('#formDelete')[0]);
                 $.ajax({
                        type: 'post',
                        url: "{{ route('delete.course') }}",
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
    {{-- archive course --}}
    <script>
        $(document).on('click', '.modal_archive_course', function(e) {
                var course_id = $(this).val();
                $('#id_archive').val(course_id);
        });
    </script>
    {{--  archive_course --}}
    <script>
        $(document).on('click', '.archive_course', function(e) {

                var archiveCourse = new FormData($('#archiveCourse')[0]);
                 $.ajax({
                        type: 'post',
                        url: "{{ route('archive.course') }}",
                        data:archiveCourse,
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
