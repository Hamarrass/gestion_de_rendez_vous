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
              <div class="carousel-background"><img src="{{asset('img/intro-carousel/b.jpg')}}" alt=""></div>
            </div>
          </div>


        </div>
      </div>
    </section><!-- #intro -->

<br>
<br>




<!--==========================
Team Section
============================-->
<section id="team">
<div class="container">
  <div class="section-header wow fadeInUp">
    <h3>Team</h3>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
  </div>

  <div class="row">

    <div class="col-lg-3 col-md-6 wow fadeInUp">
      <div class="member">
        <img src="img/team-1.jpg" class="img-fluid" alt="">
        <div class="member-info">
          <div class="member-info-content">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
      <div class="member">
        <img src="img/team-2.jpg" class="img-fluid" alt="">
        <div class="member-info">
          <div class="member-info-content">
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
      <div class="member">
        <img src="img/team-3.jpg" class="img-fluid" alt="">
        <div class="member-info">
          <div class="member-info-content">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
      <div class="member">
        <img src="img/team-4.jpg" class="img-fluid" alt="">
        <div class="member-info">
          <div class="member-info-content">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
</section> #team

<!--==========================
Facts Section
============================
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

            <div class="col-lg-3 col-6 text-center">

            <p>Clients</p>
                  </div>

          <div class="col-lg-3 col-6 text-center">

            <p>Projects</p>
                  </div>

          <div class="col-lg-3 col-6 text-center">

            <p>Hours Of Support</p>
                  </div>

          <div class="col-lg-3 col-6 text-center">

            <p>Hard Workers</p>
                  </div>

              </div>

        <div class="facts-img">
          <img src="{{asset('img/facts-img.png')}}" alt="" class="img-fluid">
        </div>

      </div>
    </section>-->





<!--==========================
    Clients Section
  ============================-->
  <section id="testimonials" class="section-bg wow fadeInUp">
          <div class="container">

            <header class="section-header">
              <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">
                <img src="{{asset('/img/b.jpg')}}" class="testimonial-img" alt="">
                <h3>Le role de l'expert en automobile </h3>
                <h4>Ceo &amp; Founder</h4>
                <p>

                  La loi confie à l’expert en automobile le soin de déterminer si le véhicule a fait l’objet des réparations touchant à la sécurité à prévues par le premier rapport d’expertise et qu’il est en état de circuler dans des conditions normales de sécurité. En outre, pour lever l’opposition à tout transfert de la carte grise, le rapport établi par l’expert en automobile mentionne à que le véhicule n’a pas subi de transformation notable au sens du dernier alinéa de l’article R 321-1 du code de la route, ni de transformation susceptible de modifier les caractéristiques indiquées sur la carte grise .
                  <br>
                Pour remplir sa mission, l’expert en automobiles s’entoure de tous les moyens techniques mis à sa disposition (instruments de mesure) et fait toutes les investigations utiles (communication des factures d’achat de pièces, bons de magasin, fiches d’atelier, résultats de contrôles).
                <br>
                Comme dans la procédure à VGA, l’expert en automobile suit les travaux de réparation et contrôle leur bonne exécution.
                  <img src="{{asset('/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                </p>
              </div>

              <div class="testimonial-item">
                <img src="{{asset('/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <img src="{{asset('/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <img src="{{asset('/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
              </div>

            </div>

          </div>
        </section> <!--#testimonials-->









     <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container">

          <header class="section-header wow fadeInUp">
            <h1 style="text-align: center" style="color: darkolivegreen">Nous Compétences</h1> <br> <br>
          </header>

          <div class="row">

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon">
            </div>
              <h4 class="title"><a href="" style="color: darkolivegreen">LE ROLE DE L’EXPERT EN AUTOMOBILE :</a></h4> <br>
              <p class="description">
                  La loi confie à l’expert en automobile le soin de déterminer si le véhicule a fait l’objet des réparations touchant à la sécurité à prévues par le premier rapport d’expertise et qu’il est en état de circuler dans des conditions normales de sécurité. En outre, pour lever l’opposition à tout transfert de la carte grise, le rapport établi par l’expert en automobile mentionne à que le véhicule n’a pas subi de transformation notable au sens du dernier alinéa de l’article R 321-1 du code de la route, ni de transformation susceptible de modifier les caractéristiques indiquées sur la carte grise .
                  <br>
                  Pour remplir sa mission, l’expert en automobiles s’entoure de tous les moyens techniques mis à sa disposition (instruments de mesure) et fait toutes les investigations utiles (communication des factures d’achat de pièces, bons de magasin, fiches d’atelier, résultats de contrôles).
                  <br>
                  Comme dans la procédure à VGA, l’expert en automobile suit les travaux de réparation et contrôle leur bonne exécution.
              <br>
                </p>
            </div>
             <!--------------->
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"> </div>
              <h4 class="title"><a href="" style="color: darkolivegreen"> Nous compétences :</a></h4>
              <p class="description">
                  Nous vous conseillons et vous assistons dans le cadre d’un achat de voiture, d’une vente, vices cachés, pour tout problème technique liée une réparation, un sinistre avec ou sans tiers identifié, un désaccord avec l’expert de votre compagnie (contre expertise), une contestation de valeur, une évaluation de véhicule ancien faiblement kilomètre, de prestige ou de collection, dresser un certificat de conformité pour les véhicules provenant des Domaines, une procédure VEI ou VGA, et prochainement à partir du 01/01/2009 une procédure VGE (véhicule gravement endommagé). <br>
                  Nous sommes également compétents dans le cadre d’une protection juridique en cas de litige, de panne, rupture mécanique, litige avec un particulier ou un professionnel. <br>
                  Dans tous les cas, l’Expert en automobile est là pour : <br>
                  Vous aider et vous conseiller techniquement.

              </p>
            </div>

            <!--------------->
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"> </div>
              <h4 class="title"><a href="" style="color: darkolivegreen">Exemple : </a></h4>
              <p class="description">
                <strong>» </strong> Vous disposez d’un véhicule qui présente un défaut diminuant l’usage auquel il est destin. <br>
                <strong>» </strong> Vous venez d’acquérir un véhicule d’occasion qui présente des anomalies qui ne vous avaient pas été révélés par le vendeur. <br>
                <strong>» </strong>Vous avez confiez votre véhicule à un professionnel qui n’a pas réalisé les travaux correctement. <br>
                <strong>» </strong>Vérifier les éléments d’une réparation et d’une facturation. <br>

                  Vous êtes impliqué dans un accident de la circulation ayant causé de gros dommages à votre automobile : <br>
                  il y a mise en place d’une procédure à véhicule gravement accident (VGA) ou à véhicule à économiquement irréparable à (VEI). <br>
                  L’expert en automobile va alors se prononcer sur la remise en circulation du véhicule après retrait (VGA) ou gel (VEI) de la carte grise en préfecture. Au cours de la procédure, il s’assure que les opérations de remise en état se font correctement et certifie, en fin de travaux, que le véhicule est en bon état de marche et de fonctionnement, en conformité avec les normes de sécurité. <br>
                  </p>
            </div> <br><br><br><br>

                <!--------------->
      <div style="text-align: center" class=" w-50 mx-auto col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s"  >
          <div class="icon"> </div>
          <h4 class="title"><a href="" style="color: darkolivegreen"> Remarque :</a></h4> <br>
          <p class="description">
         Dans certains cas l’expert vous demandera donc de procéder, à vos frais, à des travaux d’entretien liés à la sécurité, même s’ils sont sans rapport avec l’accident (freins, suspension, trains roulants).</p>
        </div>

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
              <strong>Phone:</strong>+212 522-449780 <br>
              +212 522-450830 <br>
              +212 661-982432 <br>
              +212 661-6980695 <br>
              +212 663-432 212<br>
              <strong>Fix:</strong> +212 522-541695<br>
              <strong>Email:</strong>reclamation@cabek.ma<br>
            </p>

            <div class="social-links">
              <!---<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--->
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
               <!---<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>--->
               <!---<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--->
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
