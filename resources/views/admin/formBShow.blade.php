<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
    <div class="row justify-content-center content-title">
      <div class="col-md-8">
        <div class="shadow p-3 mt-5 mb-5 bg-white rounded">
          <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="header" style="background: #520103;border-radius: 1px;">
              <br><h3 class="text-light text-monospace text-center">Manuscript Application {{ Auth::user()->name }} Approve or Reject</h3><br>
            </div>
            <table class="table">
              <tbody>
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
                  <th>Event</th>
                  <td>{{$formBdetails->event}}</td>
                </tr>
                <tr>
                  <th>Country</th>
                  <td>{{$formBdetails->country}}</td>
                </tr>
                <tr>
                  <th>Period</th>
                  <td>{{$formBdetails->period}}</td>
                </tr>
                <tr>
                  <th>Title</th>
                  <td>{{$formBdetails->title}}</td>
                </tr>
               
              </tbody>
            </table>
            <a href="/admin/manuscriptview" class="btn btn-dark">Cancel</a>
            <a href="#confirmModal" class="btn btn-success" data-toggle="modal"><i class="material-icons icon-save"></i> <span>Approve</span></a> 
            
          </div>
          </div>
        </div>
      </div>
      <div id="confirmModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">            
                <h4 class="modal-title">Approve Applicant</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">          
              <p>Are you sure you want to approve these?</p>
              <p class="text-danger"><small>This action cannot be undone.</small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-dark" data-dismiss="modal" value="Cancel">
              <th>
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
            </div>
          </form>
        </div>
      </div>
    </div>
    
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>