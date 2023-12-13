
<script src=https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js></script>
<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset='utf-8' />

    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.3.1/core/main.css' rel="stylesheet" />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',


        });
        calendar.render();
       
      });

    </script>
    <title>Reservas</title>
</head>

<body>
@include('nav.navA')
<br><br>
            <div id='calendar' style="width: 800px;margin: 0 auto;" ></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>

