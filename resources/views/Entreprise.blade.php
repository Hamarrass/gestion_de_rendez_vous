@extends('layouts.appk')
@section('content')
<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
        <div class="intro-container">
          <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

              <div class="carousel-item active">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma7.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cabek1.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma1.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cabek2.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma2.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cabek3.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma3.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cabek4.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma4.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cabek5.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma5.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cabek6.jpg')}}" alt=""></div>

              </div>

              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma6.jpg')}}" alt=""></div>

              </div>



              <div class="carousel-item">
                <div class="carousel-background"><img src="{{asset('img/entreprise/cdma8.jpg')}}" alt=""></div>

              </div>



            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
      </section><!-- #intro -->
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

          <header class="section-header">
            <h3>Notre Entreprise</h3>
            <p><strong> L'expert automobile peut également être sollicité lors de l'achat ou la vente d'un véhicule d'occasion afin de déterminer avec précision la valeur de celui-ci. </strong></p>
          </header>

          <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src=" " alt="" class="img-fluid">
                  <div class="icon"><i class="ion-ios-paper"></i></div>
                </div>
                <h2 class="title"><a href="#">Domaines d’activités</a></h2>
                <p>
                    Notre cabinet est composé de spécialistes et de plusieurs domaines d'activités: <br>
                    <strong>-</strong> Expertise collision. <br>
                    <strong>-</strong> EAD (Expertise à Distance). <br>
                    <strong>-</strong> Protection Juridique. <br>
                    <strong>-</strong> Responsabilité Civile Professionnelle. <br>
                    <strong>-</strong> Expertise Conseil . <br>
                    <strong>-</strong> Valeur de collection véhicule et moto, assistance en cas d’achat ou de vente de véhicule. <br>

                </p>
              </div>
            </div>



            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                      <div class="img">
                        <img src="" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-list-outline"></i></div>
                      </div>
                      <h2 class="title"><a href="#">Historique</a></h2>
                      <p>
                             <strong>1992:</strong>  Création par Monsieur Mohamed Khamlichi. <br>
                             Un Expert indépendant diplômé d’Etat qui a acquis une expérience significative dans le milieu automobile depuis plus de 28 ans.
                      </p>
                    </div>
                  </div>






            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="about-col">
                <div class="img">
                  <img src=" " alt="" class="img-fluid">
                  <div class="icon"><i class="ion-ios-people"></i></div>
                </div>
                <h2 class="title"><a href="#">Equipe</a></h2>
               <p>
                  La performance et la confiance au service de l'expertise automobile <br>

               Un personnel compétent à votre service.


               <br>
                Une petite équipe qui permet une proximité entre l’Expert et son mandant.<br>

                Un matériel de haute technicité.




                </p>
              </div>
            </div>



          </div>

        </div>
      </section><!-- #about -->


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
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('machine')}}"> CABEK 360° </a></li>
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
               <!---<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--->
              <!--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
              <!--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
               <!---<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>----->
               <!---<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>----->
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



@endsection
