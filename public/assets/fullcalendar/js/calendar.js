

document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
            return {
                title: eventEl.innerText.trim()
            }
        }
    });



    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        //language
        locale:'fr-br',
         // you can click on  the number which is on the cube calandar
        navLinks: true,
        eventLimit: true,
        selectable: true,
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar

        drop: function(element) {


            let Event = JSON.parse(element.draggedEl.dataset.event);

            // console.log(Event);
            // is the "remove after drop" checkbox checked?
            if (document.getElementById('drop-remove').checked) {
                // if so, remove the element from the "Draggable Events" list
                element.draggedEl.parentNode.removeChild(element.draggedEl);

                Event._method = "DELETE";
                sendEvent(routeEvents('routeFastEventDelete'), Event);
            }

            let start = moment(`${element.dateStr} ${Event.start}`).format("YYYY-MM-DD HH:mm:ss");
            let end = moment(`${element.dateStr} ${Event.end}`).format("YYYY-MM-DD HH:mm:ss");

            Event.start = start;
            Event.end   = end;

            delete Event.id;
            delete Event._method;

            sendEvent(routeEvents('routeEventStore'), Event);

        },

        eventDrop: function(element){

            let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end   = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

            let newEvent = {
                _method :'PUT',
                title   : element.event.title,
                id      : element.event.id,
                fast_events_id: element.event.fast_events_id,
                start   : start,
                end     : end
            };

            sendEvent(routeEvents('routeEventUpdate'),newEvent,calendar);
        },

        eventResize: function(element){
            let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end   = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

            let newEvent = {
                _method        :'PUT',
                title          : element.event.title,
                id             : element.event.id,
                fast_events_id : element.event.fast_events_id,
                start          : start,
                end            : end
            };

            sendEvent(routeEvents('routeEventUpdate'),newEvent,calendar);
        },



        eventClick: function (element) {
            clearMessages('.message');
            resetForm("#formEvent");

            $("#modalCalendar").modal('show');
            $("#modalCalendar #titleModal").text('Modifier');
            $("#modalCalendar button.deleteEvent").css("display","flex");

            let id = element.event.id;

            $("#modalCalendar input[name='id']").val(id);

            let title = element.event.title;
            $("#modalCalendar input[name='title']").val(title);

            let fast_events_id = element.event.extendedProps.fast_events_id;

            $("#modalCalendar input[name='fast_events_id']").val(fast_events_id);

            let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='start']").val(start);

            let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='end']").val(end);

            let color = element.event.backgroundColor;
            $("#modalCalendar input[name='color']").val(color);

            let description = element.event.extendedProps.description;
            $("#modalCalendar textarea[name='description']").val(description);
        },

        select: function (element) {

            // clearMessages('.message');
            resetForm("#formEvent");
            $('#modalCalendar input[name="id"]').val('');

            $("#modalCalendar").modal('show');
            $("#modalCalendar #titleModal").text('Ajouter');
            $("#modalCalendar button.deleteEvent").css("display","none");

            let start = moment(element.start).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='start']").val(start);

            let end = moment(element.end).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='end']").val(end);

            $("#modalCalendar input[name='color']").val("#FF5733");

            calendar.unselect();
        },

        events:routeEvents('routeLoadEvents'),



    });
    calendar.render();
});

// console.log(routeEvents('routeLoadEvents'));
