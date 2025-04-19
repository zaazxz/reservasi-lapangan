@extends('layouts.main')

@section('styling')
    <style>
        /* Container kalender */
        #calendar {
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }
    </style>
@endsection

@section('content')
    <div class="container mb-5">
        <h3 class="text-center mb-4">Jadwal Reservasi</h3>
        <div id="calendar"></div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'id',
                initialView: 'timeGridWeek',
                initialDate: new Date(),
                slotMinTime: '08:00:00',
                slotMaxTime: '23:00:00',
                allDaySlot: false,
                selectable: true,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridDay, timeGridWeek'
                },

                slotLabelFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                },

                eventTimeFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                },

                dayHeaderFormat: {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                },

                events: {
                    url: '/events',
                    method: 'GET',
                    failure: function() {
                        alert('Terjadi kesalahan saat memuat jadwal');
                    }
                },

                select: function(info) {
                    if (confirm('Apakah Anda yakin ingin membuat jadwal?')) {
                        window.location.href = '/reservation';
                    }
                }
            });
            calendar.render();
        })
    </script>
@endsection
