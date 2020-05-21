<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="jumbotron">
    <div class="container">
      <div class="content mb-5">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card">
              <div class="card-header" style="color: #520103;"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Form B</h5>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped" style="color: #520103;">
              <thead>
                <tr>
                  <th>Id</th>
                  <td>{{$formBdetails->id}}</td>
                </tr>
                <tr>
                  <th>Full Name</th>
                  <td>{{$formBdetails->full_name}}</td>
                </tr>
                <tr>
                  <th>Designation</th>
                  <td>{{$formBdetails->designation}}</td>
                </tr>
                <tr>
                  <th>Department</th>
                  <td>{{$formBdetails->department}}</td>
                </tr>
                <tr>
                  <th>Faculty</th>
                  <td>{{$formBdetails->faculty}}</td>
                </tr>
                <tr>
                  <th>Tel</th>
                  <td>{{$formBdetails->tel}}</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>{{$formBdetails->email}}</td>
                </tr>
                <tr>
                      <th>
                    @if(Auth::user()->id=='1')
              <a href="/markAsapprovedformB/{{$formBdetails->id}}" class="btn btn-primary">Click to VC Approved</a>
          <td>
          @if($formBdetails->isapprovedvc)
                        <button class="btn btn-outline-success"> vc Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
          </td>
              @endif
            
            
            @if(Auth::user()->id=='2')
            <a href="/markAsapprovedformB/{{$formBdetails->id}}" class="btn btn-primary"> click to Dean Approved</a>
            <td>
          @if($formBdetails->isapprovedean)
                        <button class="btn btn-outline-success"> dean Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
          </td>
              @endif
              @if(Auth::user()->id=='3')
              <a href="/markAsapprovedformB/{{$formBdetails->id}}" class="btn btn-primary">Click to Grant Approved</a>
              <td>
          @if($formBdetails->isapprovedgrant)
                        <button class="btn btn-outline-success"> Grant Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
          </td>
              @endif
            
            
            @if(Auth::user()->id=='4')
            <a href="/markAsapprovedformB/{{$formBdetails->id}}" class="btn btn-primary"> Click to Head of the department Approved</a>
            <td>
          @if($formBdetails->isapprovedhead)
                        <button class="btn btn-outline-success"> Head Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
          </td>
              
              @endif

                      </th>
                    </tr> 
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html> 