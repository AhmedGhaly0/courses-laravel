
{{-- form one title --}}
<div class="tab-content" id="main_form">
    <div class="tab-pane  {{ $stepform != 1 ? 'bg-defaul' : 'active' }}" role="tabpanel">
        <div class="title-form">
            <h4 class="text-center mb-4 text-success col-4">{{ __('page_back.lesson title') }}</h4>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.name_lesson_en') }}</label>
                    <input class="form-control @error('name_en') border-2 border-danger  @enderror" type="text" wire:model="name_en" placeholder="@error('name_en') {{ $message }}  @enderror">
                    @error('name_en')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.name_lesson_ar') }}</label>
                    <input class="form-control  @error('name_ar') border-2 border-danger  @enderror" type="text" wire:model="name_ar" placeholder="@error('name_ar') {{ $message }}  @enderror">
                    @error('name_ar')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.number_lesson') }}</label>
                    <input type="number" wire:model="nub_leson" class="form-control @error('nub_leson') border-2 border-danger  @enderror" placeholder="">
                    @error('nub_leson')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.name course') }}</label>
                    <select class="custom-select @error('course_id') border-2 border-danger  @enderror" wire:model="course_id"  id="inputGroupSelect04">
                        <option selected >{{ __('page_back.Choose') }}</option>
                        @foreach ($courses as $courses)
                            <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                        @endforeach
                    </select>
                    @error('course_id')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                    @enderror
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
    <div class="tab-pane  {{ $stepform != 2 ? 'bg-defaul' : 'active' }}" role="tabpanel" id="step1">
        <div class="title-form">
            <h4 class="text-center mb-4 text-success col-4">{{ __('page_back.lesson link') }}</h4>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.external link') }}</label>
                    <input class="form-control @error('ex_link') border-2 border-danger  @enderror" type="text" wire:model="ex_link" placeholder="@error('ex_link') {{ $message }}  @enderror">
                    @error('ex_link')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{{ __('page_back.screen link') }}</label>
                    <input class="form-control @error('sn_link') border-2 border-danger  @enderror" type="text" wire:model="sn_link" placeholder=" @error('sn_link'){{ $message }}@enderror">
                    @error('sn_link')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="">
                <div class="form-group">
                    <label>{{ __('page_back.desc') }}</label>
                    <textarea class="form-control"  wire:model="desc"></textarea>
                </div>
            </div>
            {{-- uploadFile --}}
            <div class="col-4">
                <button type="button" class="btn btn-primary   m-3" style="{{ $uploadFile != 1 ? 'btn-sm' : 'display:none;' }}"
                    wire:click="uploadFile">{{ __('page_back.upload_file') }} <i class="fas fa-file-upload"></i></button>
            </div>
                                {{-- uploadFile --}}
                            <div class="tab-content" id="main_form">
                    <div class="tab-pane  {{ $uploadFile != 1 ? 'bg-defaul' : 'active' }}" role="tabpanel" id="step1">
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
    <div class="tab-pane  {{ $stepform != 3 ? 'bg-defaul' : 'active' }}" role="tabpanel" id="step1">
        <div class="title-form">
            <h4 class="text-center mb-4 text-success col-4">{{ __('page_back.fainish') }}</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <h3>{{ __('page_back.description') }}</h3>
                </div>
            </div>
        </div>
        <ul class="list-inline ">
            <li><button type="button" class="btn btn-outline-danger btn-sm  mr-2"
                    wire:click="back(2)">{{ __('page_back.back') }}</button></li>
            <li><button type="button" class="btn btn-success btn-sm "
                    wire:click="storeLesson">{{ __('page_back.Confirm') }}</button></li>
        </ul>
    </div>
</div>
