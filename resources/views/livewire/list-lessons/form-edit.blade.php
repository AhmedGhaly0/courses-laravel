
{{-- form one title --}}
<div class="tab-content" id="main_form">
    <div class="tab-pane  {{ $stepEdit != 1 ? 'bg-defaul' : 'active' }}" role="tabpanel">
        <div class="title-form">
            <h4 class="text-center mb-4 text-success col-4">{{ __('page_back.lesson title') }}</h4>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.name_lesson_en') }}</label>
                    <input class="form-control " type="text" wire:model="name_en" placeholder="">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.name_lesson_ar') }}</label>
                    <input class="form-control " type="text" wire:model="name_ar" placeholder="">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.number_lesson') }}</label>
                    <input type="number" wire:model="nub_leson" class="form-control " placeholder="">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.name course') }}</label>
                    <select class="custom-select" wire:model="course_id"  id="inputGroupSelect04">
                        <option  selected >{{ __('page_back.Choose') }}</option>
                        @foreach ($courses as $courses)
                            <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>
        <ul class="list-inline ">
            <li><button type="button" class="btn btn-success ml-5 btn-sm"
                    wire:click="steptow">{{ __('page_back.next') }}</button></li>
        </ul>
    </div>
</div>




{{-- form link --}}
<div class="tab-content" id="main_form">
    <div class="tab-pane  {{ $stepEdit != 2 ? 'bg-defaul' : 'active' }}" role="tabpanel" id="step1">
        <div class="title-form">
            <h4 class="text-center mb-4 text-success col-4">{{ __('page_back.lesson link') }}</h4>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.external link') }}</label>
                    <input class="form-control" type="text" wire:model="ex_link" placeholder="">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.screen link') }}</label>
                    <input class="form-control " type="text" wire:model="sn_link" placeholder="">

                </div>
            </div>



        </div>
        <ul class="list-inline ">
            <li><button type="button" class="btn btn-outline-danger btn-sm  mr-2"
                    wire:click="back(1)">{{ __('page_back.back') }}</button></li>
            <li><button type="button" class="btn btn-success btn-sm "
                    wire:click="stepthree">{{ __('page_back.next') }}</button></li>
        </ul>
    </div>
</div>




<div class="tab-content" id="main_form">
    <div class="tab-pane  {{ $stepEdit != 3 ? 'bg-defaul' : 'active' }}" role="tabpanel" id="step1">
        <div class="title-form">
            <h4 class="text-center mb-4 text-success col-4">{{ __('page_back.fainish') }}</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <h3>{{ __('page_back.description_update') }}</h3>
                </div>
            </div>
        </div>
        <ul class="list-inline ">
            <li><button type="button" class="btn btn-outline-danger btn-sm  mr-2"
                    wire:click="back(2)">{{ __('page_back.back') }}</button></li>
            <li><button type="button" class="btn btn-success btn-sm "
                    wire:click="updateLesson">{{ __('page_back.update') }}</button></li>
        </ul>
    </div>
</div>
