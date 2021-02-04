<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Research Grant Sabaragamuwa University of Sri Lanka
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


</head>
<body class="" >
  <div class="wrapper">
    <div class="sidebar">
     
     <div class="logo"  style="background-color: #520103;">
       <a class="simple-text logo-mini">
         
       </a>
       <a  class="simple-text logo-normal">
       {{ Auth::user()->name }}
       </a>
     </div>
     <div class="sidebar-wrapper" id="sidebar-wrapper" style="background-color: #520103;">
       <ul class="nav" >
         <li>
           <a href="/admin/dashboard">
             <i class="now-ui-icons design_app"></i>
             <p>Home</p>
           </a>
         </li>
         <li class="dropdown">
               <a class="dropdown-toggle" id="DropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="now-ui-icons location_world"></i>
                <p>Pending Request</p>
                 <p>
                   <span class="d-lg-none d-md-block">Forms</span>
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="DropdownMenuLink">
                <a class="dropdown-item" href="{{url('/admin/formAview')}}">Form A</a>
                <a class="dropdown-item" href="{{url('/admin/formBview')}}">Form B</a>
                <a class="dropdown-item" href="{{url('/admin/manuscriptview')}}">Manuscript Publication feer Form</a>
                <a class="dropdown-item" href="">Research Allowance Form</a>
                <a class="dropdown-item" href="#">Research Grant Form</a>
              </div>
             </li>

              <li class="dropdown">
               <a class="dropdown-toggle" id="DropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="now-ui-icons location_map-big"></i>
             <p>Achieved Request</p>
                 <p>
                   <span class="d-lg-none d-md-block">Forms</span>
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="DropdownMenuLink">
                 <a class="dropdown-item" href="{{url('/approve/formAApprove')}}">Form A</a>
                 <a class="dropdown-item" href="{{url('/approve/formBApprove')}}">Form B</a>
                 <a class="dropdown-item" href="{{url('/approve/manuscriptApprove')}}">Manuscript Publication feer Form</a>
                 <a class="dropdown-item" href="">Research Allowance Form</a>
                 <a class="dropdown-item" href="#">Research Grant Form</a>
               </div>
             </li>
        
         <li class="dropdown">
               <a class="dropdown-toggle" id="DropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="now-ui-icons design_bullet-list-67"></i>
             <p>Settings</p>
                 <p>
                   <span class="d-lg-none d-md-block">Forms</span>
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="DropdownMenuLink">
                 <a class="dropdown-item" href="/admin/settings">Modify User</a>
               </div>
             </li>
             <li class="dropdown">
               <a class="dropdown-toggle" id="DropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="now-ui-icons design_bullet-list-67"></i>
             <p>Mail</p>
                 <p>
                   <span class="d-lg-none d-md-block">Forms</span>
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="DropdownMenuLink">
                 <a class="dropdown-item" href="/admin/mail">Sending the Mail</a>
               </div>
             </li>
         <li>
           <a href="{{ url('/logout') }}">
             <i class="now-ui-icons users_single-02"></i>
             <p>Logout</p>
           </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel mb-5" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container" style="background-color: #520103;">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"> <img src="../assets/img/logo.png" class="img-logo" style="height: 69px;padding: 5px 10px;margin: 2px 20px 0 0;float: left;vertical-align: middle;">
              <h4 class="logo-text" style="padding: 5px 10px;margin: 7px 0;font-size: 13px;color: #fff;">Sabaragamuwa University of Sri Lanka</h4>
              <h4 class="logo-text-4" style="padding-left: 100px;font-size: 12px;color: #fff;margin: 0;">Belihuloya Sri Lanka</h4></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            
          </button>
          </div>
      </nav>
  
    <div class="container mt-5">
    
      <div class="content mb-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-sm-8">
          <br><br><br>
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
            <div class="container mt-5">
          <div class="card mt-5">
           
              <div class="card-header mt-4">
                <h4 class="card-title text-center"><b>Type here</b></h4>
              </div>
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-12"> 
    
              <form class="form-horizontal"  method="post" action="{{ url('/email') }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                {{csrf_field()}}
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
               
                  <label for="name" class="control-label">Subject</label>
                 
                    <input id="subject" type="subject" name="subject" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
               
                  <label for="name" class="control-label">To</label>
                 
                    <input type="email" name="email" class="form-control" >
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                <div class="form-group">
                  <label for="name" class="control-label">Message</label>
                  <div class="">
                  <a  class="simple-text logo-normal">
                I am the {{ Auth::user()->name }}<br>
    
                </a>
                  <textarea class="form-control" name="message" type="text" rows="5" cols="30">
                  My Email is {{Auth::user()->email}}
                  </textarea>
       
                  </div>
                </div>
                </div>
                </div>
                <div class="form-actions">
                  <input type="submit" value="Send Email" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>


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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });
    
  </script>

<script src="../js/jquery.min.js"></script> 
   
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/jquery.validate.js"></script> 
 
<script src="../js/matrix.form_validation.js"></script>


 

</body>
</html>
