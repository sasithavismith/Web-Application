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
            <th></th> 
          </tr>
        </thead>
      <tbody>

      @foreach($approved as $manuscriptdetails)

          <tr>
            <td>{{$manuscriptdetails->id}}</td>
            <td>{{$manuscriptdetails->name}}</td>
            <!-- <td>
              @if($manuscriptdetails->isapproved)
              <button class="btn btn-outline-success">Approved</button>
              @else
              <button class="btn btn-outline-info">Not Approved</button>
              @endif
            </td>
            <td>
              <a href="/markAsapproved/{{$manuscriptdetails->id}}" class="btn btn-outline-secondary">Mark As Approved</a>
            </td> -->
            <td>
              <a href="/admin/manuscriptShow/{{$manuscriptdetails->id}}" class="btn btn-outline-danger">SHOW</a>
            </td>
            <td>
              <button class="btn btn-primary">Approved</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endsection

<!-- 
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                <h5>Application 3 Details</h5>
              </div>
              <div class="widget-content nopadding">
                <table class="table table-bordered table-striped  table-dark">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Full Name</th>
                      <th>Designation</th>
                      <th>Department</th>
                      <th>Faculty</th>
                      <th>Title</th>
                      <th>First Author</th>
                      <th>Corresponding Author</th>
                      <th>Other Author</th>
                      <th>Journal</th>
                      <th>Volume and Issue Number</th>
                      <th>Date of Acceptance</th>
                      <th>Issn</th>
                      <th>Publisher</th>
                      <th>Publication Fee</th>
                      <th>file copy</th>
                      <th>file Evidence</th>
                      <th>file Letter</th>
                      <th>file invoice</th>
                      <th>Date</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($approved as $manuscriptdetails)
                   <tr>
                       
                       <td>{{$manuscriptdetails->id}}</td>
                       <td>{{$manuscriptdetails->name}}</td>
                       <td>{{$manuscriptdetails->designation}}</td>
                       <td>{{$manuscriptdetails->department}}</td>
                       <td>{{$manuscriptdetails->faculty}}</td>
                       <td>{{$manuscriptdetails->title}}</td>
                       <td>{{$manuscriptdetails->first_author}}</td>
                       <td>{{$manuscriptdetails->corresponding_author}}</td>
                       <td>{{$manuscriptdetails->other_author}}</td>
                       <td>{{$manuscriptdetails->journal}}</td>
                       <td>{{$manuscriptdetails->volume_and_issue_number}}</td>
                       <td>{{$manuscriptdetails->date_of_acceptance}}</td>
                       <td>{{$manuscriptdetails->issn}}</td>
                       <td>{{$manuscriptdetails->publisher}}</td>
                       <td>{{$manuscriptdetails->publication_fee}}</td>
                       <td><a href="{{asset('uploads/file copy/'.$manuscriptdetails->file_copy)}}">Downloard file copy</td>
                       <td><a href="{{asset('uploads/file evidencce/'.$manuscriptdetails->file_evidence)}}">Downloard file evidence</td>
                       <td><a href="{{asset('uploads/file letter/'.$manuscriptdetails->file_letter)}}">Downloard file letter</td>
                       <td><a href="{{asset('uploads/file invoice/'.$manuscriptdetails->file_invoice)}}">Downloard file invoice</td>
                       <td>{{$manuscriptdetails->date1}}</td>
                    
                     </tr>
                    @endforeach 
                  </tbody>
                </table> 
              
              
            
</body>
</html>  -->