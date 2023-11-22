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
          categories: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"],
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
            data: [],
          },
          {
            name: 'Kritikan',
            data: [],
          },
          {
            name: 'Lainnya',
            data: [],
          }  
        ]
      }
      var chart = new ApexCharts(document.getElementById("analisisChart2"), options);
      chart.render();

      const saranSeries = [];
      const kritikSeries = [];
      const lainnyaSeries = [];

      fetch('../utils/analisis.php')
      .then(res => res.json())
      .then(res => {
        let hitungSaran = {};
        let hitungKritik = {};
        let hitungLainnya = {};
        res['data'].forEach(e => {
          if(e.kategori == 'saran'){
            if (!hitungSaran[e.tanggal]) {
              hitungSaran[e.tanggal] = 1;
            } else {
              hitungSaran[e.tanggal]++;
            }
          }else if(e.kategori == 'kritik'){
            if (!hitungKritik[e.tanggal]) {
              hitungKritik[e.tanggal] = 1;
            } else {
              hitungKritik[e.tanggal]++;
            }
          }else{
            if (!hitungLainnya[e.tanggal]) {
              hitungLainnya[e.tanggal] = 1;
            } else {
              hitungLainnya[e.tanggal]++;
            }
          }
        });

        const arr = Object.keys(hitungSaran);
        const arr2 = Object.keys(hitungKritik);
        const arr3 = Object.keys(hitungLainnya);
        var no = 0;
        var no2 = 0;
        var no3 = 0;
        res['weekdays'].some(item => {
          if(arr.includes(item)){
            saranSeries.push(hitungSaran[item]);
          }else{
            saranSeries.push(0);
          }
          no++;
        });
        res['weekdays'].some(item => {
          if(arr2.includes(item)){
            kritikSeries.push(hitungKritik[item]);
          }else{
            kritikSeries.push(0);
          }
          no2++;
        });
        res['weekdays'].some(item => {
          if(arr3.includes(item)){
            lainnyaSeries.push(hitungLainnya[item]);
          }else{
            lainnyaSeries.push(0);
          }
          no3++;
        });

        chart.updateSeries(
          [{
            name: 'Saran',
            data: saranSeries
          },
          {
            name: 'Kritik',
            data: kritikSeries
          },
          {
            name: 'Lainnya',
            data: lainnyaSeries
          }
        ]
        )
      })
      .catch(err => console.log(err))
})()