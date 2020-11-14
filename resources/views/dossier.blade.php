@extends('layouts.app')
@section('css_chat')
    <style>

        /*//chat css*/

        /*css chat*/
        :root {
            --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --msger-bg: #fff;
            --border: 2px solid #ddd;
            --left-msg-bg: #ececec;
            --right-msg-bg: #579ffb;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }

        /*body {*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    height: 100vh;*/

        /*    font-family: Helvetica, sans-serif;*/
        /*}*/

        .msger {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            width: 100%;
            max-width: 867px;
            margin: 25px 10px;
            height: calc(100% - 50px);
            border: var(--border);
            border-radius: 5px;
            /*background: var(--msger-bg);*/
            box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
        }

        .msger-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: var(--border);
            background: #eee;
            color: #666;
        }

        .msger-chat {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
        }
        .msger-chat::-webkit-scrollbar {
            width: 6px;
        }
        .msger-chat::-webkit-scrollbar-track {
            background: #ddd;
        }
        .msger-chat::-webkit-scrollbar-thumb {
            background: #bdbdbd;
        }
        .msg {
            display: flex;
            align-items: flex-end;
            margin-bottom: 10px;
        }
        .msg:last-of-type {
            margin: 0;
        }
        .msg-img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            background: #ddd;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 50%;
        }
        .msg-bubble {
            max-width: 450px;
            padding: 15px;
            border-radius: 15px;
            background: var(--left-msg-bg);
        }
        .msg-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .msg-info-name {
            margin-right: 10px;
            font-weight: bold;
        }
        .msg-info-time {
            font-size: 0.85em;
        }

        .left-msg .msg-bubble {
            border-bottom-left-radius: 0;
        }

        .right-msg {
            flex-direction: row-reverse;
        }
        .right-msg .msg-bubble {
            background: var(--right-msg-bg);
            color: #fff;
            border-bottom-right-radius: 0;
        }
        .right-msg .msg-img {
            margin: 0 0 0 10px;
        }

        .msger-inputarea {
            display: flex;
            padding: 10px;
            border-top: var(--border);
            background: #eee;
        }
        .msger-inputarea * {
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 1em;
        }
        .msger-input {
            flex: 1;
            background: #ddd;
        }
        .msger-send-btn {
            margin-left: 10px;
            background: rgb(0, 196, 65);
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.23s;
        }
        .msger-send-btn:hover {
            background: rgb(0, 180, 50);
        }

        .msger-chat {
            background-color: #fcfcfe;

        }

    </style>

@endsection
@section('content')


    <div class="panel panel-success bg-white p-5 d-block rounded mx-auto"
         style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url({{ asset('/img/recherche.jpeg') }}) 0 0 no-repeat; opacity:0.90 ; height:100vh">

        <div class="row bg-white  rounded mx-auto w-100 h-100 mt-4" style="position:abosolute; z-index:2;">
            <div class="col-m-4 col-lg-4 col-sm-12 mt-3 text-center flex-column d-sm-flex font-weight-lighter">
            @if(session('exceedlimit'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> Vous avez dépassé les réclamations possibles </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <bR><bR>
                <h3 style="color: #006400;"><strong>Les informations de dossier<br></strong></h3>
{{--                <strong><h5 style="color: SeaGreen"> Matricule : </h5></strong>--}}
{{--                <h5> {{ $dossier->matricule }}</h5>--}}
{{--                <strong><h5 style="color: SeaGreen"> Reference dossier : </h5></strong>--}}
{{--                <h5>{{ $dossier->ref }}</h5>--}}
{{--                <strong><h5 style="color: SeaGreen"> Date Reception : </h5></strong>--}}
{{--                <h5>{{ $dossier->date_reception }}</h5>--}}
{{--                <strong><h5 style="color: SeaGreen"> Date Accident : </h5></strong>--}}
{{--                <h5>{{ date('d-m-Y', strtotime($dossier->date_sinistre )) }}</h5>--}}

                <table>
                    <tr>
                        <td width="20%"></td></td><td width="40%"><h5 style="color: SeaGreen" align="left">Matricule :          </h5></td><td width="40%" align="left"><h5>{{ $dossier->matricule }}</h5></td>
                    </tr>
                    <tr>
                        <td width="20%"></td></td><td width="40%"><h5 style="color: SeaGreen" align="left">Reference dossier :  </h5></td><td width="40%" align="left"><h5>{{ $dossier->ref }}</h5></td>
                    </tr>
                    <tr>
                        <td width="20%"></td></td><td width="40%"><h5 style="color: SeaGreen" align="left">Date Reception :     </h5></td><td width="40%" align="left"><h5>{{ $dossier->date_reception }}</h5></td>
                    </tr>
                    <tr>
                        <td width="20%"></td></td><td width="40%"><h5 style="color: SeaGreen" align="left">Date Accident :      </h5></td><td width="40%" align="left"><h5>{{ date('d-m-Y', strtotime($dossier->date_sinistre )) }}</h5></td>
                    </tr>
                </table>

                <div class="col-12">
                    <div class="card border-light shadow d-flex jutify-content-center mb-2"  style="background-color: Azure">
                        <div class="card-body">
                            <div class=" text-muted text-center ">
                                <strong class="font-weight-bold" style="color: black"> N'hesitez pas à nous contacter
                                    pour tout autre renseignement : </strong> <br>
                                <strong class="font-weight-bold"><a href="mailto:reclamation@cabek.ma">
                                        reclamation@cabek.ma</a></strong>
                            </div>
                    {{-- start Button Modal--}}
                            <div class="  text-muted  text-center">
                                <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">reclamer !!!!</a>
                            </div>
                    {{-- end Button Modal--}}
                        </div>
                    </div>


                    <div  class="card border-light shadow d-flex jutify-content-center mb-4"
                          style="background-color: Azure ;
                          height: 400px;
                          overflow: scroll;
                          color: black   ">

{{--                                 <table  >--}}


{{--                                     @foreach($reclamation_clients as $reclamation_client)--}}
{{--                                             <tr>--}}
{{--                                                 <td width="50%" align="left"> <span class="badge badge-pill badge-primary">{{ $reclamation_client->observation_client }}</span></td> <td width="50%"></td>--}}
{{--                                             </tr>--}}

{{--                                             <tr>--}}
{{--                                                 <td ></td><td align="right" style="color: blue"><span class="badge badge-pill badge-success"> {{$reclamation_client->reponse_gestionnaire}}</span></td>--}}
{{--                                             </tr>--}}
{{--                                         @endforeach--}}

{{--                                 </table>--}}



                        <section class="msger">
                            <header class="msger-header">
                                <div class="msger-header-title">
                                    <i class="fas fa-comment-alt"></i>Messagerier
                                </div>
                                <div class="msger-header-options">
                                    <span><i class="fas fa-cog"></i></span>
                                </div>
                            </header>

                            <main class="msger-chat">


                                @foreach($reclamation_clients as $reclamation_client)

                                    <div class="msg left-msg">
                                        <div class="msg-img"  style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"></div>
                                        <div class="msg-bubble">
                                            <div class="msg-info-time">
                                                    {{ $reclamation_client->created_at }}
                                            </div>


                                            <div class="msg-text">
                                                    {{$reclamation_client->observation_client }}
                                            </div>
                                        </div>
                                    </div>
                                    @if($reclamation_client->reponse_gestionnaire)
                                      <div class="msg right-msg">
                                        <div
                                                class="msg-img"
                                                style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
                                        ></div>

                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-time">
                                                  {{ $reclamation_client->updated_at }}
                                                </div>
                                            </div>

                                            <div class="msg-text">
                                                {{$reclamation_client->reponse_gestionnaire}}
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                               @endforeach

                            </main>

                        </section>

                    </div>
                </div>
            </div>

            <div class="col-m-4 col-lg-4 col-sm-12 w-75 h-75 mx-auto mt-3">
                <h3 style="color: DarkGreen;" class="text-center"><strong>Status</strong></h3>

                {{-- Dossier Recu START --}}
                @if($date = $dossier->date_reception)
                    <div class="row ">
                        <div class="col py-2">
                            <div class="card border-light shadow">
                                <div class="card-body border border-success">
                                    <div class="text-muted text-center">
                                        <strong>Mission Reçu</strong>
                                    </div>
                                    <h2 class="text-muted text-right" style='font-size:15px;'>
                                        <strong>Le {{ Carbon\Carbon::parse($date)->format('d/m/Y') }}</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Dossier Recu END --}}

                {{--- Dossier Expertise START ---}}
                @if($date = $dossier->date_expertise)
                    <div class="row ">
                        <div class="col py-2">
                            <div class="card border-light shadow">
                                <div class="card-body border border-success">
                                    <div class="text-muted text-center">
                                        <strong>Véhicule Expertisé</strong>
                                    </div>
                                    <h2 class="text-muted text-right" style='font-size:15px;'>
                                        <strong>Le {{ Carbon\Carbon::parse($date)->format('d/m/Y') }}</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{--- Dossier Expertise END ---}}

                {{-- Devis Recu START --}}
                @if($dossier->date_expertise && ($date = $dossier->date_devis))
                    <div class="row ">
                        <div class="col py-2">
                            <div class="card border-light shadow">
                                <div class="card-body border border-success">
                                    <div class="text-muted text-center">
                                        <strong>Devis Reçu</strong>
                                    </div>
                                    <h2 class="text-muted text-right" style='font-size:15px;'>
                                        <strong>Le {{ Carbon\Carbon::parse($date)->format('d/m/Y') }}</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Devis Recu END --}}

                {{-- Accord Donné START --}}
                @if($dossier->date_expertise && ($date = $dossier->date_accord))
                    <div class="row ">
                        <div class="col py-2">
                            <div class="card border-light shadow">
                                <div class="card-body border border-success">
                                    <div class="text-muted text-center">
                                        <strong>Accord Donné</strong>
                                    </div>
                                    <h2 class="text-muted text-right" style='font-size:15px;'>
                                        <strong>Le {{ Carbon\Carbon::parse($date)->format('d/m/Y') }}</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Accord Donné END --}}

                {{-- Facture Recu START --}}
                @if($dossier->date_expertise && ($date = $dossier->date_facture))
                    <div class="row ">
                        <div class="col py-2">
                            <div class="card border-light shadow">
                                <div class="card-body border border-success">
                                    <div class="text-muted text-center">
                                        <strong>Facture Reçu</strong>
                                    </div>
                                    <h2 class="text-muted text-right" style='font-size:15px;'>
                                        <strong>Le {{ Carbon\Carbon::parse($date)->format('d/m/Y') }}</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Facture Recu END --}}

                {{-- Dossier Transmis START --}}
                @if($date = $dossier->date_rapport)
                    <div class="row ">
                        <div class="col py-2">
                            <div class="card border-light shadow">
                                <div class="card-body border border-success">
                                    <div class="text-muted text-center">
                                        <strong>Rapport Transmis</strong>
                                    </div>
                                    <h2 class="text-muted text-right" style='font-size:15px;'>
                                        <strong>Le {{ Carbon\Carbon::parse($date)->format('d/m/Y') }}</strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                {{-- Dossier Transmis END --}}

                @if(true)
                    <form action="{{ route('pdf') }}" method="POST" class="text-center">
                        @csrf
                        <input type="hidden" name="dossier" value="{{ base64_encode(serialize($dossier)) }}">
                        <button type="submit" class="btn btn-success">PDF</button>
{{--                        <a href="{{ route('reclamations.index') }}" class="btn btn-success"> <span  style="font-size: large; color: black">Reclamation</span></a>--}}
                    </form>
                @endif
            </div>

        </div>
    </div>




    {{-- start modal  reclamation --}}
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form  action="{{ route('reclamations.store') }}" METHOD="post">
                @csrf
                <div class="modal-content">

                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Type de reclamation</label>

                            <select class="custom-select"  name="reclamation">
                                <option selected>Sélectionner le  type de reclamation </option>
                                @foreach($type_reclamations as $item)
                                    <option value="{{$item->libelle}}">{{$item->libelle}}</option>
                                @endforeach
                            </select>
                        </div>

                            <input id="w3review" type="hidden" name="dossier_id" rows="4" cols="53" value="{{$dossier->ref}}">
                            <input name="code_dossier" value="{{ $dossier->code_dossier }}" hidden>

                        <div class="md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Observation</label>
                            <textarea id="w3review" name="observation_client" rows="4" cols="53"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-danger">Valide</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
{{--    end modal  reclamation ---}}

@endsection
