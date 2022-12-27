<!DOCTYPE html>
<html>
<head>
    <title>Transaksi PDF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
<div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-8">
        <div class="text-center">
          <p style="color: #7e8d9f;font-size: 20px;"><strong>SI Laundry</strong></p>
          <p style="color: #7e8d9f;font-size: 15px;">Jl.Kenangan, No.45 Jakarta Barat</p>
        </div>
        <hr style="border: 1px solid;">
      </div>
      
      <div class="row">
          <div class="col-xl-4">
          <ul class="list-group list-group-unbordered mb-3">
              <li class="list-inline-item ">
                  <span class="text-muted">Nama :</span> <span class="float-right text-muted">{{ $transaksi->nama_customer }}</span>
              </li>
              <hr style="margin: 10px 0">
              <li class="list-inline-item">
                  <span class="text-muted">Jenis Laundry :</span> <span class="float-right text-muted">{{ $transaksi->jenis->jenis_laundry}}</span>
              </li>
              <hr style="margin: 10px 0">
              <li class="list-inline-item">
                  <span class="text-muted">Berat :</span> <span class="float-right text-muted">{{ $transaksi->berat}}</span>
              </li>
              <hr style="margin: 10px 0">
              <li class="list-inline-item">
                  <span class="text-muted">Tanggal Masuk :</span> <span class="float-right text-muted">{{ $transaksi->tgl_awal}}</span>
              </li>
              <hr style="margin: 10px 0">
              <li class="list-inline-item">
                  <span class="text-muted">Tanggal Keluar :</span> <span class="float-right text-muted">{{ $transaksi->tgl_ambil}}</span>
              </li>
              <hr style="margin: 10px 0">
              <li class="list-inline-item">
                  <span class="text-muted">Total Bayar :</span> <span class="float-right fw-bold text-muted">{{ $transaksi->total_bayar}}</span>
              </li>
              <hr style="margin: 10px 0">
            </ul>
        </div>
    </div>
</div>
</body>
</html>