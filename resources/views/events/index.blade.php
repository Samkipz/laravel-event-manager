@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center" >
            <div class="col-md-6 align-items-center">
                <div class="panel panel-default">
                    <div class="panel-heading text-center p-2" style="background: #2e6da4; color: white">
                        Events Calender
                    </div>
                    <div class="panel-body" style="border: 1px solid rgba(163,162,162,0.36)">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function () {
        var events = @json($events);
        var SITEURL = "{{ url('/event') }}";

        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            events: events,
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDays){
                if (confirm("Would you like to create a new event?")) {
                    window.location.href = SITEURL+ "/create";
                }

            }
        })
    });

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

</script>



@endsection


{{--var SITEURL = "{{ url('/event') }}";--}}

{{--$.ajaxSetup({--}}
{{--    headers: {--}}
{{--        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--    }--}}
{{--});--}}

{{--var calendar = $('#calendar').fullCalendar({--}}
{{--    editable: true,--}}
{{--    events: SITEURL + "/save",--}}
{{--    displayEventTime: false,--}}
{{--    editable: true,--}}
{{--    eventRender: function (event, element, view) {--}}
{{--        if (event.allDay === 'true') {--}}
{{--            event.allDay = true;--}}
{{--        } else {--}}
{{--            event.allDay = false;--}}
{{--        }--}}
{{--    },--}}
{{--    selectable: true,--}}
{{--    selectHelper: true,--}}
{{--    select: function (start, end, allDay) {--}}
{{--        var title = prompt('Event Title:');--}}
{{--        console.log(title);--}}
{{--        if (title) {--}}
{{--            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");--}}
{{--            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");--}}
{{--            $.ajax({--}}
{{--                url: SITEURL + "/save",--}}
{{--                data: {--}}
{{--                    title: title,--}}
{{--                    start: start,--}}
{{--                    end: end,--}}
{{--                    type: 'add'--}}
{{--                },--}}
{{--                type: "POST",--}}
{{--                success: function (data) {--}}
{{--                    displayMessage("Event Created Successfully");--}}

{{--                    calendar.fullCalendar('renderEvent',--}}
{{--                        {--}}
{{--                            id: data.id,--}}
{{--                            title: title,--}}
{{--                            start: start,--}}
{{--                            end: end,--}}
{{--                            allDay: allDay--}}
{{--                        },true);--}}

{{--                    calendar.fullCalendar('unselect');--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    },--}}
{{--    eventDrop: function (event, delta) {--}}
{{--        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");--}}
{{--        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");--}}

{{--        $.ajax({--}}
{{--            url: SITEURL + '/fullcalenderAjax',--}}
{{--            data: {--}}
{{--                title: event.title,--}}
{{--                start: start,--}}
{{--                end: end,--}}
{{--                id: event.id,--}}
{{--                type: 'update'--}}
{{--            },--}}
{{--            type: "POST",--}}
{{--            success: function (response) {--}}
{{--                displayMessage("Event Updated Successfully");--}}
{{--            }--}}
{{--        });--}}
{{--    },--}}
{{--    eventClick: function (event) {--}}
{{--        var deleteMsg = confirm("Do you really want to delete?");--}}
{{--        if (deleteMsg) {--}}
{{--            $.ajax({--}}
{{--                type: "POST",--}}
{{--                url: SITEURL + '/fullcalenderAjax',--}}
{{--                data: {--}}
{{--                    id: event.id,--}}
{{--                    type: 'delete'--}}
{{--                },--}}
{{--                success: function (response) {--}}
{{--                    calendar.fullCalendar('removeEvents', event.id);--}}
{{--                    displayMessage("Event Deleted Successfully");--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    }--}}

{{--});--}}
