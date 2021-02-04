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
        @foreach($details as $formAdetails)

          <tr class="text-center">
            <td>{{$formAdetails->id}}</td>
            <td>{{$formAdetails->Full_name}}</td>
            <td>{{$formAdetails->email}}</td>
            <td>
              <a href="/admin/formAShow/{{$formAdetails->id}}" class="show" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="show">&#xe417;</i></a>
               </td>
             </tr> 
             @endforeach
          </tbody>
      </table>
<div class="clearfix">
          <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
          <ul class="pagination">
              <li class="page-item"><a href="/admin/manuscriptview" class="page-link">1</a></li>
              <li class="page-item"><a href="/admin/manuscriptview" class="page-link">2</a></li>
              <li class="page-item active"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link">4</a></li>
              <li class="page-item"><a href="#" class="page-link">5</a></li>
              <li class="page-item"><a href="#" class="page-link">Next</a></li>
          </ul>
      </div>
  </div>
</div>


@endsection 