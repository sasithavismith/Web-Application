@extends('layouts.adminlayouts.admin_design')

@section('content')
 

<br><br><br><br><br><br>
<div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lg"> <a href="/admin/dashboard"> <i class="icon-dashboard"></i> 
       {{ Auth::user()->name }}'s Dashboard </a> </li>
        <li class="bg_lb span3"> <a href="{{url('/admin/formBview')}}"> <i class="icon-signal"></i> Pending Request</a> </li>
        <li class="bg_lo"> <a href="{{url('/approve/formBApprove')}}"> <i class="icon-th"></i>Achieved Request</a> </li>
        <li class="bg_ls"> <a href="/admin/settings"> <i class="icon-tint"></i> Settings</a> </li>
        <li class="bg_lr"> <a href="/admin/mail"> <i class="icon-info-sign"></i>Mail</a> </li>

      </ul>
    </div>
    
       <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Details & Conditions</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><button class="btn btn-bg_lh text-light" data-toggle="modal" data-target="#basicmodal">Department Head</button></li>
                <li class="bg_lh"><button class="btn btn-bg_lh text-light" data-toggle="modal" data-target="#basicmodal2">Dean of the Faculty</button></li>
                <li class="bg_lh"><button class="btn btn-bg_lh text-light" data-toggle="modal" data-target="#basicmodal3">Vice Chancellor</button></li>
                <li class="bg_lh"><button class="btn btn-bg_lh text-light" data-toggle="modal" data-target="#basicmodal4">Grant Comiision</button></li>
              </ul>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" id="basicmodal">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Department Head's Details</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis harum voluptates quas. Neque, perspiciatis dignissimos similique ullam molestias laborum corporis ipsa esse ad magni laudantium blanditiis facilis voluptatibus dicta?</p>
          
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" id="basicmodal2">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Dean's Details</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis harum voluptates quas. Neque, perspiciatis dignissimos similique ullam molestias laborum corporis ipsa esse ad magni laudantium blanditiis facilis voluptatibus dicta?</p>
          
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" id="basicmodal3">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Vice Chancellor's Details</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis harum voluptates quas. Neque, perspiciatis dignissimos similique ullam molestias laborum corporis ipsa esse ad magni laudantium blanditiis facilis voluptatibus dicta?</p>
          
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" id="basicmodal4">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Grant Commision's Details</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis harum voluptates quas. Neque, perspiciatis dignissimos similique ullam molestias laborum corporis ipsa esse ad magni laudantium blanditiis facilis voluptatibus dicta?</p>
          
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
  


