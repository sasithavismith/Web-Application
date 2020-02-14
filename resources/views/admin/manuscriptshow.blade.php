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
    
                  </tbody>
                </table> 
              
              
            
</body>
</html> 