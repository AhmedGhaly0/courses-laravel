<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset("promo/img/logosite.png")}}" type="image/png">
    @section('title_page')
    {{trans('promo.title')}}
    @endsection
    <title> @yield('title_page') </title>

    @yield('css')
    <link href="{{asset("promo/css/all.min.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/stylefont.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/hover-min.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/bootstrap-datepicker3.min.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/nice-select.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/owl.theme.default.min.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("promo/css/responsive.css")}}" rel="stylesheet" >
    <link href="{{asset("promo/css/fontawesome.min.css")}}" rel="stylesheet" >


</head>

<body

    @if(App::getLocale() == 'ar')
    style="direction: rtl;"
    @else
    style="direction: ltr;"
    @endif
>

    <!-- start menu section -->
    {{-- <header class="head"> --}}
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class=" row avatar text-white "  href="{{url('/')}}" style="text-decoration: none;">
                                     <img class="avatar avatar-md" src="{{asset("promo/img/logo2.png")}}" alt="logo">
                                     <h3>{{ trans('promo.title') }}</h3>

              </a>
              <div class="row">
                <a href="{{route('login')}}" class="btn btn-success m-2  hvr-sweep-to-right">{{ trans('promo.login') }}</a>

                <a href="{{route('register')}}" class="btn btn-success  mr-auto m-2 hvr-sweep-to-right ">{{ trans('promo.register') }}</a>

                <div class="btn-group mb-1 m-2">
                    {{ trans('promo.language') }}
                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                      @if (App::getLocale() == 'ar')
                      العربيـة
                     <img src="{{ URL::asset('promo/img/eg.png') }}" alt="">
                      @else
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                      <img src="{{ URL::asset('promo/img/US.png') }}" alt="">
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

            </div>




                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </div>
            </div>
          </nav>
          <div class="mt-5"></div>



           <!-- end menu section -->



    <!-- start Facilities -->

    <section class="facilities-section mt-5">
        <div class="lyr2 mt-3">
            <div class="container">
                <div class="row">
                    @yield('login')
                    @yield('register')
                  @yield("promo_one")
                  {{-- @yield("reset") --}}
                  @yield("content")

@yield('home')

                </div>
            </div>
        </div>
    </section>

    <!-- end Facilities -->

    <!-- start serves -->

@yield('promo')
   <!-- start footer -->

@yield('footer')


   <!--  end footer -->




    <!-- start js -->
    <script src="{{asset('promo/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('promo/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('promo/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('promo/js/fontawesome.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('select').niceSelect();
        });
    </script>
    <script src="{{asset('promo/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $('.datepicker').datepicker();
    </script>
     <script src="{{asset('promo/js/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({

                loop:true,
                autoplay:true,
                margin: 30,
                items: 2,
                nav: false,
                autoplay: true,
                autoplaySpeed:1300,
                  nav:true,
                  responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                }
            });
});
</script>

    <script src="{{asset('promo/js/script.js')}}"></script>
</body>

</html>

