@extends('layouts.adminlayouts.admin_design')

@section('content')
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center mb-5">
      <div class="col-md-6">
        <h3 class="mb-5" style="color: #520103;"></h3>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th style="color: saddlebrown;">Form B</th>
          </tr>
          <tr>
            <th style="color: #520103;">Id</th>
            <th style="color: #520103;">Full Name</th> 
            <th style="color: #520103;">Approved</th> 
            <th style="color: #520103;">Action</th> 
          </tr>
        </thead>
      <tbody>

        @foreach($details as $formBdetails)

          <tr>
            <td>{{$formBdetails->id}}</td>
            <td>{{$formBdetails->full_name}}</td>
           <!--  <td>
              @if($formBdetails->isapproved)
              <button class="btn btn-outline-success">Approved</button>
              @else
              <button class="btn btn-outline-info">Not Approved</button>
              @endif
            </td> -->
            <td>
              <a href="/markAsapprovedformB/{{$formBdetails->id}}" class="btn btn-outline-secondary">Mark As Approved</a>
            </td>
            <td>
              <a href="/admin/formBShow/{{$formBdetails->id}}" class="btn btn-outline-danger">SHOW</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
       @endsection