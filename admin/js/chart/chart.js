
(function () {
  'use strict';

  setTimeout(function(){
    // console.clear();
  },5000);

  const data = [];
  const data2 = [];
  const display = [];
  const display2 = [];

  fetch("../utils/brfKfrdUjPRWPsTAub0WZFmVvyJLkWOdA+Lx0ZALmZw=.php")
  .then(res => res.json())
  .then(res => {
    var today = new Date();
    var options = { timeZone: 'Asia/Jakarta' };

    var daysUntilLastSunday = today.getDay();
    var lastSunday = new Date(today);
    lastSunday.setDate(today.getDate() - daysUntilLastSunday);

    var oneWeekAgo = new Date(lastSunday);
    oneWeekAgo.setDate(lastSunday.getDate() - 6);

    var datesOfWeek = [];

    function tambahkanNolJikaPerlu(nilai) {
      return nilai.toString().length === 1 ? '0' + nilai : nilai;
    }

    for (var i = 0; i < 7; i++) {
      var currentDate = new Date(oneWeekAgo);
      currentDate.setDate(oneWeekAgo.getDate() + i);
      
      var options = { timeZone: 'Asia/Jakarta' };
      var dateFormatter = new Intl.DateTimeFormat('id-ID', options);
      var formattedDate = dateFormatter.format(currentDate);
      display.push(formattedDate);
      
      var bagianTanggal = formattedDate.split('/');
      var tanggalBaru = tambahkanNolJikaPerlu(bagianTanggal[0]) + '-' + bagianTanggal[1] + '-' + bagianTanggal[2];
      datesOfWeek.push(tanggalBaru);
    }
    var hitungTanggal = {};
      res.forEach(function (item) {
        var tanggal = item.tanggal;
        
        if (!hitungTanggal[tanggal]) {
            hitungTanggal[tanggal] = 1;
        } else {
            hitungTanggal[tanggal]++;
        }
      });

      const arr = Object.keys(hitungTanggal);
      var no = 0;
      datesOfWeek.some(item => {
        if(arr.includes(item)){
          data.push(hitungTanggal[item]);
        }else{
          data.push(0);
        }
        no++;
      });

      for(var i = 0; i < 2; i++){
        data.pop();
      }

      document.getElementById("col2").innerHTML = `<input type="text" value="${display[0]} - ${display[4]}" class="form-control form-control-sm text-secondary" readonly>`;

      if(document.getElementById('f').value == "Minggu"){
        chart2.updateSeries(
           [{
            name: 'Total Pembuatan Surat',
            data: data
          }]
        )
      }
  })
  .catch(err => console.log(err));

  fetch("../utils/ifSSmdTRNV7RzFQ1ZXhvZqxST6ry2762RjwoAtHI.php")
  .then(res => res.json())
  .then(res => {
      var hitungTanggal = {};
      display2.push(res['month']);
      res['data'].forEach(function (item) {
        var tanggal = item.tanggal;
        
        if (!hitungTanggal[tanggal]) {
            hitungTanggal[tanggal] = 1;
        } else {
            hitungTanggal[tanggal]++;
        }
      });

      const arr = Object.keys(hitungTanggal);
      var no = 0;
      res['fulldateinmonth'].some(item => {
        if(arr.includes(item)){
          data2.push(hitungTanggal[item]);
        }else{
          data2.push(0);
        }
        no++;
      });

      if(document.getElementById('f').value == "Bulan"){
        chart2.updateSeries(
          [{
            name: 'Total Pembuatan Surat',
            data: data2
          }]
        )
      }                                             
  })
  .catch(err => console.log(err));


  const satuMinggu = {
    categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'],
    series:[
      {
        name: 'Total Pembuatan Surat',
        data: data,
      }
    ]
  }

  const satuBulan = {
    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'],
    series:[
      {
        name: 'Total Pembuatan Surat',
        data: data2,
      }
    ]
  }

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
      categories: satuMinggu.categories,
      labels: {
        show: true
      }
    },
    legend: {
      position: 'bottom', 
      horizontalAlign: "left"
    },
    plotOptions: {
      bar: {
        borderRadius: 10, 
      }
    },
    series: satuMinggu.series
  }
  var chart2 = new ApexCharts(document.getElementById("analisisChart"), options2);
  chart2.render();

 
  document.getElementById('f').addEventListener('change', (e) => {
    if(e.target.value == 'Minggu'){
      chart2.updateOptions({
        chart: {
          height: "400",
          zoom: false
        },
        xaxis: {
          categories: satuMinggu.categories
        },
        plotOptions: {
          bar: {
            horizontal: false
          }
        },
      });

      if(document.getElementById('f').value == "Minggu"){
        chart2.updateSeries(
           [{
            name: 'Total Pembuatan Surat',
            data: data
          }]
        )
      }

      document.getElementById("col2").innerHTML = `<input type="text" value="${display[0]} - ${display[4]}" class="form-control form-control-sm text-secondary" readonly>`;
    
      console.clear();
    }else{
      chart2.updateOptions({
        chart: {
          height: "600",
          zoom: false
        },
        xaxis: {
          categories: satuBulan.categories
        },
        plotOptions: {
          bar: {
            horizontal: true
          }
        }
      });

      document.getElementById("col2").innerHTML =  `<input class="form-control form-control-sm text-secondary" value="${display2[0]}" readonly>`;

      if(document.getElementById('f').value == "Bulan"){
        chart2.updateSeries(
           [{
            name: 'Total Pembuatan Surat',
            data: data2
          }]
        )
      }
    }
    console.clear();
  })

})()
