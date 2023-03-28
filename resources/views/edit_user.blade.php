<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Edit User - Toko Hafiz Syahputra</title>
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
                <li class="nav-item"><a class="nav-link active fw-bold text-primary" aria-current="page" href="http://localhost:8000/user">Data Pengguna</a></li>
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
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4">

            @foreach($user as $du)
            <form method="POST" action="/user/update" class="rounded shadow-0 p-5">
                {{csrf_field()}}
                    <input type='hidden' name='id' value='{{ $du->id_user }}'>
                <div class="text-center">
                    <b>Edit Data Pengguna</b>
                </div>

                <!--Input text-->
                <div class="form-group mt-2">
                    <small>Nama Pengguna</small>
                    <input type="text" class="form-control" name="nama" value='{{$du->Nama_user }}'>
                </div>
                <div class="form-group mt-2">
                    <small>ID User</small>
                    <input type="text" class="form-control" name="username" value='{{$du->username }}'>
                </div>
                <div class="form-group mt-2">
                    <small>Password</small>
                    <input type="password" class="form-control" name="password" value='{{$du->password }}'>
                    <small id="passwordHelpInline" class="text-muted"> Must be 3 - 11 characters long.</small>
                </div>
                    
			    <!--Button-->
                <div class="row mt-4">
                    <div class="col d-flex justify-content-center">
                        <button onclick="alert('Data Berhasil Diubah!')" type="submit" class="btn btn-block btn-primary">SIMPAN</button>
                    </div>
                </div>
            </form>
            @endforeach

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