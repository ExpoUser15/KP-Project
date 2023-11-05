(function () {
    'use strict'

    const options1 = {
        chart: {
          type: 'bar',
          height: "300",
          toolbar: {
            show: false
          }
        },
        xaxis: {
          categories: [1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30],
        },
        yaxis: {
          max: 100,
        },
        plotOptions: {
          bar: {
            borderRadius: 5,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        series: [{
          name: "Pengguna",
          data: [12,44,12,54,32,31,53,12, 44, 43,21,37,87,66,54,76,32,54,76,54,78,60,87,66,45,21,45,64,1]
        }]
      }
      var chart1 = new ApexCharts(document.getElementById("analisisChart1"), options1);
      chart1.render();
    
      const options2 = {
        chart: {
          type: 'bar',
          height: "400",
          stacked: true,
          stackType: "100%",
          toolbar: false
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
      var chart2 = new ApexCharts(document.getElementById("analisisChart2"), options2);
      chart2.render();
    
      var options3 = {
        series: [44, 80, 13, 43],
        labels: ['Desktop', 'Mobile', 'Tablet', 'Lainnya'],
        chart: {
          width: 480,
          type: 'pie',
        },
        // labels: ['Team A', 'Team B', 'Team C'],
        legend: {
          position: 'bottom'
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 320
            },
          }
        }]
      };
    var chart3 = new ApexCharts(document.getElementById("analisisChart3"), options3);
    chart3.render();
})()