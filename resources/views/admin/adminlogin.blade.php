<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../assets/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <link rel="stylesheet" href="assets/css/style.css">
      <title>
         Admin Login
      </title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <!-- CSS Files -->
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="../assets/demo/demo.css" rel="stylesheet" />
   <body class="bg-admin">
      <div class="container">
         <div class="content mb-5 mt-5">
            <div class="row justify-content-center">
               <div class="col-md-8">
                  <section class="header-section">
                     <div class="container">
                        <div class="row mb-4">
                           <div class="col-md-12">
                              <div class="head">
                                 <img src="assets/img/logo.png" class="img-logo">
                                 <h4 class="logo-text">Sabaragamuwa University of Sri Lanka</h4>
                                 <h4 class="logo-text-4">Belihuloya Sri Lanka</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  @if(Session::has('flash_message_error'))
                  <div class="alert alert-primary alert-block">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     <strong>{!! Session('flash_message_error') !!}</strong>
                  </div>
                  @endif
                  @if(Session::has('flash_message_success'))
                  <div class="alert alert-primary alert-block">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     <strong>{!! session('flash_message_success') !!}</strong>
                  </div>
                  @endif
                  <div class="card mt-5 mb-5">
                     <div class="card-header">
                        <h4 class="card-title text-center"><b>Login Here</b></h4>
                     </div>
                     <div class="card-body">
                        <div class="row justify-content-center">
                           <div class="col-md-12">
                              <!--start login form-->
                              <form class="form-horizontal" method="post" action="{{ url('/admin') }}">
                                 {{csrf_field()}}
                                 <div class="form-group admin-login">
                                    <label for="name" class="col-md-4 control-label">Username</label>
                                    <div class="col-md-6">
                                       <input id="name" type="text" class="form-control" name="name">
                                    </div>
                                 </div>
                                 <div class="form-group admin-login">
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                       <input id="password" type="password" class="form-control" name="password">
                                    </div>
                                 </div>
                                 <div class="form-group admin-login">
                                    <div class="col-md-8 col-md-offset-4">
                                       <input type="submit"  value="Login" class="btn btn-info btn-login">
                                       <a href="/"><input type="button" value="Back" class="ml-2 btn btn-warning btn-back"></a>
                                    </div>
                                 </div>
                              </form>
                              <!--end login form-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   Core JS Files   -->
      <script src="../assets/js/core/jquery.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chart JS -->
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="../assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
      <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
      <script src="../assets/demo/demo.js"></script>
      <script src="../js/jquery.validate.js"></script> 
      <script src="../js/matrix.form_validation.js"></script>
      <script>
         $(document).ready(function() {
           // Javascript method's body can be found in assets/js/demos.js
           demo.initDashboardPageCharts();
         });
         
      </script>
   </body>
</html>