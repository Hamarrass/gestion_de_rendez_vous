<style>
    .testimonial{
    border-left: 3px solid #6ab33e;
    padding: 100px 0 100px 275px;
    position: relative
}
.demo
{
	padding: 100px 0;
}
.heading-title
{
	margin-bottom: 100px;
}
.testimonial:before,
.testimonial:after{
    content: "";
    width: 320px;
    height: 55px;
    border-right: 3px solid #6ab33e;
    position: absolute;
    left: 0;
}

.testimonial:before{
    border-top: 3px solid #6ab33e;
    top: 0;
}

.testimonial:after {
    border-bottom: 3px solid #6ab33e;
    bottom: 0;
}

.testimonial .pic{
    width: 100px;
    height: 100px;
    position: absolute;
    top: 100px;
    left: 100px;
}

.testimonial .pic img{
    width: 100%;
    height: auto;
}

.testimonial .description{
    font-size: 14px;
    color: #7a7e82;
    line-height: 27px;
    position: relative;
}

.testimonial .description:before{
    content: "\f10d";
    font-family: fontawesome;
    position: absolute;
    top: -70px;
    left: 0;
    font-size: 20px;
    color: #7a7e82;
}

.testimonial .testimonial-title{
    font-size: 22px;
    font-weight:800;
    color: #22272c;
    text-transform: capitalize;
}

.testimonial .post{
    display: block;
    font-size: 15px;
    font-weight: 700;
    color :#6ab33e;
    margin-top: 10px;
}

.owl-theme .owl-controls{
    text-align: right;
    margin-top: 30px;
}

.owl-theme .owl-controls .owl-buttons div{
    background: #6ab33e;
    border-radius: 0;
    opacity: 1;
    padding: 5px 10px;
}

.owl-prev:before,
.owl-next:before{
    content: "\f053";
    font-family: 'FontAwesome';
    color: #fff;
}

.owl-next:before{
    content: "\f054";
}

@media only screen and (max-width: 990px){
    .testimonial{
        padding: 80px 0 80px 265px;
    }
}

@media only screen and (max-width: 767px){
    .testimonial{
        padding: 0;
        border: none;
    }
    .testimonial:before,
    .testimonial:after{
        border: none;
    }
    .testimonial .pic{
        position: relative;
        top: 0;
        left: 0;
    }
    .testimonial .description{
        margin-top: 15px;
    }
    .testimonial .description:before{
        content: "";
    }
}@charset "utf-8";
/* CSS Document */




    </style>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        slideSpeed:1000,
        singleItem:true,
        transitionStyle:"goDown",
        navigationText:["",""],
        autoPlay:false
    });
});
	</script>
<title>Testimonial Style</title>
</head>

<body>


    <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="{{route('accueil')}}" class="scrollto">CABEK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('accueil')}}"> Accueil</a></li>
        <li><a href="{{route('entreprise')}}">Entreprise</a></li>
          <li><a href="{{route('service')}}">Service client</a></li>
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
 <div class="demo" >
    <div class="pic">
        <img src="images/person-2.jpg" alt=""/>
    </div>
        <div class="container">
            <div class="row text-center">
                <h1 class="white"> Testimonial Style </h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/person-2.jpg" alt=""/>
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!
                                </p>
                                <h3 class="testimonial-title">Williamson
                                    <small class="post">Web Developer</small>
                                </h3>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/Sam-Revilter.jpg" alt=""/>
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!
                                </p>
                                <h3 class="testimonial-title">kristiana
                                    <small class="post">Web Designer</small>
                                </h3>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/team4-large.jpg" alt=""/>
                            </div>
                            <div class="testimonial-content">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet animi blanditiis consequatur debitis dicta distinctio, enim error eum iste libero modi nam natus perferendis possimus quasi sint sit tempora voluptatem. Est, exercitationem id ipsa ipsum laboriosam perferendis temporibus!
                                </p>
                                <h3 class="testimonial-title">Steve Thomas
                                    <small class="post">Web Developer</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>


 

 
 

