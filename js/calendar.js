document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    let date = new Date();
    let dd = String(date.getDate()).padStart(2, '0');
    let mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
    let yyyy = date.getFullYear();
    let dateString = yyyy + '-' + mm + '-' + dd;
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      googleCalendarApiKey: '',
      initialView: 'dayGridMonth',
      initialDate: dateString,
      locale: 'nl',
      height: 'auto',
      handleWindowResize: true,
      headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek'
      },
      eventSources: [
        {
          googleCalendarId: '1rlrkl4agbjes7nv5k259trc0s@group.calendar.google.com',
          color: 'red'
        },
        {
          googleCalendarId: 'nl.be#holiday@group.v.calendar.google.com',
          color: 'green'
        }
      ],
      eventClick: function(info) {
        info.jsEvent.preventDefault(); // don't let the browser navigate
    
        if (info.event.url) {
          window.open(info.event.url, '_blank');
        }
      },
    });
    
  
    calendar.render();
  });