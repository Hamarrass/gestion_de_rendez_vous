
@extends('layouts.appk')

@section('css')
    <meta charset='utf-8' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link  href='{{asset('assets/fullcalendar/lib/main.css')}}' rel='stylesheet' />
    <link  href='{{asset('assets/fullcalendar/css/style.css')}}' rel='stylesheet' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
@endsection

@section('content')

<div id='wrap'>

    <div id='external-events' style="margin-left: 300px ; margin-top: 175px" >
        <h4>Responsables</h4>

        <div id='external-events-list'  style="margin: 0px">
            @isset($fastEvents)
                @forelse($fastEvents as $fastEvent)
                    <div id="boxFastEvent{{ $fastEvent->id }}"
                         style="padding: 4px; border: 1px solid {{ $fastEvent->color }}; background-color: {{ $fastEvent->color }}"
                         class='fc-event event text-center'
                         data-event='{"id":"{{ $fastEvent->id }}", "fast_events_id":"{{ $fastEvent->id }}" , "title":"{{ $fastEvent->title }}","color":"{{ $fastEvent->color }}","start":"{{ $fastEvent->start }}","end":"{{ $fastEvent->end }}"}'>
                        {{ $fastEvent->title }}
                    </div>
                @empty
                    <p>No One</p>
                @endforelse
            @endisset

        </div>

        <p>
            <input type='checkbox' id='drop-remove' />
            <label for='drop-remove'>remove after drop</label>
        </p>
    </div>

    @include('gestion_rendez_vous.modal-calendar')

    <div id='calendar-wrap' style="margin-top: 130px">

        <div
            id='calendar'
            data-route-load-events="{{ route('routeLoadEvents') }}"
            data-route-event-update="{{ route('routeEventUpdate') }}"
            data-route-event-store="{{ route('routeEventStore') }}"
            data-route-event-delete="{{ route('routeEventDelete') }}"
        ></div>

    </div>
</div>
@endsection

@section('js')
        <script src='{{asset('assets/fullcalendar/lib/main.js')}}'></script>
        <script src='{{asset('assets/fullcalendar/lib/locales-all.js')}}'></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src='{{asset('assets/fullcalendar/js/script.js')}}'></script>
        <script src='{{asset('assets/fullcalendar/js/calendar.js')}}'></script>
@endsection


