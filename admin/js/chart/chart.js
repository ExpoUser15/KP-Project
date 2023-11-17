
(function () {
  'use strict';

  setTimeout(function(){
    console.clear();
  },5000)
  const options2 = {
    chart: {
      type: 'bar',
      height: "400",
      toolbar: true,
      zoom: {
        enabled: false,
      }
    },
    xaxis: {
      categories: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
      labels: {
        show: true
      }
    },
    legend: {
      position: 'top', 
      horizontalAlign: "left"
    },
    plotOptions: {
      bar: {
        borderRadius: 10, // Atur nilai borderRadius di sini
      }
    },
    series:[
      {
        name: 'Pembuatan Surat',
        data: [20, 30, 15, 25,11,56,32],
      }
    ]
  }
  var chart2 = new ApexCharts(document.getElementById("analisisChart"), options2);
  chart2.render();
})()
