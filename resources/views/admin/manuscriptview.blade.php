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
            <th style="color: saddlebrown;">Requesting Manuscript Publication Fee</th>
          </tr>
          <tr>
            <th style="color: #520103;">Id</th>
            <th style="color: #520103;">Full Name</th> 
            <th style="color: #520103;">View</th>  
             
          </tr>
        </thead>
      <tbody>

          @foreach($details as $manuscriptdetails)

          <tr>
            <td>{{$manuscriptdetails->id}}</td>
            <td>{{$manuscriptdetails->name}}</td>
            <!-- <td>
              @if($manuscriptdetails->isapproved)
              <button class="btn btn-outline-success">Approved</button>
              @else
              <button class="btn btn-outline-info">Not Approved</button>
              @endif
            </td> -->
            <!-- <td>
              <a href="/markAsapproved/{{$manuscriptdetails->id}}" class="btn btn-outline-secondary">Mark As Approved   {{ Auth::user()->name }}</a>
            </td>  -->
            <td>
              <a href="/admin/manuscriptShow/{{$manuscriptdetails->id}}" class="btn btn-outline-danger">SHOW</a>
            </td>
            @if(Auth::user()->id=='2')
              <td>
          @if($manuscriptdetails->isapprovedean)
                        <button class="btn btn-outline-success"> dean Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
          </td>
              @endif

              @if(Auth::user()->id=='3')
              <td>
          @if($manuscriptdetails->isapprovedgrant)
                        <button class="btn btn-outline-success"> Grant Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
          </td>
              @endif

                
              @if(Auth::user()->id=='1')
              <td>
          @if($manuscriptdetails->isapprovedvc)
                        <button class="btn btn-outline-success">VC Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
          </td>
              @endif
            <!-- <td>
            @if(Auth::user()->id=='1')
              <button class="btn btn-dark">Not Approved</button>
              @endif
            
              
            </td> -->
          </tr>
          @endforeach
        </tbody>
      </table>
      @endsection