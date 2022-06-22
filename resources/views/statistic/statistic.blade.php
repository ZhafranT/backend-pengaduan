@extends('layout.main')

@section('container')

<div class="card-body">
  <h2>Statistik Pengaduan Konsumen</h2>

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
        text: "Grafik Pengaduan Masuk Bulanan"
      },
      xAxis : {
        categories: bulan
      },
      yAxis : {
        title: {
          text: "Total Pengaduan"
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
          name: "Jumlah Pengaduan",
          data: pengaduanData
        }
      ]
    });
  </script>

</div>

@endsection