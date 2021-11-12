 {{-- form add course --}}
 <div class="modal fade" id="add_course">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center;">
                <h4 class="modal-title text-center">{{ __('page_back.add course') }}</h4>
                <button data-dismiss="modal" aria-label="Close" class="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{-- data-dismiss="modal" aria-label="Close"   href="{{url('/all_courses')}}" --}}
            </div>
            <div class="modal-body">

                <form role="form" method="POST" id="courseForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>{{ __('page_back.name english') }}<span class="text-danger"> * </span></label>
                                <input type="text"  name="name_en" class="form-control"
                                    placeholder="{{ __('page_back.type here') }}">
                                    <div id="name_en_error" class="form-text text-danger text-bold error_form"></div>


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('page_back.name arabic') }}<span class="text-danger"> * </span></label>
                                <input type="text"  name="name_ar" class="form-control"
                                    placeholder="{{ __('page_back.type here') }}">
                                    <div id="name_ar_error" class="form-text text-danger text-bold error_form"></div>


                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('page_back.name teacher ar') }}<span class="text-danger"> * </span></label>
                                {{-- <input type="text"  name="teacher_ar" class="form-control"
                                    placeholder="{{ __('page_back.type here') }}"> --}}
                                    <div class="form-group">
                                        <select class="form-control" name="teacher" id="exampleFormControlSelect1">
                                          <option selected disabled>{{ __('page_back.Choose') }}</option>
                                            @foreach ($teachers as $teacher )
                                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                    <div id="teacher_ar_error" class="form-text text-danger text-bold error_form"></div>

                            </div>
                        </div>

                    <div class="form-group col-sm-6">
                        <!-- <label for="customFile">Custom File</label> -->
                        <h6 class="mt-2 text-bold">{{ __('page_back.img Upload') }} <span class="text-danger"> * </span></h6>
                        <div class="custom-file">
                            <input type="file"  name="img" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile"></label>
                            <div id="img_error" class="form-text text-danger text-bold error_form"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-danger">{{ __('page_back.close') }}</button>
                <button  type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary save_data">{{ __('page_back.save') }}</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


{{-- Update Courese --}}
<div class="modal fade" id="edit_course">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center;">
                <h4 class="modal-title text-center">{{ __('page_back.update course') }}</h4>
                <button data-dismiss="modal" aria-label="Close" class="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{-- data-dismiss="modal" aria-label="Close"   href="{{url('/all_courses')}}" --}}
            </div>
            <div class="modal-body">

                <form  method="POST" id="updateForm" action="{{url('/edit/course') }}">
                    @csrf
                    <input type="hidden" id="id_edit" name="id" class="form-control"  >
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>{{ __('page_back.name english') }}<span class="text-danger"> * </span></label>
                                <input type="text" id="name_en_edit" name="name_en" class="form-control"
                                    placeholder="{{ __('page_back.type here') }}">
                                    <div id="name_en_error" class="form-text text-danger text-bold error_form"></div>


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('page_back.name arabic') }}<span class="text-danger"> * </span></label>
                                <input type="text" id="name_ar_edit" name="name_ar" class="form-control"
                                    placeholder="{{ __('page_back.type here') }}">
                                    <div id="name_ar_error" class="form-text text-danger text-bold error_form"></div>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>{{ __('page_back.name teacher en') }}<span class="text-danger"> * </span></label>
                                <input type="text" id="teacher_en_edit" name="teacher_en" class="form-control"
                                    placeholder="{{ __('page_back.type here') }}">
                                    <div id="teacher_en_error" class="form-text text-danger text-bold error_form"></div>


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('page_back.name teacher ar') }}<span class="text-danger"> * </span></label>
                                <input type="text" id="teacher_ar_edit" name="teacher_ar" class="form-control"
                                    placeholder="{{ __('page_back.type here') }}">
                                    <div id="teacher_ar_error" class="form-text text-danger text-bold error_form"></div>


                            </div>
                        </div>
                    </div>
                        {{-- Upload image --}}
                    <div class="form-group Upload_image">
                        {{-- <img src="{{asset('images/courses/')}}"style="height: 50px; width:50px;" alt="{{ __('page_back.course img') }}"> --}}
                        <span id="view_image"></span>
                        <h6 class="mt-2 text-bold">{{ __('page_back.img Upload') }} <span class="text-danger"> * </span></h6>
                        <div class="custom-file">
                            <input type="file" id="img_edit" name="img" class="custom-file-input" id="customFile" >
                            <label class="custom-file-label" for="customFile"></label>
                            <div id="img_error" class="form-text text-danger text-bold error_form"></div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-danger">{{ __('page_back.close') }}</button>
                <button  data-dismiss="modal" aria-label="Close"  type="button" class="btn btn-primary update_course " >{{ __('page_back.update') }}</button>
                {{-- data-dismiss="modal" aria-label="Close" --}}
                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




{{-- delete_course --}}
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
            <input type="hidden" id="id_delete" name="id_delete" class="form-control"  >
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

  {{-- archive_course --}}
  <div class="modal fade" id="archive_course">
    <div class="modal-dialog">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h4 class="modal-title">{{__('page_back.Course Archived')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <form action="" id="archiveCourse" method="POST">
                @csrf
            <input type="hidden" id="id_archive" name="id_archive" class="form-control"  >
        </form>
          <p>{{__('page_back.are you archived course')}}</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">{{__('page_back.close')}}</button>
          <button type="button" class="btn btn-success archive_course" data-dismiss="modal"> {{__('page_back.archive')}}</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

 {{-- model view gallry --}}
@foreach ($modal as $courses)
  <div class="modal fade" id="view_img{{$courses->id}}" style="height: 600px">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 580px">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('page_back.course img') }}</h4>
                {{-- <h4 class="modal-title"> {{$courses->getTranslation('name')}}</h4> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height: 100%">

                <img src="{{asset('images/courses/'.$courses->img)}}" class="img-fluid mb-2"
                    style="height:80%;width:100%;" alt="white sample">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
