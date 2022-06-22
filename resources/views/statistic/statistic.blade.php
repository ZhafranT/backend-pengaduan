@extends('layout.main')

@section('container')

<div class="card-body">
  <h2>Statistik Pengaduan Konsumen</h2>

  {{-- <div class="card">
    <div>
        <canvas id="myChart"></canvas>
    </div>
  </div>
  <script>
      const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
      ];
    
      const data = {
        labels: labels,
        datasets: [{
          label: 'Data Laporan Pengaduan Masuk Tahun 2022',
          // backgroundColor: 'rgb(75, 192, 192)',
          // borderColor: 'rgb(75, 192, 192)',
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1,
          data: [0, 10, 5, 2, 20, 30, 45],
        }]
      };
    
      const config = {
        type: 'bar',
        data: data,
        options: {}
      };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
  </script> --}}

  <div class="card">
    <div class="card-header">Data Laporan Pengaduan Masuk Tahun 2022</div>
    <div class="card-body">
      <div id="grafik"></div>
    </div>
  </div>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    var pengaduanData = <?php echo json_encode($monthCount) ?>;
    var bulan = <?php echo json_encode($months) ?>;
    Highcharts.chart('grafik', {
      title : {
        text: 'Grafik Pengaduan Masuk Bulanan'
      },
      xAxis : {
        categories: bulan
      },
      yAxis : {
        title: {
          text: 'Total Pengaduan'
        }
      },
      dataSorting: {
            enabled: true
      },
      plotOptions : {
        series: {
          allowPointSelect: true
        }
      },
      series : [
        {
          name: 'Jumlah Pengaduan',
          data: pengaduanData
        }
      ]
    });
  </script>

</div>

@endsection