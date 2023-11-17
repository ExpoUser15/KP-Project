(function () {
    'use strict'

      const options = {
        chart: {
          type: 'bar',
          height: "400",
          stacked: true,
          stackType: "100%",
          toolbar: false,
          zoom: {
            enabled: false,
          }
        },
        xaxis: {
          categories: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
          labels: {
            show: false
          }
        },
        yaxis: {
          reversed: true,
        },
        legend: {
          position: 'top', 
          horizontalAlign: "left"
        },
        plotOptions: {
          bar: {
            horizontal: true
          }
        },
        series: [
          {
            name: 'Saran',
            data: [20, 30, 15, 25,11,56,32,51],
          },
          {
            name: 'Kritikan',
            data: [10, 25, 30, 10,12,3,15,54],
          },
          {
            name: 'Lainnya',
            data: [17, 45, 32, 50,22,13,19,34],
          }  
        ]
      }
      var chart = new ApexCharts(document.getElementById("analisisChart2"), options);
      chart.render();
})()