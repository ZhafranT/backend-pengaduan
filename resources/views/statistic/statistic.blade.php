@extends('layout.main')

@section('container')
        <h2>Statistik Pengaduan Konsumen</h2>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
             </div>     
        </div>
        {{-- <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div>
                          <canvas id="myChart2"></canvas>
                      </div>
                  </div>
              </div>
           </div>     
        </div> --}}
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
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
              }]
            };
          
            const config = {
              type: 'line',
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
        </script>
        {{-- <script>
          const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config
          );
        </script> --}}
@endsection