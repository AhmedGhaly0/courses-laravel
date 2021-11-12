@section('css')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/toastr/toastr.min.css')}}">
@endsection

<div>
    @if (!empty($UpdateMessage))
<div class="alert alert-success alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="fas fa-edit ml-2 mr-2"></i>{{ $UpdateMessage }}</h5>
  </div>
@endif
@if (!empty($deleteMessage))
<div class="alert alert-success alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="fas fa-trash-alt  ml-2 mr-2"></i>{{ $deleteMessage }}</h5>
  </div>
@endif
@if (!empty($deleteFileMessage))
<div class="alert alert-success alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="fas fa-trash-alt  ml-2 mr-2"></i>{{ $deleteFileMessage }}</h5>
  </div>
@endif
@if ($showtable)
@include('livewire.list-lessons.table-lessons')
@elseif ($form_edit)
<button type="button" wire:click="showtablelessons" class="btn btn-xs bg-primary edit_course m-1"> {{__('page_back.Show Table')}} <i class="fas fa-table"></i></button>
<p  class=" text-center bg-secondary"> {{__('page_back.update')}} <i class="fas fa-edit ml-2"></i></p>
<section class="signup-step-container">
<div class=""><br></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="disabled">
                                <a ><span class="round-tab {{$stepEdit!=1 ? 'bg-defaul' : 'bg-success'}}">1 </span> <i class="{{$stepEdit!=1 ? 'bg-defaul' : 'text-success'}}">{{__('page_back.lesson title')}}</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a  ><span class="round-tab {{$stepEdit!=2 ? 'bg-default' : 'bg-success'}}">2</span> <i class="{{$stepEdit!=2 ? 'bg-defaul' : 'text-success'}}">{{__('page_back.lesson link')}}</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a><span class="round-tab {{$stepEdit!=3 ? 'bg-default' : 'bg-success'}} ">3</span> <i class="{{$stepEdit!=3 ? 'bg-defaul' : 'text-success'}}">{{__('page_back.fainish')}}</i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="border pl-5 pr-5 rounded">

            @include('livewire.list-lessons.form-edit')

        </div>
</section>
@else
<button type="button" wire:click="showtablelessons" class="btn btn-xs bg-primary edit_course m-1"> {{__('page_back.Show Table')}} <i class="fas fa-table"></i></button>
@includeIf('livewire.list-lessons.datils-lesson')
@endif

</div>

@section('js')
<script src="{{asset('dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
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

  <script>
      // $('#messageUpdate').val();
//       var course_id = $('#messageUpdate').val();
//       if (course_id){
//         $(function() {
//     toastr.success(course_id)
//   });
// }
  </script>

@endsection
