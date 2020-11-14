<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Company window" name="CDMA Solutions">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets\images\favicon.ico') }}">
    <!-- Plugins css-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- App css -->
    <link href="{{ asset('assets\bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets\icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets\app.min.css') }}" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<style>
    @media screen and (max-height: 700px){
        .img-wave-2,.img-wave-1{
            display: none;
        }

        .radius{
            position: relative !important;
            top: 30px !important;
            border-radius: 1rem;
            z-index: 2;
        }
        .footer{
            color: wheat;
            margin-bottom: 10px;

        }
    }
    html,body{
        margin: 0 auto;
        padding: 0;
    }
    body{
        height: 100%;
        /*background-image: linear-gradient(to right top, #4054d8, #4765dd, #5175e1, #5e85e4, #6e94e6, #68a3ee, #66b1f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);*/
        /*background-image: url("/assets/images/bg-stock2.jpg");*/
        background-color: #2c91fb;
        background-size:cover ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .radius{
        position: absolute;
        top: 100px;
        border-radius: 1rem;
        z-index: 2;
    }



</style>
<body>

<div class="account-pages">


    <section class="pt-5 pb-5 pb-0 homepage-hero-module" style=" padding-top: 5rem!important; background-size: cover;height: 1000px; background-image: url(&quot;https://images.unsplash.com/photo-1542351967-d5ae722fed71?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1782&amp;q=800&quot;);" >

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-6 col-12">
                <div class="card radius">
                    <div class="card-body  p-4">
                        <div class="text-center w-75 m-auto">
                            <a href="/">
                                <span> <img src="\assets\images\logo_cdma_sm.png" class="img-fluid" alt="" height="60"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                        </div>

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <div class="img-wave-1"></div>

        <div class="img-wave-2"></div>
    </div>

    </section>
</div>




</body>
</html>
