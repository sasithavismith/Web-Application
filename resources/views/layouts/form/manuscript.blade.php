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
      <div class="application-form">
        <div class="container">
          <section class="header-section">
             <div class="container">
                <div class="row">
                   <div class="col-md-12">
                      <div class="head">
                         <img src="assets/img/logo.png" class="img-logo">
                         <h4 class="logo-text">Sabaragamuwa University of Sri Lanka</h4>
                         <h4 class="logo-text-4 text-monospace">Belihuloya Sri Lanka</h4>
                      </div>
                   </div>
                </div>
             </div>
          </section>
          <div class="row justify-content-center content-title">
             <div class="col-md-10">
                <div class="shadow p-3 mt-5 mb-5 bg-white rounded">
                   <div class="shadow-sm p-3 mb-5 bg-white rounded shadow-head">
                      <h4 class="text-monospace font-weight-bold">Declartion form for confirming attendance at the Overseas Conference\ Symposium\ Workshop</h4>
                   </div>
                   @if ($message = Session::get('submit_success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                   </div>
                   <br>
                   @endif
                   <form action="{{url('manuscript')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                         <label for="formGroupExampleInput">1. Name</label>
                         <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                         <span class="text-danger">{{ $errors->first('name') }}</span>
                      </div>
                      <div class="form-group">
                         <label for="designation">2. Designation(Same designation of the formB)</label>
                         <input type="text" name="designation" class="form-control" id="designation" value="{{old('designation')}}">
                         <span class="text-danger">{{ $errors->first('designation') }}</span>
                      </div>
                      <div class="form group">
                  <label>3. Email:</label>
                  <input type="email" name="email" class="form-control"  value="{{old('email')}}">
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  </div> 
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="department">4. i) Department Attached</label>
                               <input type="text" name="department" class="form-control" id="department" value="{{old('Department')}}">
                               <span class="text-danger">{{ $errors->first('department') }}</span>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="faculty">&nbsp;&nbsp;&nbsp;ii) Faculty</label>
                               <input type="text" name="faculty" class="form-control" id="faculty" value="{{old('faculty')}}">
                               <span class="text-danger">{{ $errors->first('faculty') }}</span>
                            </div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label for="description">5. Description of the manuscript</label><br>
                         <label for="title">&nbsp;&nbsp;&nbsp;i) Title of the manuscript</label> 
                         <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                         <span class="text-danger">{{ $errors->first('title') }}</span>
                      </div>
                      <div class="form-group">
                         <label for="first author">&nbsp;&nbsp;&nbsp;ii) First author And affiliations</label>
                         <input type="text" name="first_author" class="form-control" id="forst_author" value="{{old('first_author')}}">
                         <span class="text-danger">{{ $errors->first('first_author') }}</span>
                      </div>
                      <div class="form-group">
                         <label for="corresponding author">&nbsp;&nbsp;&nbsp;iii) corresponding author and affiliation</label>
                         <input type="text" name="corresponding_author" class="form-control" id="corresponding_author" value="{{old('corresponding_author')}}">
                         <span class="text-danger">{{ $errors->first('corresponding_author') }}</span>
                      </div>
                      <div class="form-group">
                         <label for="other author">&nbsp;&nbsp;&nbsp;iv) Other authors and their affiliations</label>
                         <input type="text" name="other_author" class="form-control" id="other_author" value="{{old('other_author')}}">
                         <span class="text-danger">{{ $errors->first('other_author') }}</span>
                      </div>
                      <div class="row">
                         <div class="col-md-8">
                            <div class="form-group">
                               <label for="name of the journal">&nbsp;&nbsp;&nbsp;v) Name of the Journal</label>
                               <input type="text" name="journal" class="form-control" id="journal" value="{{old('journal')}}">
                               <span class="text-danger">{{ $errors->first('journal') }}</span>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <label for="volume and issue number">&nbsp;&nbsp;&nbsp;vi) Volume and Issue Number</label>
                               <input type="text" name="volume_and_issue_number" class="form-control" id="volume_and_issue_number" value="{{old('volume_and_issue_number')}}">
                               <span class="text-danger">{{ $errors->first('volume_and_issue_number') }}</span>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="date of acceptance">&nbsp;&nbsp;&nbsp;vii) Date of acceptance of the manuscript</label>
                               <input type="date" name="date_of_acceptance" class="form-control" id="date_of_acceptance" value="{{old('date_of_acceptance')}}">
                               <span class="text-danger">{{ $errors->first('date_of_acceptance') }}</span>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="ISSN">&nbsp;&nbsp;&nbsp;viii) ISSN</label>
                               <input type="text" name="issn" class="form-control" id="issn" value="{{old('issn')}}">
                               <span class="text-danger">{{ $errors->first('issn') }}</span>
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="publisher">&nbsp;&nbsp;&nbsp;ix) Publisher</label>
                               <input type="text" name="publisher" class="form-control" id="publisher" value="{{old('publisher')}}">
                               <span class="text-danger">{{ $errors->first('publisher') }}</span>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="publication fee">&nbsp;&nbsp;&nbsp;x) Publication fee</label>
                               <input type="text" name="publication_fee" class="form-control" id="publication_fee" value="{{old('publication_fee')}}">
                               <span class="text-danger">{{ $errors->first('publication_fee') }}</span>
                            </div>
                         </div>
                      </div>
                      <div class="form-group">
                         <label>
                            <b>Please submit the following supporting documents with this application 
                            Copy of the manuscript</b>
                      </div>
                      <div class="col-md-6 mb-3">
                      <label for="copy of the manuscript">1. Copy of the manuscript</label>
                      <div class="custom-file">
                      <input type="file" name="file_copy" class="custom-file-input" id="customFile" value="{{old('file_copy')}}">
                      <span class="text-danger">{{ $errors->first('file_copy') }}</span>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                      </div></div>
                      <div class="col-md-6 mb-3">
                         <label for="evidence of journal listing in master journal list">2. Evidence of journal listing in master journal list</label>
                         <div class="custom-file">
                            <input type="file" name="file_evidence" class="custom-file-input" id="customFile" value="{{old('file_evidence')}}">
                            <span class="text-danger">{{ $errors->first('file_evidence') }}</span>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                         </div>
                      </div>
                      <div class="col-md-6 mb-3">
                         <label for="copy of the manuscript acceptance letter issued by the publisher">3. Copy of the manuscript acceptance letter issued by the publisher</label>
                         <div class="custom-file">
                            <input type="file" name="file_letter" class="custom-file-input" id="customFile" value="{{old('file_letter')}}">
                            <span class="text-danger">{{ $errors->first('file_letter') }}</span>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                         </div>
                      </div>
                      <div class="col-md-6 mb-3">
                         <label for="Copy of the invoice">4. Copy of the invoice</label>
                         <div class="custom-file">
                            <input type="file" name="file_invoice" class="custom-file-input" id="customFile" value="{{old('file_invoice')}}">
                            <span class="text-danger">{{ $errors->first('file_invoice') }}</span>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                         </div>
                      </div>
                      <p>Once the application is approved the University will make arrangements to pay the publication fee to the publisher .</p>
                      <p>I hereby certify that the information provided in this application are true and correct to the best of my knowledge and no organization or other authors have undertaken to pay the publication fee .</p>
                      <div class="form-group col md-6 form-check">
                         <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" value="{{old('remember')}}"> I agree.
                            <span class="text-danger">{{ $errors->first('remember') }}</span>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                         </label>
                         <br>
                         <br>
                         <div class="row">
                            <div class="form-group col-md-4">
                               <label>Date</label>
                               <input type="date" name="date1" class="form-control" value="{{old('date1')}}">
                               <span class="text-danger">{{ $errors->first('date1') }}</span>
                            </div>
                            <div class="col-md-4">
                            </div>
                         </div>
                         <div class="row justify-content-between">
                           <div class="col-md-2 mt-4">
                            <input type="button" class="btn btn-cancel font-weight-bold" value="Cancel" data-toggle="modal" data-target="#cancel"> 
                         </div>
                         <div class="col-md-4 mt-4">
                            <input type="submit" class="btn btn-submit font-weight-bold" value="Submit"> 
                         </div>
                      </div>
                      </div>
 
                      <!-- Modal -->
                      <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                           <div class="modal-body">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                             <h6 class="mt-4 text-danger text-center">
                               Are you sure you want to exit?
                             </h6>
                             <div class="row justify-content-end mt-5">
                               <div class="col-md-6">
                                 <a href="/"> <button type="button" class="btn btn-danger pl-4 pr-4 btn-yes">Yes</button></a>
                             <button type="button" class="btn btn-warning text-light pl-4 pr-4 btn-no"  data-dismiss="modal">No</button>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                      
                   </form>
                </div>
             </div>
          </div>
       </div>
       </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>
</html>