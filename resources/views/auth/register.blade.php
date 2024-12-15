<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi - RINAP PINDAD</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('asset/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('asset/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('asset/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
    </style>

</head>

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3"><b>Register</b></p>
              
            </div>
  
            <div class="divider d-flex align-items-center my-4">
            </div>
            
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="name" id="form3Example3" class="form-control form-control-lg @error('email') is-invalid @enderror"
                  placeholder="Masukan username" value="{{ old('name') }}" />
                <label class="form-label" for="form3Example3">Name</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form3Example3" class="form-control form-control-lg @error('email') is-invalid @enderror"
                placeholder="Masukan alamat email" value="{{ old('email') }}" />
              <label class="form-label" for="form3Example3">Email address</label>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name="password" id="form3Example4" class="form-control form-control-lg @error('password') is-invalid @enderror"
                placeholder="Masukan password" />
              <label class="form-label" for="form3Example4">Password</label>
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>

             <!-- Password input -->
             <div class="form-outline mb-3">
                <input type="password" name="password_confirmation" id="form3Example4" class="form-control form-control-lg"
                  placeholder="Komfirmasi password" required autocomplete="new-password" />
                <label class="form-label" for="form3Example4">Confirm Passoword</label>
              </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
            
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">have an account? <a href="{{route('login')}}"
                  class="link-danger">Login</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        <span>Copyright &copy; HILFI HAZMAN WAFI {{date('Y')}}</span>
      </div>
      <!-- Copyright -->
  
      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>
 <!-- Bootstrap core JavaScript-->
 <script src="{{asset('asset/admin/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{asset('asset/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{asset('asset/admin/js/sb-admin-2.min.js')}}"></script>

 <!-- Page level plugins -->
 <script src="{{asset('asset/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('asset/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('asset/admin/js/demo/datatables-demo.js')}}"></script>

</body>

</html>