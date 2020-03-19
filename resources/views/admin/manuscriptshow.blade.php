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
                <h5>Requesting Manuscript Publication Fee</h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-striped" style="color: #520103;">
                  <thead>
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
                    <tr>
                      <th><a href="/markAsapproved/{{$manuscriptdetails->id}}" class="btn btn-outline-secondary">Mark As Approved</th>
                      <td> 
                        @if($manuscriptdetails->isapproved)
                        <button class="btn btn-outline-success">Approved</button>
                        @else
                        <button class="btn btn-outline-info">Not Approved</button>
                        @endif
                      </td>
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