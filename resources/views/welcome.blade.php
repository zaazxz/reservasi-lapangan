<!-- resources/views/appointments/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Scheduler</title>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.css" rel="stylesheet">
</head>
<body>
    <h1>Appointment Scheduler</h1>

    <!-- Kalender -->
    <div id="calendar"></div>

    <!-- Form booking appointment -->
    <form id="appointment-form">
        <input type="text" id="title" name="title" placeholder="Title" required>
        <textarea id="description" name="description" placeholder="Description" required></textarea>
        <input type="datetime-local" id="appointment_time" name="appointment_time" required>
        <button type="submit">Book Appointment</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js"></script>
    <script>
        $(document).ready(function() {
            // Menampilkan kalender
            var calendar = new FullCalendar.Calendar($('#calendar')[0], {
                initialView: 'dayGridMonth',
                events: function(info, successCallback, failureCallback) {
                    $.ajax({
                        url: '/appointments/data',
                        method: 'GET',
                        success: function(data) {
                            var events = data.map(function(appointment) {
                                return {
                                    title: appointment.title,
                                    start: appointment.appointment_time,
                                    description: appointment.description,
                                    allDay: false
                                };
                            });
                            successCallback(events);
                        }
                    });
                },
                dateClick: function(info) {
                    $('#appointment_time').val(info.dateStr);
                }
            });
            calendar.render();

            // Menangani form booking appointment
            $('#appointment-form').on('submit', function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: '/appointments',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        alert(response.message);
                        calendar.refetchEvents(); // Refresh kalender setelah booking
                    },
                    error: function(error) {
                        alert('Error booking appointment.');
                    }
                });
            });
        });
    </script>
</body>
</html>
