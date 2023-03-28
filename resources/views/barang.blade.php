<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Data Barang - Toko Hafiz Syahputra</title>
  <!-- WEB icon -->
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/8112/8112548.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('mdb5/css/mdb.min.css') }}"/>

  <!--NAVBAR-->
  <nav class="navbar sticky-top navbar-expand-lg bg-white shadow-0">
    <div class="container">
      <b><a class="navbar-brand" href="#!">HAFIZ SYAHPUTRA / 2110031805031</a></b>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active fw-bold text-primary" aria-current="page" href="#!">Data Barang</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/user">Data Pengguna</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/transaksi">Data Penjualan</a></li>
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
  <div class="container mt-3">
    <div class="row" style="height: 100vh">
      <div class="text-center">
        

        <div class="card text-center mt-3 shadow-1-strong">
          <div class="card-header">
          <h3><b>DATA BARANG</b></h3>
            <ul class="nav nav-pills card-header-tabs">
              <li class="nav-item ms-2 mb-4">
                <a href="http://localhost:8000/tambah_barang"><button type="button" class="btn btn-primary"> Tambah data </button></a>
              </li>
            </ul>
          </div>
            <div class="card-body">
            <!--TABLE DISINI-->
              <table class="table table-borderless align-middle mb-0 bg-white">
                <thead class="bg-dark text-light">
                  <tr>
                    <th>NO</th>
                    <th>GAMBAR</th>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>STOK BARANG</th>
                    <th>HARGA</th>
                    {{-- <th>QUANTITY</th> --}}
                    <th>ACTIONS</th>
                  </tr>
                </thead>

                @foreach($data_barang as $db)
                <tbody>
                  <tr>
                    <th scope="row">{{ $loop -> iteration}}</th>
                    <td><img src="{{url('gambar').'/'.$db->gambar}}" width="60" height="60"></td>
                    <td>{{ $db->kd_barang}}</td>
                    <td>{{ $db->nama_barang}}</td>
                    <td>{{ $db->stok}}</td>
                    <td class="text-success">Rp{{ $db->harga}}</td>
                    {{-- <td><span class="text-success"><i class="fas fa-caret-up me-1" ></i><span>7.6%</span></span></td> --}}
                    <td> 
                      <a href="/barang/edit/ {{ $db->kd_barang }}" class="btn btn-link btn-sm text-primary">EDIT</a>
                      <a href="/transaksi/tambah/{{ $db->kd_barang }}" class="btn btn-link btn-sm text-success">BELI</a>
                      <a href="/barang/hapus/ {{ $db->kd_barang }}" onclick="return confirm('Anda Yakin Menghapus Data Ini?')" class="btn btn-link btn-sm text-danger">HAPUS</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach

              </table>
            </div>
          </div>


      </div>
    </div>
  </div>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>