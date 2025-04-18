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
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'id',
                initialView: 'timeGridWeek',
                initialDate: new Date(),
                slotMinTime: "08:00:00",
                slotMaxTime: "22:00:00",
                allDaySlot: false,
                selectable: true,
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'timeGridDay,timeGridWeek'
                },

                // Format jam di sisi kiri
                slotLabelFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                },

                // Format waktu di event, nanti kita tambahin WIB via event render
                eventTimeFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                },

                // Format hari jadi: 14 - April - 2025
                dayHeaderFormat: {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                },

                events: [
                    // Contoh booking yang sudah ada
                    {
                        title: 'Booking Lapangan 1',
                        start: '2025-04-19T09:00:00',
                        end: '2025-04-19T10:00:00',
                        backgroundColor: '#dc3545',
                        borderColor: '#dc3545',
                    },
                    {
                        title: 'Booking Lapangan 2',
                        start: '2025-04-20T13:00:00',
                        end: '2025-04-20T15:00:00',
                        backgroundColor: '#ffc107',
                        borderColor: '#ffc107',
                    }
                ],

                select: function(info) {
                    if (confirm("Reservasi sekarang?") == true) {
                        window.location.href = "/reservation";
                    }
                }

            });

            calendar.render();
        });
    </script>
@endsection
