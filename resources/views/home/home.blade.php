
@if (App\Models\User::where('status',1))
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   @section('title')
   {{__('home.title')}}
   @stop
    <title>
     @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" >
    <link rel="stylesheet" href="{{asset('home/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" media="(max-width: 800px)" href="{{asset('home/css/media 300.css')}}">

    <link href="{{asset('home/img/logosite.png')}}" rel="icon" type="image/x-icon" style="width: 50px; height: 50px;">
</head>
<body
{{-- @if(App::getLocale() == 'ar')
style="direction: rtl;"
@else
style="direction: ltr;"
@endif --}}
>
<!--  loading -->
     <div class="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- Choose Accent Color  -->
    <section class="righting col-10 col-lg-5">
        <div class="list-right"><i class="fa fa-cogs moverup"></i><i class="fa fa-remove moverup mover"></i>
        </div>
                <h6>Choose Accent Color</h6>
        <section class="container">
            <div class="row">
                    <div class="colours c1"></div>
                    <div class="colours c2"></div>
                    <div class="colours c3"></div>
                    <div class="colours c4"></div>
                    <div class="colours c5"></div>
                    <div class="colours c6"></div>
                    <div class="colours c7"></div>
                    <div class="colours c8"></div>
                    <div class="colours c9"></div>
                    <div class="colours c10"></div>
                    <div class="colours c11"></div>
                    <div class="colours c12"></div>
                    <div class="colours c13"></div>
                    <div class="colours c14"></div>
                    <div class="colours c15"></div>
                    <div class="colours c16"></div>
                    <div class="colours c17"></div>
                    <div class="colours c18"></div>
                    <div class="colours c19"></div>
                    <div class="colours c20"></div>
            </div>
        </section>
    </section>



<!-- Start header -->
    <header>
        <div class="back content">
            <nav class="navbaro">
                <div class="btn-group mb-1 m-2">

                    <button style="display: inline-block" type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <small class=" m-1">
                            {{ trans('promo.language') }}

                            </small>
                      @if (App::getLocale() == 'ar')

                      العربيـة
                     <img  src="{{ URL::asset('home/img/eg.png') }}" alt="">

                      @else
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                      <img src="{{ URL::asset('home/img/US.png') }}" alt="">
                      @endif
                      </button>
                    <div class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                        @endforeach
                    </div>
                </div>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/kfscommerce25" target="blanck"><i  class="fa fa-facebook icon-primary" alt="يوميات محاسب"></i></a>

                     <SPAN>
                        {{__('home.follow us')}}
                    </SPAN>
                </li>




                </ul>


                    <a class="link_logo text-white " href="{{url('/')}}" style="text-decoration:none;">
                        {{__('home.learn')}} <span class="st main-color">  {{__('home.to')}} </span>
                        <img class="img_logo" src="{{asset('home/img/logo2.png')}}" alt="Logo">

                    </a>


                    </nav>
            <article class="title">
                <section class="contented">
                <p>
                    {{__('home.Welcome to the site and library')}}
                </p>
                <h1>{{trans('home.learn')}}<span class="st main-color">{{__('home.to')}}</span></h1>
                {{-- <h1 class="m-1">{{trans('home.t')}}<span class="st main-color" style="font-size: 30%">{{__('home.laibrary')}}</span>{{__('home.to')}}</h1> --}}
                    <button class="upper boorderr hire hvr-radial-out"> {{__('home.the team work')}} </button>
                </section>
            </article>
            <div class="arrow  ">
                <i class="fa fa-chevron-down ss"></i>
              </div>
        </div>
    </header>

     <!-- End header -->




<div class="features mb-5 p-2"></div>

<!-- start Subjects   -->
<div class="container ">
@yield("titleOne")

        @yield('content')
    </div>


<hr class="ss">

<hr class="ss">

            <!--  Start our team -->
        <div class="our-team text-center">
            <div class="container">
               @yield("titleTow")
             @yield("the_team")

            </div>
        </div>
    <!-- End our team -->




    <div class="contact text-center">
        <div class="overlay ">
            <div class="container">

                @yield("titleThree")

                @if ($errors->any())
              <div class="alert alert-danger alert-dismissible sewthidden ">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5 class="text-center"><i class="icon fa fa-ban"></i> ERROR!</h5>
             @foreach ($errors->all() as $error)
                  <li class="text" style="list-style:none; "><i class="fa fa-exclamation-triangle"></i>{{ $error }}</li>
              @endforeach
               </div>
  @endif
@if(Session::has('message'))
     <p class="alert sewthidden {{ Session::get('alert-class', 'alert-danger') }}"> {{ Session::get('message') }} <i class="fas fa-exclamation-triangle"></i></p>
 @endif

@if(Session::has('mesg'))
     <p class="alert sewthidden {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('mesg') }} <i class="far fa-hand-peace"></i></p>
@endif

                <form class=" col-12 col-sm-10 col-lg-12" action ="{{url('/massage')}}" method="post">
                @csrf
                    <input class="input-left  boorderr col-12 col-sm-10" type="email" name="email" placeholder="Your Email">
                    <input class="input-right  boorderr col-12 col-sm-10" type="text" name="name" placeholder="Your Name">
                    <textarea class="textarea  boorderr col-12 col-sm-12" placeholder="Massage" name="coment"></textarea>
                    <div class="info">
                        <button type="submit" class="upper">SEND Mail <i class="fa fa-envelope ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>




     <a href="#" id="scrollup" class="scrollup ss" ><i class="fa fa-angle-up"></i></a>












<a class="btn btn-success m-5" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                     class="bx bx-log-out"></i>تسجيل خروج</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf

                                     </form>

 @include('layouts.footer')
    <!--  Start Code BootStrap 4-->

    <script src="{{asset('home/js/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>

    <!--  End Code BootStrap 4-->

    <!--  Start Code Jquery-->

    <script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('home/js/testing.js')}}"></script>
    <script>
  $(document).ready(function() {
    $(".sewthidden").delay(9000).fadeOut();
  });
 </script>
    <!--  End Code Jquery-->



</body>
</html>
@else
{{ 'ggggggggggggggggggggggggggggggggggggg' }}
@endif
