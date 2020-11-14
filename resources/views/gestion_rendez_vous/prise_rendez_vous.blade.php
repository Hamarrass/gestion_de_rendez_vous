@extends('layouts.appk')


@section('content')

<div >
    <section class="pt-5 pb-5 pb-0 homepage-hero-module" style=" padding-top: 9rem!important; background-size: cover;height: 1000px; background-image: url(&quot;https://images.unsplash.com/photo-1542351967-d5ae722fed71?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1782&amp;q=800&quot;);" >
        <div class="bg-overlay position-absolute"></div>
        <div class="container position-relative zindex-1 pt-3 pb-3">
            <div class="row  text-center align-content-center justify-content-between ">
                <div class="col-12 col-md-7 pr-md-5 text-left align-self-center ">
{{--                    <p class="lead text-warning">SEPARATED THEY LIVE IN </p>--}}
{{--                    <h1 class="mb-4 text-white font-weight-bold  "><strong>Cabek Rendez-vous</strong></h1>--}}

                    <p class="lead text-white">Planifier facilement vos visites dans nos centres.</p>
                    <p class="lead text-white">Votre temps est précieux et nous le comprenons. Prenez votre rendez-vous en quelques clics et ne perdez plus de temps à vous demander si vous aurez de la place.</p>
                    <p class="text-h3 mt-4">
                        <a href="{{route('service')}}" class="btn btn-primary btn-action btn-round btn-lg">  Sercive Client </a>
                    </p>
                </div>
                <div class="col-13  col-md-5 " >
                    <div class="card shadow-lg border border-primary text-white text-left h-200">
                        <div class="card-body bg-primary px-4 py-5">
                            <h3 class="pb-3 font-weight-bold text-center">Demande de rendez-vous</h3>
                            <form action="{{route('rendezvous.store')}}" method="post" class="registration-form">

                                @csrf
                                <div class="form-group">
                                    <label class="sr-only" for="form-name">NOM</label>
                                    <input type="text" name="nom" placeholder="Entrer ton nom..." class="form-name form-control-lg1 form-control" id="nom">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-name">Prenom</label>
                                    <input type="text" name="prenom" placeholder="Entrer ton Prenom..." class="form-name form-control-lg1 form-control" id="prenom">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="email" name="email" placeholder="Addresse Email ..." class="form-email  form-control-lg1 form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-phone">GSM</label>
                                    <input type="text" name="phone" placeholder="Phone..." class="form-phone  form-control-lg1 form-control" id="phone">
                                </div>
                                <div class="form-group">
                                    <select class="browser-default custom-select"  name="responsable"  onChange="show_field(value);">
                                        <option selected>Open this select menu </option>
                                      @foreach($fastevent as $items)
                                        <option value="{{$items->id}}">{{$items->title}}              </option>
                                       @endforeach
                                    </select>
                                </div>

{{--                                <div class="form-group date " style="display:none">--}}
{{--                                    <label class="" for="form-date">La date de rendez vous </label>--}}
{{--                                    <input type="text" name="date_rendez_vous" placeholder="date..." class="form-phone  form-control-lg1 form-control" id="date_rendez_vous">--}}
{{--                                </div>--}}

                                <div class="form-group date " style="display:none">
                                    <label class="" for="form-date">La date de rendez vous </label>
                                    <select name="date_rendez_vous" id="select_available_date"  class="custom-select form-control">
                                        <option value="0">Non definé</option>

                                    </select>
                                </div>

                                <div class="form-group raison" style="display:none" >
                                    <label class="sr-only" for="form-raison">Raison</label>
                                    <input type="text" name="raison" placeholder="Raison..." class="form-phone  form-control-lg1 form-control" id="raison">
                                </div>


                                <div class="row">

                                   <div class="form-group matricule " style="display:none;margin-left: 12px " >
                                      <label class="sr-only" for="form-matricule">Matricule</label>
                                      <input type="text" name="matricule" placeholder="Matricule..." class="form-phone  form-control-lg1 form-control" id="matricule">
                                   </div>

                                   <div class="form-group date_sinistre " style="display:none">
                                    <label class="sr-only" for="form-date_sinistre">Matricule</label>
                                    <input type="date" name="date_de_sinistre" placeholder="Date de sinistre..." class="form-phone  form-control-lg1 form-control" id="date_sinistre">
                                   </div>

                                </div>




                                <button type="submit" class="btn btn-dark btn-block mt-2 shadow-lg">Envoyer</button>

                                <p class="mt-3 small">
                                    * Nous ne partageons jamais vos coordonnées avec personne et c'est une promesse
                                </p>

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script !src="" type="text/javascript">

    function  show_field(value) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){



            var lien = "{{route('available_date',['id'=>":id"])}}";
            lien = lien.replace(':id',value);

            $.ajax({
                type:'POST',
                url:lien,
                data: "id=" +value,
                success:function (data) {
                     console.log(data);
                    var select_available_date = document.getElementById('select_available_date');
                    $(select_available_date).empty();
                    for (var i = 0; i < data.length; i++) {
                        $(select_available_date).append('<option id=' + data[i]['id'] + ' value=' + data[i]['id'] + '>'+data[i]['start']+'</option>');
                    }
                }
            })


          if(value==1){

              $(".raison").css('display', 'block')
              $(".matricule").css('display', 'none')
              $(".date").css('display', 'block')
              $(".date_sinistre").css('display', 'none')

          }

        if(value==3  ||  value==2){
            $(".raison").css('display', 'block')
            $(".matricule").css('display', 'block')
            $(".date").css('display', 'block')
            $(".date_sinistre").css('display', 'block')
        }


        if(value==4){
            $(".raison").css('display', 'block')
            $(".matricule").css('display', 'none')
            $(".date").css('display', 'block')
            $(".date_sinistre").css('display', 'none')
        }

        if(value==5){
            $(".raison").css('display', 'block')
            $(".matricule").css('display', 'none')
            $(".date").css('display', 'block')
            $(".date_sinistre").css('display', 'none')
        }

        });
  }




</script>

@endsection

@section("js")
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.js" integrity="sha512-Nc36QpQAS2BOjt0g/CqfIi54O6+UWTI3fmqJsnXoU6rNYRq8vIQQkZmkrRnnk4xKgMC3ESWp69ilLpDm6Zu8wQ==" crossorigin="anonymous"></script>--}}
{{--    <script !src="">--}}
{{--        $(document).ready( function () {--}}

{{--            var now = new Date();--}}
{{--            var annee   = now.getFullYear();--}}
{{--            var mois    = now.getMonth() + 1;--}}
{{--            var jour    = now.getDate();--}}
{{--            var heure   = now.getHours();--}}
{{--            var minute  = now.getMinutes();--}}

{{--            $('#date_rendez_vous').flatpickr({--}}
{{--                enableTime: true,--}}
{{--                dateFormat: "Y-m-d H:i",--}}
{{--                defaultDate: "today",--}}
{{--                time_24hr: true,--}}
{{--                defaultDate: annee+"-"+mois+"-"+jour+ " "+heure+":"+minute,--}}
{{--                allowInput: true,--}}
{{--                altFormat: "Y-m-d H:i"--}}
{{--            });--}}
{{--        } );--}}
{{--    </script>--}}
@endsection
