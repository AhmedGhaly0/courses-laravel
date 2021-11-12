@extends('layouts.app')

@section('promo_one')
<div class="col-md-12 facilities-content text-center pt-5">
    <h1>{{ trans('promo.t2') }}</h1>
    <p>{{ trans('promo.p1') }}</p>
    <p>{{ trans('promo.p2') }}</p>
</div>
</div>
<div class="row">
<div class="col-md-4 col-12">
    <div class="facility">
        <h4><i class="lnr lnr-film-play"></i>
            {{ trans('promo.feature_h1') }}
        </h4>
        <p>{{ trans('promo.feature_p1') }}</p>
    </div>
  </div>

  <div class="col-md-4 col-12">
    <div class="facility">
        <h4 class="fs-6"><i class="lnr lnr-earth"></i>
            {{ trans('promo.feature_h2') }}
        </h4>
        <p>{{ trans('promo.feature_p2') }}</p>
    </div>
  </div>
  <div class="col-md-4 col-12">
    <div class="facility">
        <h4><i class="lnr lnr-diamond"></i>
            {{ trans('promo.feature_h3') }}
        </h4>
        <p>{{ trans('promo.feature_p3') }}</p>
    </div>
  </div>
@endsection





@section('promo')

<div class="serves">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h2>{{__('promo.about_title')}}<br>
                    {{__('promo.about_title2')}}
                 </h2>
                    <p>{{__('promo.about_p')}}</p>

            </div>
            <div class="col-md-6 col-12 cover_img">
                <img src="{{asset("promo/img/Presenting.png")}}">
            </div>

        </div>
    </div>
</div>

<!-- end serves -->



<!-- start testimonial -->

<section class="testimonial_area section_gap ">
    <div class="container ">
    <div class="section_title text-center">
    <h2>{{__('promo.clients_h')}}</h2>
    <p>{{__('promo.clients_p')}}</p>
    </div>
    <!-- owl-carousel owl-theme -->
<div class=" row owl-carousel  ">


    <div class="media testimonial_client   item">
        <img class="rounded-circle d-inline" src="{{asset("promo/img/666.jpeg")}}" alt="">
      <div >
         <h4 class="">Mahmoud Gaber</h4>
        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
        <a href="https://www.facebook.com/"><h4 class="sec_h4">facebook</h4></a>
      </div>
    </div>
    <div class="media testimonial_client   item">
        <img class="rounded-circle d-inline" src="{{asset("promo/img/DSC_0047.JPG")}}" alt="">
      <div >
         <h4 class="">Moneam Ali</h4>
        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
        <a href="https://www.facebook.com/"><h4 class="sec_h4">facebook</h4></a>
      </div>
    </div>
    <div class="media testimonial_client   item">
        <img class="rounded-circle d-inline" src="{{asset("promo/img/DSC_0268.jpg")}}" alt="">
      <div >
         <h4 class="">Hamed Hamd</h4>
        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
        <a href="https://www.facebook.com/"><h4 class="sec_h4">facebook</h4></a>
      </div>
    </div>
    <div class="media testimonial_client   item">
        <img class="rounded-circle d-inline" src="{{asset("promo/img/ghaly.png")}}" alt="">
      <div >
         <h4 class="">Ahmed Ghaly</h4>
        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
        <a href="https://www.facebook.com/"><h4 class="sec_h4">facebook</h4></a>
      </div>
    </div>

</div>
</div>
</section>
<!-- end testimonial -->







<!-- end latest_blog  -->
@endsection


@include('layouts.footer')


