
(function () {
  'use strict'

  var options = {
    series: [
      {
        name: 'Saran',
        data: [30, 50, 25, 45, 30, 60, 65],
      },
      {
        name: 'Kritikan',
        data: [23, 35, 45, 78, 50, 80, 47]
      },
      {
        name: 'Lainnya',
        data: [65, 39, 35, 70, 47, 45, 85]
      },
    ],
    chart: {
      type: 'bar',
      height: 400,
      toolbar: {
          show: true
      },
    },
    tooltip: {
      enabled: true,
    },
    legend: {
      horizontalAlign: 'right',
      labels: {
        // Mengubah warna font pada legend
        colors: "#64748b", // Ganti warna sesuai keinginan Anda
      },
      onItemHover: {
        highlightDataSeries: true
      },
      onItemClick: {
        toggleDataSeries: true
      }
    },
    grid: {
      show: true,
      borderColor: '#cbd5e1',
      padding: {
        bottom: 0
      },
      xaxis: {
        lines: {
          show: true,
        },
      },
      yaxis: {
        lines: {
          show: true
        }
      },
      row: {
        colors: undefined,
        opacity: 0.5
      },  
      column: {
        colors: undefined,
        opacity: 0.5
      },  
    },
    xaxis: {
      show: true,
      categories: ["Minggu", 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
      axisBorder: {
        show: false, // Menghilangkan garis X-axis
      },
      labels: {
        style: {
          colors: "#475569"
        },
      }
    },
    yaxis: {
      show: true,
      lines: {
        show: true
      },
      labels: {
        style: {
          colors: "#475569"
        },
      },
      max: 100,
      min: 0,
    },
  };
  var chart = new ApexCharts(document.querySelector("#myChart"), options);
  chart.render();
})()
