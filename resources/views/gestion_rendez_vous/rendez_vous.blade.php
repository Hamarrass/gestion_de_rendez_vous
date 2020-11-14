@extends('layouts.appk')
@section('content')
    <section class="pt-5 pb-5 pb-0 homepage-hero-module" style=" padding-top: 9rem!important; background-size: cover;height: 1000px; background-image: url(&quot;https://images.unsplash.com/photo-1542351967-d5ae722fed71?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1782&amp;q=800&quot;);" >
    <div  style="margin-left: 200px ;margin-right: 200px "  >
        <table class="table table-bordered rounded-circle" >
            <thead>
            <tr  style="background: #005cbf ; color: black" align="center">
                <th >Nom                 </th>
                <th >Prenom              </th>
                <th >Email               </th>
                <th >Phone               </th>
                <th >Responsable         </th>
                <th >Raison              </th>
                <th >Matricule           </th>
                <th >Date de sinistre    </th>
                <th >Date de rendez vous </th>
{{--                <th >Action              </th>--}}


            </tr>
            </thead>
            <tbody style="background: whitesmoke ; color: black">
            @foreach($rendez_vous  as $item)
            <tr>
                <td > {{$item->nom }}                </td>
                <td > {{$item->prenom }}             </td>
                <td > {{$item->email }}              </td>
                <td > {{$item->phone }}              </td>
                <td > {{$item->fast_events->title }} </td>
                <td > {{$item->raison }}             </td>
                <td > {{$item->matricule }}          </td>
                <td > {{$item->date_de_sinistre }}   </td>
                <td ><span class="badge  @if($item->used==1) badge-success @endif   @if($item->used==null) badge-danger @endif     ">{{$item->events->start}}</span> </td>

{{--                <td >--}}
{{--                    <button type="button" class="  badge badge-info" onclick="modifier(this)" data-date="{{$item->date_rendez_vous }}" data-id="{{$item->id}}" >--}}
{{--                        changer--}}
{{--                    </button>--}}
{{--                </td>--}}

            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $rendez_vous->links() }}

    </div>

    <!-- Modal -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Changer la date de rendez vous </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="" method="post" class="registration-form" id="changer_date_de_rendez_vous">
                    @csrf
                    @method('put')
                <div class="modal-body">

                            <input type="text" name="date_rendez_vous" placeholder="date..." class="form-phone  form-control-lg1 form-control" id="date_rendez_vous">


                    <div class="modal-footer">
                        <button type="submit"   class="btn btn-success" >Valider</button>     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </form>



            </div>
        </div>
    </div>

@endsection
@section("js")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.js" integrity="sha512-Nc36QpQAS2BOjt0g/CqfIi54O6+UWTI3fmqJsnXoU6rNYRq8vIQQkZmkrRnnk4xKgMC3ESWp69ilLpDm6Zu8wQ==" crossorigin="anonymous"></script>
    <script !src="">
        $(document).ready( function () {

            var now = new Date();
            var annee   = now.getFullYear();
            var mois    = now.getMonth() + 1;
            var jour    = now.getDate();
            var heure   = now.getHours();
            var minute  = now.getMinutes();

            $('#date_rendez_vous').flatpickr({
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                defaultDate: "today",
                time_24hr: true,
                defaultDate: annee+"-"+mois+"-"+jour+ " "+heure+":"+minute,
                allowInput: true,
                altFormat: "Y-m-d H:i"
            });



        } );

        function modifier(e)
        {
            let id=$(e).attr("data-id");
            let date=$(e).attr("data-date");

           $("#date_rendez_vous").val(date);
            let url="{{route('rendezvous.update',['rendezvous'=>':id'])}}";
            url=url.replace(':id',id);
            $("#changer_date_de_rendez_vous").attr('action',url);
            $('#myModal').modal('show');
        }
    </script>
<section>



@endsection
