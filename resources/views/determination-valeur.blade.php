@extends('layouts.appk')
@section('content')




 <!---==========================
       Intro Section
     ============================-->
  <section id="intro">
        <div class="intro-container">
          <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

              <div class="carousel-item active">
                <div class="carousel-background"><img src="{{asset('img/a.jpg')}}" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">

                   <strong style="font-size: 500%" > Détermination de la valeur </strong><br>

                  </div>
                </div>
              </div>



          </div>
        </div>
      </section> <!--#intro -->




   <!--==========================
      Services Section
    ============================-->
    <section id="services">
            <div class="container">


              <div class="row" >

                    <header class="section-header wow fadeInUp"  style="text-align: center">
                    <h1 style="text-align: center">   Détermination de la valeur  </h1>
                            <p  style="text-align: center">
                                    <p>L’expertise d’établissement de valeur peut avoir plusieurs buts :  <br>
                                      Déterminer de façon indépendante la valeur d’un véhicule de famille . <br>
                                      Déterminer la valeur pour les besoins d’un assureur qui garantit le véhicule. <br>
                                      Déterminer la valeur d’un véhicule unique et donc sans référence de marché.  <br>
                                      Déterminer la valeur d’une réplique originale. <br>
                                      Déterminer la valeur globale d’un véhicule amélioré par rapport à la série. <br>
                                      Déterminer la valeur d’un véhicule de compétition. <br>
                                      Déterminer la valeur d’un véhicule suite à un sinistre. </p><br>


                                </header>
                                <br> <br> <br>

              </div>

            </div>
          </section><!-- #services -->

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
               <!---<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>------>
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

          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
      <a href="">CABEK</a>
      </div>
    </div>
  </footer><!--#footer -->


 <!------------------------------------------------------------------------------------------------------------------->

@endsection
