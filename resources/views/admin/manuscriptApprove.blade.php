@extends('layouts.adminlayouts.admin_design')
@extends('layouts.adminlayouts.view')

@section('content')
<div class="container">
  <div class="table-wrapper">
      <div class="table-title">
          <div class="row">
              <div class="col-sm-6">
      <h2>Manage <b>Applicant</b></h2>
    </div>
          </div>
      </div>
      <table class="table table-striped table-hover">
          <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
          </thead>
          <tbody>
            @foreach($approved as $manuscriptdetails)

             <tr class="text-center">
               <td>{{$manuscriptdetails->id}}</td>
               <td>{{$manuscriptdetails->name}}</td>
               <td>{{$manuscriptdetails->email}}</td>
               <td>
              <a href="/admin/manuscriptShow/{{$manuscriptdetails->id}}" class="btn btn-success text-light"><i class="material-icons icon-checkmark"></i><span>{{ Auth::user()->name }}  Approved</span></a> 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endsection