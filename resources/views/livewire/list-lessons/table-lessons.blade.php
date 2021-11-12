
        {{-- <button type="submit" class="toastrDefaultSuccess btn btn-success">Aleart Test</button> --}}
        @if (!empty($UpdateMessage))
        <input type="hidden" id="messageUpdate" value="{{$UpdateMessage}}">

        @endif

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th> # </th>
                        <th >{{ __('page_back.name_lesson') }}</th>
                        <th >{{ __('page_back.number_lesson') }}</th>
                        <th >{{ __('page_back.external link') }}</th>
                        <th >{{ __('page_back.name course') }}</th>
                        {{-- <th >{{ __('page_back.add by') }}</th> --}}
                        <th >{{ __('page_back.date add') }}</th>
                        <th >{{ __('page_back.processes') }}</th>
                    </tr>
                </thead>
                <tbody id="tableCourses" >
                    @php
                        $i=0;
                    @endphp
                    @foreach ($lessons as $lesson)
                    @php
                    $i++
                    @endphp
                     {{-- wire:poll --}}
{{-- style="font-size: 12px;"><small class="badge badge-secondary">{{$lesson->screen_link}}</small> --}}
                    <tr id="up{{$lesson->id}}">
                        <td >{{$i}}</td>
                        <td>{{$lesson->name}}</td>
                        <td>{{$lesson->number}}</td>
                        <td style="font-size: 16px;"> <a href="{{$lesson->external_link}}" target="_blanck" class="badge badge-secondary"> {{__('page_back.external link')}}</a></td>
                        <td > <a href="{{url('/all_courses')}}">{{$lesson->course->name}}</a> </td>
                        <td class="text-sm">{{$lesson->created_at}}</td>
                        <td>
                                <button type="button" wire:click="showformedit({{$lesson->id}})" class="btn btn-xs bg-primary" title="{{__('page_back.update')}}"><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-xs bg-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="{{__('page_back.delete')}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                      <button class="dropdown-item  text-danger"  wire:click="delete({{$lesson->id}})"><i class="fas fa-trash-alt"></i> {{__('page_back.delete')}}</button>
                                    </div>


                                <button type="button" wire:click="viewditals({{$lesson->id}})" class="btn btn-xs bg-warning " title="{{__('page_back.datils lesson')}}"><i class="fas fa-eye"></i></button>

                          </td>




                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>








