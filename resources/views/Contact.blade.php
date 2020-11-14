@extends('layouts.appk')
@section('content')

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contact</h3>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Adresse</h3>
                        <address>49, rue karatchi
                            2ème étage N°7
                            Casablanca
                        </address>
                        <br>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone </h3>
                        <!--<p><a href="tel:+155895548855">+1 5589 55488 55</a></p>-->
                        <p><a> +212 522-449780 <br>
                                +212 522-450830 <br>
                                +212 522-448953 <br>
                                +212 522-302869 <br>
                                +212 661-980695 <br>
                                +212 661-982432 <br>
                            </a></p> <br>
                        <h3>Fax </h3>
                        <!--<p><a href="tel:+155895548855">+1 5589 55488 55</a></p>-->
                        <p><a>+212 522-541695</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com"> reclamation@cabek.ma</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="sendmessage">Votre message a été envoyé. Merci!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4"
                                   data-msg="Veuillez saisir au moins 4 caractères"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email"
                                   data-msg="Veuillez saisir un e-mail valide"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4"
                               data-msg="Veuillez saisir au moins 8 caractères du sujet"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Veuillez écrire quelque chose pour nous"
                                  placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <div class="contact-email">

                </div>
            </div>


        </div>
        <div class="  ">
            <div class="contact-email ">
                <iframe class='w-75 mx-auto d-block'
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4193252828504!2d-7.611932385313485!3d33.59442294916525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2eb01a51c1f8dc04!2sCabinet%20d&#39;expertise%20automobile%20CABEK!5e0!3m2!1sfr!2sma!4v1576157246129!5m2!1sfr!2sma"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>
        </div>
    </section><!-- #contact -->

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
                            <!---<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>------>
                            <!--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
                            <!--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
                            <!---<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>-------->
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
