<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <style>

        body{
            margin-top:0px;
            background:cornflowerblue;
        }
        /* EMAIL */
        .email {
            padding: 20px 10px 15px 10px;
            font-size: 1em;
        }

        .email .btn.search {
            font-size: 0.9em;
        }

        .email h2 {
            margin-top: 0;
            padding-bottom: 8px;
        }

        .email .nav.nav-pills > li > a {
            border-top: 3px solid transparent;
        }

        .email .nav.nav-pills > li > a > .fa {
            margin-right: 5px;
        }

        .email .nav.nav-pills > li.active > a,
        .email .nav.nav-pills > li.active > a:hover {
            background-color: #f6f6f6;
            border-top-color: #3c8dbc;
        }

        .email .nav.nav-pills > li.active > a {
            font-weight: 600;
        }

        .email .nav.nav-pills > li > a:hover {
            background-color: #f6f6f6;
        }

        .email .nav.nav-pills.nav-stacked > li > a {
            color: #666;
            border-top: 0;
            border-left: 3px solid transparent;o
            border-radius: 0px;
        }

        .email .nav.nav-pills.nav-stacked > li.active > a,
        .email .nav.nav-pills.nav-stacked > li.active > a:hover {
            background-color: #f6f6f6;
            border-left-color: #3c8dbc;
            color: #444;
        }

        .email .nav.nav-pills.nav-stacked > li.header {
            color: #777;
            text-transform: uppercase;
            position: relative;
            padding: 0px 0 10px 0;
        }

        .email table {
            font-weight: 600;
        }

        .email table a {
            color: #666;
        }

        .email table tr.read > td {
            background-color: #f6f6f6;
        }

        .email table tr.read > td {
            font-weight: 400;
        }

        .email table tr td > i.fa {
            font-size: 1.2em;
            line-height: 1.5em;
            text-align: center;
        }

        .email table tr td > i.fa-star {
            color: #f39c12;
        }

        .email table tr td > i.fa-bookmark {
            color: #e74c3c;
        }

        .email table tr > td.action {
            padding-left: 0px;
            padding-right: 2px;
        }

        .grid {
            position: relative;
            width: 100%;
            background: #fff;
            color: #666666;
            border-radius: 2px;
            margin-bottom: 25px;
            box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
        }



        .grid .grid-header:after {
            clear: both;
        }

        .grid .grid-header span,
        .grid .grid-header > .fa {
            display: inline-block;
            margin: 0;
            font-weight: 300;
            font-size: 1.5em;
            float: left;
        }

        .grid .grid-header span {
            padding: 0 5px;
        }

        .grid .grid-header > .fa {
            padding: 5px 10px 0 0;
        }

        .grid .grid-header > .grid-tools {
            padding: 4px 10px;
        }

        .grid .grid-header > .grid-tools a {
            color: #999999;
            padding-left: 10px;
            cursor: pointer;
        }

        .grid .grid-header > .grid-tools a:hover {
            color: #666666;
        }

        .grid .grid-body {
            padding: 15px 20px 15px 20px;
            font-size: 0.9em;
            line-height: 1.9em;
        }

        .grid .full {
            padding: 0 !important;
        }

        .grid .transparent {
            box-shadow: none !important;
            margin: 0px !important;
            border-radius: 0px !important;
        }

        .grid.top.black > .grid-header {
            border-top-color: #000000 !important;
        }

        .grid.bottom.black > .grid-body {
            border-bottom-color: #000000 !important;
        }

        .grid.top.blue > .grid-header {
            border-top-color: #007be9 !important;
        }

        .grid.bottom.blue > .grid-body {
            border-bottom-color: #007be9 !important;
        }

        .grid.top.green > .grid-header {
            border-top-color: #00c273 !important;
        }

        .grid.bottom.green > .grid-body {
            border-bottom-color: #00c273 !important;
        }

        .grid.top.purple > .grid-header {
            border-top-color: #a700d3 !important;
        }

        .grid.bottom.purple > .grid-body {
            border-bottom-color: #a700d3 !important;
        }

        .grid.top.red > .grid-header {
            border-top-color: #dc1200 !important;
        }

        .grid.bottom.red > .grid-body {
            border-bottom-color: #dc1200 !important;
        }

        .grid.top.orange > .grid-header {
            border-top-color: #f46100 !important;
        }

        .grid.bottom.orange > .grid-body {
            border-bottom-color: #f46100 !important;
        }

        .grid.no-border > .grid-header {
            border-bottom: 0px !important;
        }

        .grid.top > .grid-header {
            border-top-width: 4px !important;
            border-top-style: solid !important;
        }

        .grid.bottom > .grid-body {
            border-bottom-width: 4px !important;
            border-bottom-style: solid !important;
        }


        .vertical-menu {
            width: 200px;
        }

        .vertical-menu a {
            background-color: #eee;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #ccc;
        }

        .vertical-menu a.active {
            background-color: #4CAF50;
            color: white;
        }

        #myInput {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }



        /*rendez_vous*/
        .homepage-hero-module{
            position:relative;
        }
        .bg-overlay{
            background: -webkit-gradient(linear,left top,left bottom,from(#1c7ce0c4),to(#150051));
            background: linear-gradient(to bottom,#1c7ce0c4,#150051);
            width:100%;
            display:block;
            top:0;
            bottom:0;
            left:0;
            right:0;
            height: 100vm;
        }

        .form-control-lg1 {
            height: calc(1.875rem + 2px);
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 5.3rem;
        }

    </style>
    @yield('css_chat')

</head>
<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>

