@extends('layouts.adminlayouts.admin_design')
@extends('layouts.adminlayouts.admin_sidebar')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
                <h3>Requesting Manuscript Publication Fee</h3>
              </div>
              
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Full Name</th> 
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($details as $manuscriptdetails)
                   <tr>
                       <td>{{$manuscriptdetails->id}}</td>
                       <td>{{$manuscriptdetails->name}}</td>
                       
                           <td><a href="/admin/manuscriptShow/{{$manuscriptdetails->id}}" class="btn btn-info">SHOW</a></td>
                           <td><a href="" class="btn btn-success">APPROVE</a></td>
                           <td><a href="" class="btn btn-danger">NOT APPROVE</a></td>
                       
                       </tr>
    @endforeach
                  </tbody>
                </table> 
               

                
              
  
@endsection