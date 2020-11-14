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
                <div class="carousel-background"><img src="{{ asset('img/entreprise/chiffragee.JPG') }}" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">

                   <strong style="font-size: 500%"> Estimation de dommage</strong><br>

                  </div>
                </div>
              </div>



          </div>
        </div>
      </section><!-- #intro -->

   <!--==========================
      Services Section
    ============================-->
    <section id="services">
            <div class="container">


              <div class="row">

                    <header class="section-header wow fadeInUp">

                            <p>
                           <strong style="color: darkolivegreen" style="text-align: center" >
                                Pourquoi une expertise ? </strong> <br><br>

                                Un rapport d’expertise est indispensable afin que votre compagnie d’assurance puisse exercer convenablement un recours auprès de la partie adverse responsable de votre sinistre, mais aussi de connaitre le montant de votre préjudice afin de procéder à l’indemnité qui vous est due. (Sous réserve des closes de votre contrat).
                                <br><br>
                                <strong style="color: darkolivegreen" style="text-align: center" >
                                Pour ce faire : </strong>
                                <br><br>

                                Après mandat d’expertise, nous identifions, vérifions l’imputabilité des dommages et chiffrons le préjudice pour tous véhicules terrestres (vélo, cyclomoteur, moto, voiture, poids lourds, car, tracteur
                                ,matériel agricole, bateau et matériel de plaisance.)

                                <br><br>

                                <strong style="color: darkolivegreen" style="text-align: center" >
                                Pourquoi une expertise ? </strong>
                                <br><br>

                                Le délai d’intervention de nos expertises est de 24 heures APRES RENDEZ-VOUS. Dans le cas contraire une demande par courrier est adressée le jour même au sinistré pour convenir d’une date.

                                <br><br>
                                <strong style="color: darkolivegreen" style="text-align: center" >
                                Autres possibilités :</strong>

                                <br><br>
                                L’expertise peut se faire à nos bureaux, chez le réparateur, par photo expertise (si les conditions le permettent) ou, cas exceptionnel, au domicile.

                                <br><br>
                                <strong style="color: darkolivegreen" style="text-align: center" >
                                Conseil pour votre déclaration d’accident : </strong>
                                <br><br>

                                Pour remplir votre déclaration, utilisez de préférence le verso de votre constat amiable. <br>

                                Vous avez cinq jours pour adresser le constat amiable à votre sociétéd’assurance (24 heures en cas de vol). <br>

                                Conservez une photocopie de votre envoi àl’assureur (constat et déclaration). <br>

                                     </p>
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
               <!---<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>------->
              <!--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
              <!--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
               <!---<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>------>
               <!---<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--------->
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


