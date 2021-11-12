

      <div class="row">
        <div class="col-12">
          <!-- Custom Tabs -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">{{__('page_back.datils lesson')}}  <i class="fas fa-eye "></i> </h3>
              <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">{{__('page_back.datils lesson')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">{{ __('page_back.attachments') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">{{ __('page_back.upload_file') }}</a></li>
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                    <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                    <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                  </div>
                </li> --}}
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th >{{ __('page_back.name_lesson') }}</th>
                                    <th >{{ __('page_back.name course') }}</th>
                                    <th >{{ __('page_back.number_lesson') }}</th>
                                    <th >{{ __('page_back.add by') }}</th>
                                    <th >{{ __('page_back.date add') }}</th>
                                    <th >{{ __('page_back.updated at') }}</th>

                                </tr>
                            </thead>
                            <tbody id="tableCourses" >
                                @foreach ($lesson as $lesson)
                                <tr>
                                    <td>{{$lesson->name}}</td>
                                    <td >{{$lesson->course->name}}</td>
                                    <td>{{$lesson->number}}</td>
                                    <td>{{$lesson->user_by}}</td>
                                    <td>{{$lesson->created_at}}</td>
                                    <td>{{$lesson->updated_at}}</td>
                                    <td>
                                      </td>
                                </tr>
                                <thead>
                                    <tr>
                                        <th>{{ __('page_back.external link') }}</th>
                                        <th >{{ __('page_back.screen link') }}</th>
                                       <th >{{ __('page_back.desc') }}</th>
                                         {{-- <th >{{ __('page_back.view_file') }}</th> --}}

                                    </tr>
                                </thead>
                                    <tr>
                                         <td > {{$lesson->external_link}}</td>
                                         <td > {{$lesson->screen_link}}</td>
                                        <td >{{$lesson->desc}}</td>
                                    </tr>
                                    @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <div class="m-4">
                        <div class="card-body">
                            <table class="table table-bordered table-striped ">
                                @foreach ($upload_lesson as $upload)

                                <thead>
                                    <tr>

                                        <th >{{ __('page_back.view_file') }}</th>
                                        <th >{{ __('page_back.view_file') }}</th>


                                        <th >{{ __('page_back.processes') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="tableCourses" >

                                <tr>

                                    {{-- <td><img src="{{ asset('storage/app/'.$upload->file) }}"></td> --}}
                                    <td><img src="{{ asset('storage/1.jpg') }}"></td>

                                    {{-- <img src="{{$upload->file}}" alt="utdtdtyd"> --}}
                                    <td>{{$upload->file}}</td>



                                    <td>
                                            <button type="button" wire:click="showFile({{$upload->file}})" class="btn btn-xs bg-success" title="{{__('page_back.view_file')}}">
                                                <i class="fas fa-images"></i>
                                            </button>

                                            <button type="button" wire:click="deleteFile({{$upload->id}})" class="btn btn-xs bg-danger " title="{{__('page_back.delete')}}">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            </td>
                                </tr>
                            </tbody>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                    <div class="tab-content m-4" id="main_form">

                            <div class="row">
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('page_back.file_name_en') }}</label>
                                        <input class="form-control " type="email" wire:model="name_f_en" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('page_back.file_name_ar') }}</label>
                                        <input class="form-control" type="text" wire:model="name_f_ar" placeholder="">
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('page_back.upload_file') }}</label>
                                        <input class="form-control" type="file" wire:model="upload_file" name="upload_file">
                                    </div>
                                </div>
                            </div>
                                </div>
                            <button type="button" wire:click="file_upload" class="btn btn-success">{{ __('page_back.Confirm') }}</button>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- ./card -->
        </div>
        <!-- /.col -->
      </div>

    <!-- /.card -->


