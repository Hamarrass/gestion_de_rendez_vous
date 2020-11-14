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
                        <div class="carousel-background"><img src="{{asset('img/intro-carousel/entreprise.jpeg')}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">

                                <h2>Entreprise</h2>
                                <!-- <p>L'expert automobile peut également être sollicité lors de l'achat ou la vente d'un véhicule d'occasion afin de déterminer avec précision.</p>-->
                                <P>Suivez votre dossier à partir de votre SmartPhone , Tablette ou bien PC.
                                    CABEK vous facilite le suivi de votre dossier grâce à sa plateforme digital</p>


                                <a href="{{route('entreprise')}}" class="btn-get-started scrollto">Plus d'info</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{asset('img/intro-carousel/service.jpeg')}}" alt=""></div>

                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Service Client</h2>
                                <p>Notre plateforme service client vous offre la possibilité de suivre la démarche de votre dossier avec un seul clic.</p>
                                <a href="{{route('service')}}" class="btn-get-started scrollto">Plus d'info</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{asset('img/entreprise/chiffrage3.jpg')}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Nos Compétences</h2>
                                <p> L'expertise de notre équipe acquise durant de nombreuses années seront à votre disposition. </p>
                                <a href="#about" class="btn-get-started scrollto">Plus d'info</a>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{asset('img/intro-carousel/r.jpeg')}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Notre Portfolio</h2>
                                <p> Notre cabinet est équipé des derniéres tendances digitales, pour vous offrir le meilleur service qui puise exister au marché.</p>
                                <p></p>
                                <a href="#portfolio" class="btn-get-started scrollto">Plus d'info</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{asset('img/intro-carousel/auto1&.jpg')}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>CABEK 360° </h2>
                                <p>La haute qualité de présentation de la voiture en technologie 360 permet mieux d'expertisé le véhicule a distance (EAD).</p>
                                <a href="{{route('machine')}}" class="btn-get-started scrollto"> Voir Plus 360°</a>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{asset('img/intro-carousel/contact.jpeg')}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Contactez-Nous</h2>

                                <a href="{{route('contact')}}" class="btn-get-started scrollto">Plus d'info</a>
                            </div>
                        </div>
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

    <!--===========================
        Featured Services Section
      ============================-->
    <section id="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 box">
                    <br>
                    <i class="ion-ios-bookmarks-outline"></i>
                    <h5 class="title"><a href="{{route('blog')}}">Pourquoi faire appel à un expert en automobile ?</a></h5>
                </div>
                <!------------------------->
                <div class="col-lg-4 box box-bg">
                    <br>
                    <i class="ion-ios-stopwatch-outline"></i>
                    <h5 class="title"><a href="{{route('blog')}}"> La mission de l'expert</a></h5>
                </div>
                <!------------------------->
                <div class="col-lg-4 box">
                    <br>
                    <i class="ion-ios-heart-outline"></i>
                    <h5 class="title"><a href="{{route('blog')}}">L'expert en automobile</a></h5>
                </div>
            </div>
        </div>
    </section>
    <!--#featured-services -->

    <!--<style>

    FontAwesome for working BootSnippet :> */

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    #team {
        background: ##F7F7F7 !important;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #108d6f;
        border-color: #108d6f;
        box-shadow: none;
        outline: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #007b5e;
        border-color: #007b5e;
    }

    section .section-title {
        text-align: center;
        color: ##F7F7F7;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: ##F7F7F7;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: #F7F7F7;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 312px;
    }

    .backside .card a {
        font-size: 18px;
        color: ##F7F7F7 !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #18D26E !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }
      </style>

    ---- Include the above in your HEAD tag
     Team

        <div class="container" >
          <header class="section-header">
            <h3 class="section-title" style="color: black">Notre Portfolio</h3>
          </header>
          <h5 class="section-title h1">OUR TEAM</h5>
            <div class="row" >
                 Team member
                <div class="col-xs-12 col-sm-6 col-md-4" >
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="img/img3.jpg" alt="card image"></p>
                                        <h4 class="card-title">  Des garages conventionnés </h4>


                                      <p class="card-text">
                                          Un réseau d’une centaine de garages à travers tout le pays pour réparer votre véhicule. </p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sunlimetech</h4>-
                                        <p class="card-text">Garage de votre choix
                                          Pour convenir d’un montant d’indemnisation, vous devez présenter un devis de réparation à l’expert. Après expertise, vous recevrez un accord pour procéder aux réparations. Une fois les réparations effectuées, vous présenterez une facture pour recevoir votre indemnisation.
                                          <br> une franchise pourrait vous être appliquée en cas de sinistre responsable.
                                                                 </p>
                                        <ul class="list-inline">
                                          <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             ./Team member
                 Team member
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <br><p><img class=" img-fluid" src="img/img2.jpg" alt="card image"></p>

                                        <h4 class="card-title">L’expert en assurance  </h4>

                                        <p class="card-text">Toutes les compagnies d’assurance envoient systématiquement un expert à la suite d’un sinistre.</p>
                                       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                      <br>
                                      <br>
                               <h4 class="card-title"> Quel est vraiment son rôle ?</h4>
                                        <p class="card-text">
                                          <br> peuvent également demander l’avis d’un expert avant qu’un contrat d’assurance ne soit signé dans le but de juger des risques potentiels.
                                        </p>
                                      <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ./Team member
                Team member
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                      <br>
                                        <p><img class=" img-fluid" src="img/img1.jpg" alt="card image"></p>
                                        <h4 class="card-title">Désigné par le tribunal</h4>


                                        <p class="card-text">,L’expert auto peut être désigné par un tribunal (pour une affaire pénale par exemple)...</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                     <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text"> Par un particulier (qui ne serait pas d’accord avec son assurance) ou bien sûr par l’assureur pour apporter une expertise sur un accident automobile.
                                          <br>C’est pour cette raison que l’expert auto se doit d’être indépendant et impartial, pour ne pas privilégier une des deux parties.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              .
              /Team member




            </div>
        </div>

     Team -->





    <!--==========================
         About Us Section
       ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Nos Compétences</h3>
                <p><strong> L'expert automobile peut également être sollicité lors de l'achat ou la vente d'un véhicule d'occasion afin de déterminer avec précision la valeur de
                        celui-ci. </strong></p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/a.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h2 class="title"><a href="#">Détermination de la valeur</a></h2>
                        <br><br>
                        <a href="{{route('determination')}}" type="button" class="btn btn-success">Voir Plus</a>
                    </div>
                </div>


                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/b.jpg')}}" alt="" class="img-fluid">

                        </div>
                        <h2 class="title"><a href="#">Analyse de rupture mécanique</a></h2>
                        <br><br>
                        <a href="{{route('analyse')}}" class="btn btn-success">Voir Plus</a>
                    </div>
                </div>


                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('img/entreprise/chiffrage4.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h2 class="title"><a href="#">Estimation de dommage</a></h2>
                        <br><br>
                        <a href="{{route('estimation')}}" class="btn btn-success">Voir Plus</a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #about -->




    <!--==========================
        Portfolio Section
      ============================-->
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title" style="color: black">Notre Portfolio</h3> <br>
                <p><strong> Notre cabinet est équipé des derniéres tendances digitales, pour vous offrir le meilleur service qui puise exister au marché.
                    </strong></p>
            </header>

            <!--<div class="row">
              <div class="col-lg-12">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>

                </ul>
              </div>
            </div>-->


            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portfolio/application1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portfolio/application1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview">
                                <i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details">
                                <i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Application Mobile </a></h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="img/portfolio/appweb1.jpeg" class="img-fluid" alt="">
                            <a href="img/portfolio/appweb1.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview">
                                <i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Application Web</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="img/entreprise/chiffrage1.jpg" class="img-fluid" alt="">
                            <a href="img/entreprise/chiffrage1.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview">
                                <i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>


                        <div class="portfolio-info">
                            <h4><a href="#">Logiciel de Chiffrage</a></h4>
                            <p>Logiciel</p>
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- #portfolio -->

    <!--==========================
         Clients Section
       ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3> Nos Partenaire </h3>
            </header>

            <div class="owl-carousel clients-carousel">
                <img src="img/clients/a.png" alt="">
                <img src="img/clients/b.png" alt="">
                <img src="img/clients/c.png" alt="">
                <img src="img/clients/d.png" alt="">
                <img src="img/clients/e.png" alt="">

            </div>

        </div>
    </section><!-- #clients -->


    <!------------------------------------------------------------------>

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
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{route('accueil')}}">     Accueil     </a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{route('entreprise')}}">  Entreprise  </a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{route('service')}}">     Services    </a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{route('compétences')}}"> Compétence  </a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{route('blog')}}">        Blog        </a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{route('machine')}}">     CABEK 360°  </a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{route('contact')}}">     Contact     </a></li>
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
{{--                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>--}}
                            <a href="https://www.linkedin.com/company/cabinet-d-expertise-automobile-cabek/" class="linkedin" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>L'expertise</h4>
                        <p> L'expert automobile maitrise non seulement la technique automobile, mais il connait aussi
                            la législation en matière d'assurances, de responsabilité, de code de la route . <br>
                            L'expert automobile intervient également sur d'autres véhicules comme les bateaux, les motos, les poids lourds et l'assistance dans l'achat d'un
                            véhicule d'occasion.
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
