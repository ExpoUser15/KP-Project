document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: 300,
      headerToolbar: {
        end: 'prevYear,prev,next,nextYear'
      }
    });
    calendar.render();
});

// function getDaysInMonth(month, year) {
//   return new Date(year, month, 0).getDate();
// }

// // Contoh penggunaan:
// var bulan = 11; // Februari
// var tahun = 2023;
// var jumlahHari = getDaysInMonth(bulan, tahun);

// console.log("Jumlah hari dalam bulan " + bulan + " tahun " + tahun + " adalah " + jumlahHari);
