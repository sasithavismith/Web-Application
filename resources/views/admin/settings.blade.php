@extends('layouts.adminlayouts.admin_design')

@section('content')

<div class="content mt-5 mb-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form class="form-horizontal" method="post" action="{{ url('/admin/update-pwd') }}"name="basic_validate" id="basic_validate" novalidate="novalidate">

                 <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" required autofocus>

                            
                            </div>
                        </div>
              <div class="form-group">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="new_password" required>

                            
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="confirm_password"required >

                            
                            </div>
                        </div>
             
             <div class="form-actions">
                  <input type="submit" value="Update password" class="btn btn-success">
                </div>
            </form>
              </div>
            </div>
          </div>
    
          </div>
        </div>
      </div>

      @endsection