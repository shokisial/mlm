<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
   Register
  </title>
  <!-- Favicon -->
  <link href="{{asset('')}}dashboard_assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('')}}dashboard_assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="{{asset('')}}dashboard_assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('')}}dashboard_assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('')}}dashboard_assets/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="{{asset('')}}dashboard_index.html">
                  <img src="{{asset('')}}dashboard_assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>

            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
           
           
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{route('user.login')}}">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Create Your Account!</h1>
                </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              
              
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              
              <form role="form" action="{{ route('user.store') }}" method="post">
              @csrf
              <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>                    <input class="form-control" placeholder="Sponsor Code" name="sponsor_id" value="{{old('sponsor_id')}}" id="sponsor_id" type="text">
                    <span id="spon_msg"></span>
                    @error('sponsor_id')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror
                  </div>

              <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="First Name" name="first_name" value="{{old('first_name')}}" type="text" require>
                    @error('first_name')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror
                  </div>

                  <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Last Name" name="last_name" value="{{old('last_name')}}" type="text">
                    @error('last_name')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror
                  </div>

                  <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="User Name" name="username" type="text">
                    @error('username')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror
                  </div>

                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" type="email">
                  
                  @error('email')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Mobile No" name="mobile" type="text">
                    @error('mobile')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror

                  </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password">
                  
                  @error('password')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password">
                  </div>
                  @error('confirm_password')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror
                </div>

                
                <div class="text-center">
                  <button type="submit" id="reg_btn" class="btn btn-primary mt-4">Create account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>
  <!--   Core   -->
  <script src="{{asset('')}}dashboard_assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('')}}dashboard_assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="{{asset('')}}dashboard_assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>

<script>
$(document).ready(function() {
$('#sponsor_id').on('keyup', function() {
  $("#spon_msg").text('Searching...');
  var sponsor_id = this.value;
  $.ajax({
    url:"{{route('search_sponsorid')}}",
    type:"POST",
    data:{
      sponsor_id : sponsor_id,
      _token: '{{csrf_token()}}'
    },
    success:function (result){
      if(result==0){
        $("#spon_msg").text('Not Valid');
        $("#spon_msg").css('color', 'Red');
        $("#reg_btn").hide();
      }else{
        $("#spon_msg").text(result); 
        $("#spon_msg").css('color', 'green');
        $("#reg_btn").show();
      }
    }
  });
});
});
</script>

</body>

</html>