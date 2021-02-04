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

         @foreach($approved as $formAdetails)

          <tr class="text-center">
            <td>{{$formAdetails->id}}</td>
            <td>{{$formAdetails->Full_name}}</td>
            <td>{{$formAdetails->email}}</td>
            <td>
              <a href="/admin/formAShow/{{$formAdetails->id}}" class="btn btn-success text-light"><i class="material-icons icon-checkmark"></i><span>{{ Auth::user()->name }}  Approved</span></a> 
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection