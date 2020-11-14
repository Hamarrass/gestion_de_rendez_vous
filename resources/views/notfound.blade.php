@extends('layouts.appk')
@section('css')
    <link href="{{ asset('css/notfound.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x1_5"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class='c'>
        <div class='_404'>CODE</div>
        <hr>
        <div class='_1'>DOSSIER</div>
        <div class='_2'>N'EXISTE PAS</div>
        <a class='btn' href='{{ route('home') }}'>ACCUEIL</a>
    </div>
@endsection
