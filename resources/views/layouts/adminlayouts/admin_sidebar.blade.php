<div class="wrapper">
    <div class="sidebar">
     
     <div class="logo"  style="background-color: #520103;">
       <a class="simple-text logo-mini">
         
       </a>
       <a  class="simple-text logo-normal">
       {{ Auth::user()->name }}
       </a>
     </div>
     <div class="sidebar-wrapper" id="sidebar-wrapper"  style="background-color: #520103;">
       <ul class="nav">
         <li>
           <a href="/admin/dashboard">
             <i class="now-ui-icons design_app"></i>
             <p>Home</p>
           </a>
         </li>

         

         <li class="dropdown">
          <a class="dropdown-toggle" id="DropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_map-big"></i>
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
                 <i class="now-ui-icons location_world"></i>
                <p>Achieved Request </p>
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
                   <span class="d-lg-none d-md-block">Password Change</span>
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
        <!--End Navbar -->
      
      