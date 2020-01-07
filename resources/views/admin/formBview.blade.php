<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Web application</title>
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
                      <th>Tel</th>
                      <th>Email</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($details as $formBdetails)
                   <tr>
                       <td>{{$formBdetails->id}}</td>
                       <td>{{$formBdetails->full_name}}</td>
                       <td>{{$formBdetails->designation}}</td>
                       <td>{{$formBdetails->department}}</td>
                       <td>{{$formBdetails->faculty}}</td>
                       <td>{{$formBdetails->tel}}</td>
                       <td>{{$formBdetails->email}}</td>
                     </tr>
    @endforeach
                  </tbody>
                </table> 
              
              
            
</body>
</html> 