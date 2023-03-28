<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Data Penjualan- Toko Hafiz Syahputra</title>
  <!-- MDB icon -->
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/8112/8112548.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('mdb5/css/mdb.min.css') }}"/>

  <!-- NAVBAR -->
  <nav class="navbar sticky-top navbar-expand-lg bg-white shadow-0">
    <div class="container">
        <b><a class="navbar-brand" href="#!">HAFIZ SYAHPUTRA / 2110031805031</a></b>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/barang">Data Barang</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/user">Data Pengguna</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold text-primary" aria-current="page" href="#">Data Penjualan</a></li>
            </ul>
            <form class="d-flex m-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-dark" type="submit">SEARCH</button>
            </form>
            <a href="http://localhost:8000/"><button type="button" class="btn btn-warning">LOGOUT</button></a>
        </div>
    </div>
  </nav>
</head>

<body>
  <!-- Start your project here-->
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4">

            @foreach($transaksi as $p)
            <form method="POST" action="/transaksi/update" class="rounded shadow-0 p-5">
                {{csrf_field()}}
                    <input type='hidden' name='id' value='{{ $p->id_transaksi }}'>
                <div class="text-center">
                    <b>Edit Data Penjualan</b>
                </div>

                    <!--Input text-->
                    <div class="form-group mt-2">
                        <small>ID Transaksi</small>  
                        <input type="text" class="form-control" name="nama" value='{{$p->id_transaksi }}'>
                    </div>
                    <div class="form-group mt-2">
                        <small>Kode Barang</small>
                        <input type="text" class="form-control" name="kode" value='{{$p->kd_barang }}'>
                    </div>
                    <div class="form-group mt-2">
                        <small>Jumlah Beli</small>  
                        <input type="text" class="form-control" name="jumlah_beli" value='{{$p->jumlah_beli }}'>
                    </div>
                        
                    <!--Button-->
                    <div class="row mt-4">
                    <div class="col d-flex justify-content-center">
                        <button onclick="alert('Data Berhasil Diubah!!') "type="submit" class="btn btn-block btn-primary">SIMPAN</button>
                    </div>
                    </div>
            </form>
            @endforeach

        </div>
    </div>
  </div>
  <!--End your project-->

  <!-- MDB -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>