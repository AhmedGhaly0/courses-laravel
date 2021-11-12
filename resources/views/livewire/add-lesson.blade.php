
<section class="signup-step-container">
    @if (!empty($SuccessMessage))
<div class="alert alert-success alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i>{{ $SuccessMessage }}</h5>
  </div>
@endif
<div class=""><br></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="disabled">
                                <a ><span class="round-tab {{$stepform !=1 ? 'bg-defaul' : 'bg-success'}}">1 </span> <i class="{{$stepform !=1 ? 'bg-defaul' : 'text-success'}}">{{__('page_back.lesson title')}}</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a  ><span class="round-tab {{$stepform !=2 ? 'bg-default' : 'bg-success'}}">2</span> <i class="{{$stepform !=2 ? 'bg-defaul' : 'text-success'}}">{{__('page_back.lesson link')}}</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a><span class="round-tab {{$stepform !=3 ? 'bg-default' : 'bg-success'}} ">3</span> <i class="{{$stepform !=3 ? 'bg-defaul' : 'text-success'}}">{{__('page_back.fainish')}}</i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- start form --}}
    <div class="border pl-5 pr-5 rounded">

        @include('livewire.form-add')

        </div>
</section>
