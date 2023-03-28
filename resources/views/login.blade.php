<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login - Toko Hafiz Syahputra</title>
  <!-- MDB icon -->
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/8112/8112548.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('mdb5/css/mdb.min.css') }}"/>
</head>

<body>
  <!-- Start your project here-->
  <div class="container my-5 p-5">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-md-8">
          <form method="POST" action="/session/buat" class="p-5">
            {{csrf_field()}}
            <div class="text-center">
              <b>LOGIN TOKO KOMPUTER</b>
            </div>

                <!--Kolom Email-->
                <div class="form-group mt-2">
                  <small>Username</small>  
                  <input type="text" class="form-control" name="username">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!--Kolom Password-->
                <div class="form-group mt-2">
                  <small>Password</small>
                  <input type="password" class="form-control" name="password">
                  @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror      
                </div>
                    
			          <!--Button-->
                <div class="row mt-4">
                  <div class="col d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary">LOGIN</button>
                  </div>
                </div>

          </form>
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