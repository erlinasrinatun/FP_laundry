@extends('admin.index')
@section('content')
<div class="card-body">
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="m-0 font-weight-bold text-primary">Dashboard</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            @if(auth()->user()->role==='admin')
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span>{{ $user }}</span></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif

            @if(auth()->user()->role==='karyawan')
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Transaksi Proses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span>{{ $transaksi_status['proses'] }}</span></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="bi bi-clipboard-fill fa-2x text-info""></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
            

            @if(auth()->user()->role==='karyawan')
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Transaksi Selesai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span>{{ $transaksi_status['selesai'] }}</span></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="bi bi-clipboard-fill fa-2x text-success""></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif

            <!-- New User Card Example -->
            @if(auth()->user()->role==='admin')
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Jenis Laundry</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span>{{ $jenis }}</span></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="bi bi-clipboard-fill fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif

            
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Transaksi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span>{{ $transaksi }}</span></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          

          <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
            <h6 class="m-0 font-weight-bold text-primary">Grafik jenis Laundry</h6>
              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                //ambil data nama pegawai dan kekayaan dari DashboardController di fungsi index
                var lbl = [@foreach($ar_harga as $hr) '{{ $hr->jenis_laundry }}', @endforeach];
                var hrg = [@foreach($ar_harga as $hr) {{ $hr->harga }}, @endforeach];
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      labels: lbl,
                      datasets: [{
                        label: 'Jenis laundry',
                        //data: [65, 59, 80, 81, 56, 55, 40],
                        data: hrg,
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
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

            </div>
          </div>
        </div>
      </div>
    </div>
   </div>  
          
@endsection