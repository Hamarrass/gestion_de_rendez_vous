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
                <div class="carousel-background"><img src="{{asset('img/recherche.jpeg')}}" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content w-100 h-100 " style="margin-top:40vh">

                  <form class="bg-white p-5 d-block rounded mx-auto w-50" method="POST" action="{{ route('dossier') }}"  >
                    @csrf
                    <strong style="color: black">Consulter votre dossier</strong>  <br>
                    <span>Connectez vous à votre espace privé grace au code que vous avez reçu  par SMS </span> <br>
                     <span>  Si vous n'avez pas le code de votre dossier <a href="{{route('contact')}}">Contactez nous</a></span> <br><br>
                    <div class="form-row">

                        <div class="col">
                         <!---<input type="text" name="code_dossier" class="form-control"  placeholder="Code Dossier">---->
                         <input class="form-control" type="text" placeholder="Code Dossier"  name="code_dossier">
                         <br>
                         <br>
                          <button type="submit" class="btn btn-success">Recherche</button>
                        </div>
                      </div>
                    </form>
                </div>
                  </div></div></div>  </div>
        </div>
        </div>
      </section><!-- #intro -->

@endsection
