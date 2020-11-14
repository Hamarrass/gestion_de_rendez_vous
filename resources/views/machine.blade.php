
 
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/img/14.png" rel="icon">
    <link href="/img/14.png" rel="apple-touch-icon">
  
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
  
    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
<!--    <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script>-->
    
    
  <!-----le css de view machine ----->  
    <style>
        body{
            height: 100vh;
        }
        .cloudimage-360 .cloudimage-360-prev, .cloudimage-360 .cloudimage-360-next {
            padding: 8px;
            background: rgba(255, 255, 255, 0.5);
            border: none;
            border-radius: 4px;
        }
        .cloudimage-360 .cloudimage-360-prev:focus, .cloudimage-360 .cloudimage-360-next:focus {
            outline: none;
        }
        .cloudimage-360 .cloudimage-360-prev {
            display: none;
            position: absolute;
            z-index: 100;
            top: calc(50% - 15px);
            left: 20px;
        }
        .cloudimage-360 .cloudimage-360-next {
            display: none;
            position: absolute;
            z-index: 100;
            top: calc(50% - 15px);
            right: 20px;
        }
        .cloudimage-360 .cloudimage-360-prev:before, .cloudimage-360 .cloudimage-360-next:before {
            content: '';
            display: block;
            width: 30px;
            height: 30px;
            background: 50% 50% / cover no-repeat;
        }
        .cloudimage-360 .cloudimage-360-prev:before {
            background-image: url('https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/assets/img/arrow-left.svg');
        }
        .cloudimage-360 .cloudimage-360-next:before {
            background-image: url('https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/assets/img/arrow-right.svg');
        }
        .cloudimage-360 .cloudimage-360-prev.not-active, .cloudimage-360 .cloudimage-360-next.not-active {
            opacity: 0.4;
            cursor: default;
        }
        #outfit{
            transition: all 1s ease;
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            -webkit-transition: all 1s ease;
            -o-transition: all 1s ease;
            }
            #outfit:hover {
            transform: scale(1.5);
            -moz-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5); /* IE 9 */
            -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand')"; /* IE8 */
            filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand'); /* IE6 and 7 */ 
            } 
    </style>

</head>

<body >
        <header id="header"  style="background-color: black ; opacity:0.5">
                <div class="container-fluid">
            
                  <div id="logo" class="pull-left">
                    <h1><a href="{{route('accueil')}}" class="scrollto">CABEK</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
                  </div>
            
                  <nav id="nav-menu-container">
                    <ul class="nav-menu ">
                      <li class="menu-active"><a href="{{route('accueil')}}"> Accueil</a></li>
                    <li><a href="{{route('entreprise')}}">Entreprise</a></li>
                      <li><a href="{{route('service')}}">Services</a></li>
                      <!--<li><a href="#portfolio">Portfolio</a></li>-->
                      <!--<li><a href="#team">Team</a></li>-->
                      <li class="menu-has-children"><a href="{{route('compétences')}}"> Compétences</a>
                        <ul>
                          <li><a href="{{route('determination')}}"> Détermination de la valeur d’un véhicule </a></li>
                          <li><a href="{{route('analyse')}}"> Analyse de Rupture </a></li>
                          <li><a href="{{route('estimation')}}"> Estimation de dommage</a></li>
                        </ul>
                      </li>
                      <li><a href="{{route('blog')}}">Blog</a></li>
                      <li><a href="{{route('machine')}}">CABEK 360°</a></li>
                      <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                  </nav><!-- #nav-menu-container -->
                </div>
              </header><!-- #header -->
         
               















  <!-- style="width: 800px;height: 800px;margin: 100px auto ;position:relative" -->
  <!-- class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" -->
  <!--class="cloudimage-360"
    <div class="cloudimage-360-box-shadow" style="position: relative; width: 100%; cursor: grab; min-height: auto" >
         <div class=" cloudimage-360 " 
             data-folder="img/machine/"
             data-filename="{index}.jpg"
             data-amount="36"
             data-autoplay="true"
             data-magnifier="2"
             data-bottom-circle="true"
             data-full-screen="true"  
            >
            <div class="cloudimage-360-prev"></div>
            <div class="cloudimage-360-next" ></div>
        </div>
        <div class="row" style="position:absolute; bottom: -100px; right: 250px; z-index: 111">
            <div class="col-12 text-right">
              <img src="img/logo.png" height="160px" width="200px" alt="logo">
            </div>
          </div>
    </div> -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width: 800px;height: 800px;margin: 100px auto; position:relative">
        <div class="cloudimage-360 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"
           data-folder="img/machine/"
             data-filename="{index}.jpg"
             data-amount="36"
             data-autoplay="false"
             data-magnifier="2"
             data-bottom-circle="true"
             data-full-screen="true" 
             >
            <div class="cloudimage-360-prev"></div>
            <div class="cloudimage-360-next"></div>
        </div>

        <div class="row" style="position:absolute; bottom: 120px; right: 10px; z-index: 100">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
              <img src="img/logo.png" height="160px" width="200px" alt="logo">
            </div>
          </div>
    </div>
 




<script src="js/js-cloudimage-360-view.min.js"></script>
<script src="js/wheelzoom.js"></script>
<script>
		function load() {
			var zoomIn  = -100;
			var zoomOut = 100;
			
			images = wheelzoom(document.querySelectorAll('img'), {zoom: 0.1, maxZoom: 10});
			
			images[0].addEventListener('wheelzoom.in', function(e) {
				document.getElementById('label1').innerHTML = '"wheelzoom.in"';
			});
			images[0].addEventListener('wheelzoom.out', function(e) {
				document.getElementById('label1').innerHTML = '"wheelzoom.out"';
			});
			images[0].addEventListener('wheelzoom.dragstart', function(e) {
				document.getElementById('label1').innerHTML = '"wheelzoom.dragstart"';
			});
			images[0].addEventListener('wheelzoom.drag', function(e) {
				document.getElementById('label1').innerHTML = '"wheelzoom.drag"';
			});
			images[0].addEventListener('wheelzoom.dragend', function(e) {
				document.getElementById('label1').innerHTML = '"wheelzoom.dragend"';
			});
			
			images[1].addEventListener('wheelzoom.in', function(e) {
				images[2].doZoomIn();
			});
			images[1].addEventListener('wheelzoom.out', function(e) {
				images[2].doZoomOut();
			});
			images[1].addEventListener('wheelzoom.drag', function(e) {
				images[2].doDrag(e.detail.bgPosX, e.detail.bgPosY);
			});
			
			images[2].addEventListener('wheelzoom.in', function(e) {
				images[1].doZoomIn();
			});
			images[2].addEventListener('wheelzoom.out', function(e) {
				images[1].doZoomOut();
			});
			images[2].addEventListener('wheelzoom.drag', function(e) {
				images[1].doDrag(e.detail.bgPosX, e.detail.bgPosY);
			});
			
			images[3].addEventListener('wheelzoom.in', function(e) {
				images[4].doZoomIn();
			});
			images[3].addEventListener('wheelzoom.out', function(e) {
				images[4].doZoomOut();
			});
			images[3].addEventListener('wheelzoom.dragend', function(e) {
				images[4].doDrag(e.detail.x, e.detail.y);
			});
			
			images[4].addEventListener('wheelzoom.in', function(e) {
				images[3].doZoomIn();
			});
			images[4].addEventListener('wheelzoom.out', function(e) {
				images[3].doZoomOut();
			});
			images[4].addEventListener('wheelzoom.dragend', function(e) {
				images[3].doDrag(e.detail.x, e.detail.y);
			});
        }
        </script>


<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</body>
</html>

           <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>CABEK</h3>
            <p> Notre cabinet est ouvert au public : <br>
                <b>Lundi à Vendredi : 9h-18h. </b>
                <br> N'hesitez pas à nous contacter pour tout autre renseignement <br> 
                   
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('accueil')}}">Accueil</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('entreprise')}}">Entreprise</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('service')}}">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('compétences')}}">Compétence</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('blog')}}">Blog</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('machine')}}">CABEK 360°</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('contact')}}">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contacter Nous</h4>
            <p>
                    49, rue karatchi<br>
                    2ème étage N°7<br>
                    Casablanca <br>
                <strong>Phone:</strong> <br>
                +212 522-449780 <br>
                +212 522-450830 <br>
                +212 522-448953 <br>
                +212 522-302869 <br>
                +212 661-980695 <br>
                +212 661-982432 <br>
                <strong>Fax:</strong> +212 522-541695<br>
              <strong>Email:</strong>reclamation@cabek.ma<br>
            </p>

            <div class="social-links">
               <!---<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>---->
              <!--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
              <!--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
               <!---<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>----->
               <!---<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>------>
                <a href="https://www.linkedin.com/company/cabinet-d-expertise-automobile-cabek/" class="linkedin" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>L'expertise</h4>
            <p> L'expert automobile maitrise non seulement la technique automobile, mais il connait aussi
                    la législation en matière d'assurances, de responsabilité, de code de la route . <br>
                    L'expert automobile intervient  également sur d'autres véhicules comme les bateaux, les motos, les poids lourds et l'assistance dans l'achat d'un véhicule d'occasion.
                   </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>CABEK</strong>.  
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
         <a href="">CABEK</a>
      </div>
    </div>
  </footer><!-- #footer --> 
