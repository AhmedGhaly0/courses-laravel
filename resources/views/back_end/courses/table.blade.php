<div   class="card-body">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>{{ __('page_back.name course') }}</th>
                        <th>{{ __('page_back.name teacher') }}</th>
                        <th>{{ __('page_back.img') }}</th>
                        <th>{{ __('page_back.add by') }}</th>
                        <th>{{ __('page_back.date add') }}</th>
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
                        <td>{{$courses->teacher->name}}</td>
                        <td>
                            <div title="{{ __('page_back.view img') }}" class="filtr-item col-sm-2"
                                data-toggle="modal" data-target="#view_img{{$courses->id}}" data-sort="white sample">
                                <a style="cursor: pointer;">
                                    <img src="{{asset('images/courses/'.$courses->img)}}"
                                        style="height: 50px; width:50px;"
                                        alt="{{ __('page_back.course img') }}">
                                </a>
                            </div>
                        </td>
                        <td>{{$courses->userby}}</td>
                        <td>{{$courses->created_at}}</td>
                        <td>
                                <button type="button" value="{{$courses->id}}" class="btn btn-xs bg-primary edit_course"  data-toggle="modal" data-target="#edit_course"><i class="far fa-edit"></i></button>
                                <button type="button" value="{{$courses->id}}" class="btn btn-xs   bg-warning modal_archive_course" data-toggle="modal" data-target="#archive_course"><i class="fas fa-exchange-alt "></i></button>
                                <button type="button" value="{{$courses->id}}" class="btn btn-xs bg-danger modal_delete_course" data-toggle="modal" data-target="#delete_course"><i class="fas fa-trash-alt"></i></button>

                          </td>




                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>






