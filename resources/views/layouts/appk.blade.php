<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>CABEK Cabinet d'exprtise</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="CABEK,expertise automobile,assurance,garage, SAHAM,RMA,ATLANTA,WAFA assurance,CAT,ALLIANZ,MATU,MANDA MCMA,assurance casablanca,courtier,agent assurance,AFMA,voiture occasion " name="keywords">
  <meta content="L'expert automobile maitrise non seulement la technique automobile, mais il connait aussi la législation en matière d'assurances, de responsabilité, de code de la route .
  L'expert automobile intervient également sur d'autres véhicules comme les bateaux, les motos, les poids lourds et l'assistance dans l'achat d'un véhicule d'occasion." name="description">

{{--    calendar--}}
    <meta charset='utf-8' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link  href='{{asset('assets/fullcalendar/lib/main.css')}}' rel='stylesheet' />
    <link  href='{{asset('assets/fullcalendar/css/style.css')}}' rel='stylesheet' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Favicons -->
  <link href="{{ asset('/img/14.png') }}" rel="icon">
  <link href="{{ asset('/img/14.png') }}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}} " rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
{{--  flatpickr--}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.css" integrity="sha512-OtwMKauYE8gmoXusoKzA/wzQoh7WThXJcJVkA29fHP58hBF7osfY0WLCIZbwkeL9OgRCxtAfy17Pn3mndQ4PZQ==" crossorigin="anonymous" />

    <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('css')


  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
 <!--==========================
    Header
  ============================-->
  <header id="header"  style="background-color: black ; opacity:0.5">
        <div class="container-fluid">

          <div id="logo" class="pull-left">
            <h1><a href="{{route('priserendezvous')}}" class="scrollto">CABEK</a></h1>
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu"><a href="{{route('accueil')}}"> Accueil</a></li>
              <li><a href="{{route('entreprise')}}">Entreprise</a></li>
              <li><a href="{{route('service')}}">Service client</a></li>
              <li class="menu-has-children"><a href="{{route('compétences')}}"> Compétences</a>
                <ul>
                  <li><a href="{{route('determination')}}"> Détermination de la valeur d’un véhicule </a></li>
                  <li><a href="{{route('analyse')}}"> Analyse de Rupture </a></li>
                  <li><a href="{{route('estimation')}}"> Estimation de dommage</a></li>
                </ul>
              </li>
              <li><a href="{{route('blog')}}">            Blog                            </a></li>
              <li><a href="{{route('machine')}}">         CABEK 360°                      </a></li>
              <li><a href="{{route('priserendezvous')}}"> Rendez vous                     </a></li>
              <li><a href="{{route('contact')}}">         Contact                         </a></li>



               @if(Auth::check())
                  <!-- item-->
                      <li class="menu-has-children"><a href="{{route('fullcalendar')}}"> Planifier</a>
                        <ul>
                            <li ><a href="{{route('rendezvous.index')}}">  <span style="color: black"> Les Rendes vous    </span>  </a></li>
                        </ul>
                      </li>

                      <li class="menu-has-children"><a href="{{route('fullcalendar')}}"> Compte</a>
                          <ul>
                              <li>
                                  <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                      <i class="fe-log-out"></i>
                                      <span>Logout</span>
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>

                              </li>
                              <li><a href="{{route('register')}}">         Register     </a></li>
                              @else

                                  <li><a href="{{route('login')}}">         Login     </a></li>

                              @endif
                          </ul>
                      </li>



            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->

      <a href="#" class="back-to-top" style="display: inline;"><i class="fa fa-chevron-up"></i></a>

      <main id="main" >
           @yield('content')
      </main>

<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{ asset('contactform/contactform.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js') }}"></script>
 {{--  flatpickr--}}

@yield('js')
</body>
</html>
