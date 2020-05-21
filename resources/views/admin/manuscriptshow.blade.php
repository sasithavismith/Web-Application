<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                  <th>Id</th>
                  <td>{{$manuscriptdetails->id}}</td>
                </tr>
                <tr>
                  <th>Full Name</th>
                  <td>{{$manuscriptdetails->name}}</td>
                </tr>
                <tr>
                  <th>Designation</th>
                  <td>{{$manuscriptdetails->designation}}</td>
                </tr>
                <tr>
                  <th>Department</th>
                  <td>{{$manuscriptdetails->department}}</td>
                </tr>
                <tr>
                  <th>Faculty</th>
                  <td>{{$manuscriptdetails->faculty}}</td>
                </tr>
                <tr>
                  <th>Title</th>
                  <td>{{$manuscriptdetails->title}}</td>
                </tr>
                <tr>
                  <th>First Author</th>
                  <td>{{$manuscriptdetails->first_author}}</td>
                </tr>
                <tr>
                  <th>Corresponding Author</th>
                  <td>{{$manuscriptdetails->corresponding_author}}</td>
                </tr>
                <tr>
                  <th>Other Author</th>
                  <td>{{$manuscriptdetails->other_author}}</td>
                </tr>
                <tr>
                  <th>Journal</th>
                  <td>{{$manuscriptdetails->journal}}</td>
                </tr>
                <tr>
                  <th>Volume and Issue Number</th>
                  <td>{{$manuscriptdetails->volume_and_issue_number}}</td>
                </tr>
                <tr>
                  <th>Date of Acceptance</th>
                  <td>{{$manuscriptdetails->date_of_acceptance}}</td>
                </tr>
                <tr>
                  <th>Issn</th>
                  <td>{{$manuscriptdetails->issn}}</td>
                </tr>
                <tr>
                  <th>Publisher</th>
                  <td>{{$manuscriptdetails->publisher}}</td>
                </tr>
                <tr>
                  <th>Publication Fee</th>
                  <td>{{$manuscriptdetails->publication_fee}}</td>
                </tr>
                <tr>
                  <th>file copy</th>
                  <td><a href="{{asset('uploads/file copy/'.$manuscriptdetails->file_copy)}}">Downloard file copy</td>
                </tr>
                <tr>
                  <th>file Evidence</th>
                  <td><a href="{{asset('uploads/file evidencce/'.$manuscriptdetails->file_evidence)}}">Downloard file evidence</td>
                </tr>
                <tr>
                  <th>file Letter</th>
                  <td><a href="{{asset('uploads/file letter/'.$manuscriptdetails->file_letter)}}">Downloard file letter</td>
                </tr>
                <tr>
                  <th>file invoice</th>
                  <td><a href="{{asset('uploads/file invoice/'.$manuscriptdetails->file_invoice)}}">Downloard file invoice</td>
                  </tr>
                <tr>
                  <th>Date</th>
                  <td>{{$manuscriptdetails->date1}}</td>
                </tr>
              </tbody>
            </table>
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <a href="#confirmModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Approve</span></a> 
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
              <p class="text-warning"><small>This action cannot be undone.</small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <tr>
                <th>
              @if(Auth::user()->id=='1')
        <a href="/markAsapproved/{{$manuscriptdetails->id}}" class="btn btn-primary">Click to VC Approved</a>
    <td>
    @if($manuscriptdetails->isapprovedvc)
                  <button class="btn btn-outline-success"> vc Approved</button>
                  @else
                  <button class="btn btn-outline-info">Not Approved</button>
                  @endif
    </td>
        @endif
      
      
      @if(Auth::user()->id=='2')
      <a href="/markAsapproved/{{$manuscriptdetails->id}}" class="btn btn-primary"> click to Dean Approved</a>
      <td>
    @if($manuscriptdetails->isapprovedean)
                  <button class="btn btn-outline-success"> dean Approved</button>
                  @else
                  <button class="btn btn-outline-info">Not Approved</button>
                  @endif
    </td>
        @endif
        @if(Auth::user()->id=='3')
        <a href="/markAsapproved/{{$manuscriptdetails->id}}" class="btn btn-primary">Click to Grant Approved</a>
        <td>
    @if($manuscriptdetails->isapprovedgrant)
                  <button class="btn btn-outline-success"> Grant Approved</button>
                  @else
                  <button class="btn btn-outline-info">Not Approved</button>
                  @endif
    </td>
        @endif
      
      
      @if(Auth::user()->id=='4')
      <a href="/markAsapproved/{{$manuscriptdetails->id}}" class="btn btn-primary"> Click to Head of the department Approved</a>
      <td>
    @if($manuscriptdetails->isapprovedhead)
                  <button class="btn btn-outline-success"> Head Approved</button>
                  @else
                  <button class="btn btn-outline-info">Not Approved</button>
                  @endif
    </td>
        
        @endif

                </th>
              </tr> 
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