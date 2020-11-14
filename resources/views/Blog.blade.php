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
                        <div class="carousel-background"><img src="{{asset('img/choc.jpg')}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">

                                <strong style="font-size: 500%" class=""> GUIDE DE SÉCURITÉ AUTO </strong><br>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
    </section> <!--#intro -->
    <br><br>

    <h1 style="text-align: center; color: #18D26E">GUIDE DE SÉCURITÉ AUTO</h1>
    <div class="how-section1">
        <div class="row">
            <div class="col-md-6 how-img">

                <img src="{{asset('img/sinistre.jpg')}}" class="rounded-circle img-fluid" alt=""/>
            </div>

            <div class="col-md-6">

                <h3>En cas de sinistre</h3>
                <h3 class="subheading"> S’il y a un blessé </h3>

                <p class="text-muted">
                    S’il y a un blessé, même léger, ne pas établir de constat amiable et alerter la Police ou la Gendarmerie.

                </p>

                <h3 class="subheading"> En cas de vol ou de tentative de vol </h3>
                <p class="text-muted">
                    L’assuré doit : <br>
                    • Aviser immédiatement les autorités de gendarmerie ou de police.<br>
                    • Porter plainte au parquet.<br>
                    • Faire opposition auprès de l’organisme qui a délivré le récépissé de mise en circulation, si le véhicule a disparu.<br>
                    • Contacter nos partenaires d’assistances au: <br>
                        <strong>IMA Assistance (MATU), 0522 582900</strong> <br>
                        <strong>Mondial Assistance (SAHAM), 0522 959300</strong> <br>
                        <strong>MAMDA MCMA, 0537 544400</strong> <br>
                    De nombreux services vous sont proposés, notamment : un service d’aide l’établissement du constat amiable ainsi que le remorquage de votre véhicule suite à un
                    accident.<br>

                </p>

                <h3 class="subheading">S’il n’y a que des dégâts matériels </h3>
                <p class="text-muted">

                    Présentez spontanément votre attestation d’assurance, votre permis et votre carte grise et remplissez soigneusement, avec l’autre conducteur, un seul et même
                    constat amiable.
                    Constat à l’amiable
                </p>


            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4 class="subheading">Quand utiliser le constat à l’amiable</h4>
                <p class="text-muted">

                    Quand utiliser le constat à l’amiable
                    En cas de sinistre automobile, il vous faut obligatoirement joindre à votre déclaration d’accident le constat à l’amiable correctement complété. Le constat à
                    l’amiable est un document très important car il permet de déterminer la responsabilité de chaque partie.<br>
                    Il faut donc être très attentif lors de sa rédaction.
                </p>
                <p class="text-muted">
                    • Rédigez le constat sur le lieu de l’accident. Utilisez un seul et même imprimé de constat amiable pour 2 véhicules en cause (2 pour 3 véhicules, etc.) peu
                    importe qui le fournit ou le remplit des deux conducteurs.<br>
                    Utilisez de préférence un stylo à bille pour que le 2ème exemplaire soit lisible.<br>
                    • Recueillez en priorité : le nom de l’autre conducteur et le numéro d’immatriculation de son véhicule.<br>
                    • N’oubliez pas, en rédigeant le constat amiable :<br>
                    o De reporter les renseignements administratifs figurant sur votre attestation d’assurance et votre permis de conduire.<br>
                    o D’indiquer avec précision le point de choc initial.<br>
                    o De mettre une croix (x) dans les cases blanches en face de chacune des rubriques de circonstances s’appliquant à l’accident. Soyez très vigilant sur le choix
                    des cases à cocher, ces informations déterminent les responsabilités.
                    <br>Ne cochez que la ou les cases qui vous concernent sans vous laisser influencer.<br>
                    o D’indiquer le nombre de cases cochées pour éviter toute contestation. Si l’accident a eu des témoins, écrivez leur nom, adresse et numéro de téléphone,
                    surtout en cas de difficultés avec l’autre conducteur.

                </p>
                <strong style="color: red">ATTENTION :
                    les témoins ne peuvent être ni votre conjoint, ni un membre de votre famille, ni transportés dans votre véhicule au moment de l’accident.</strong><br>
                <p>• Une fois signé, le constat amiable n’est plus modifiable.
                    • Tracez un croquis reflétant l’accident.
                    • Évitez les contradictions entre le croquis et les cases cochées.
                    • En cas de carambolage, remplissez un constat avec le conducteur qui vous précédait et un autre avec celui qui vous suivait. Si votre voiture a été « projetée
                    » sur le véhicule précédent, indiquez le dans la case « observations » et précisez sur chacun des constats établis le véhicule qui vous a projeté.
                    • Signez et faites signer le constat par l’autre conducteur. Remettez-lui l’un des exemplaires, conservez l’autre.
                </p>
            </div>
            <div class="col-md-6 how-img">
                <img src="{{asset('img/amiable.jpg')}}" class="rounded-circle img-fluid" alt=""/>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 how-img">
                <img src="{{asset('img/constat.jpeg')}}" class="rounded-circle img-fluid" alt=""/>
            </div>
            <div class="col-md-6">

                <h4 class="subheading"> Les points de votre constat</h4>
                <p class="text-muted">
                    Une fois rentré chez vous, remplissez seul le verso du constat amiable. Ce document sert de déclaration d’accident.<br>
                    • Envoyez à votre assureur conseil un exemplaire du constat dans les 5 jours qui suivent l’accident.<br>
                    Il pourra ainsi vérifier si les garanties s’appliquent, déterminer les responsabilités et prendre les premières mesures pour le règlement du dossier.<br>
                    • Si votre véhicule a été conduit dans un garage, indiquez précisément l’adresse pour accélérer l’expertise et attendez les résultats de celle-ci avant de
                    procéder aux réparations.<br>
                    • Rassemblez tous les renseignements nécessaires au sujet l’accident : circonstances, dégâts apparents, assurances des véhicules (n° des contrats et noms des
                    sociétés d’assurance), témoins …<br>
                </p>

                <h4 class="subheading">Ce que vous ne devez pas faire</h4>
                <p class="text-muted">
                    • Signer un constat « en blanc » ou laisser l’autre conducteur le soin de remplir votre partie.<br>
                    • Rectifier le constat après signatures et après séparations des 2 exemplaires.<br>
                    Ces rectifications n’auront aucune valeur et pourront même être considérées comme une tentative de fraude de votre part.<br>
                    • En cas de désaccord, n’essayez pas de convaincre l’autre automobiliste. Ayez plutôt le réflexe de chercher des témoins de l’accident.<br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <h4 class="subheading"> La déclaration de sinistre</h4>
                <p class="text-muted">
                    La déclaration de sinistre peut revêtir plusieurs formes<br>
                    • Le constat amiable.<br>
                    • Le constat de police.<br>
                    • Le procès-verbal.<br>
                    • La déclaration remplie par l’assuré.<br>
                    • Le récépissé de police.<br>
                </p>
                <h4 class="subheading"> Le délai de déclaration</h4>
                <p class="text-muted">
                    Sous peine de déchéance, et sauf cas fortuit ou de forces majeure, l’assuré doit déclarer à l’assureur tout sinistre de nature à entrainer la garantie, dès
                    qu’il en a eu connaissance, et au plus tard : dans les deux jours ouvrés, pour le vol et les tentatives de vol. Dans les cinq jours ouvrés, pour les autres
                    dommages.
                    <br><br>
                    <strong style="color: red">
                        ATTENTION : l’assuré ne doit pas procéder ou faire procéder à des réparations avant que le véhicule endommagé ne soit visité par l’expert de l’assureur.
                    </strong><br>
                </p>

                <h4 class="subheading"> Le contenu de déclaration. </h4>
                <p class="text-muted">

                    La déclaration de sinistre doit comporter :
                    • Le numéro de police et de l’attestation d’assurance.<br>
                    • La période de validité du contrat du tiers et de l’assuré.<br>
                    • La date, la cause, la nature, les circonstances et les conséquences du sinistre.<br>
                    • Le nom, l’adresse, la date de naissance du conducteur au moment du sinistre ainsi que la date et le lieu de délivrance de son permis de conduire.<br>
                </p>

            </div>
            <div class="col-md-6 how-img">
                <img src="{{asset('img/declarationsinistre.jpg')}}" class="rounded-circle img-fluid" alt=""/>
            </div>
        </div>
    </div>
    <style>

        .how-section1 {
            margin-top: -15%;
            padding: 10%;
        }

        .how-section1 h4 {
            color: #18D26E;
            font-weight: bold;
            font-size: 30px;
        }

        .how-section1 .subheading {
            color: black;
            font-size: 20px;
        }

        .how-section1 .row {
            margin-top: 10%;
        }

        .how-img {
            text-align: center;
        }

        .how-img img {
            width: 40%;
        }


    </style>



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
                            <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>-->
                            <!--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
                            <!--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
                            <!--<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>-->
                            <!--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
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
