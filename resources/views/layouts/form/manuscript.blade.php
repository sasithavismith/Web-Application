<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 JQuery Form Validation Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
  </head>
  <body>
    
    <div class="jumbotron">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Application For Requesting Manuscript Publication Fee Sabaragamuwa University of Sri Lanka</h3>
                <hr class="my-4">
                <p></p>
                <hr class="my-4">
                <div class="card">
                 
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">
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
                          <div class="form-group">
                            <label for="department">3. i) Department Attached</label>
                            <input type="text" name="department" class="form-control" id="department" value="{{old('Department')}}">
                            <span class="text-danger">{{ $errors->first('department') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="faculty">&nbsp;&nbsp;&nbsp;ii) Faculty</label>
                            <input type="text" name="faculty" class="form-control" id="faculty" value="{{old('faculty')}}">
                            <span class="text-danger">{{ $errors->first('faculty') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="description">4. Description of the manuscript</label><br>
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
                          <div class="form-group">
                            <label for="name of the journal">&nbsp;&nbsp;&nbsp;v) Name of the Journal</label>
                            <input type="text" name="journal" class="form-control" id="journal" value="{{old('journal')}}">
                            <span class="text-danger">{{ $errors->first('journal') }}</span>
                          </div>                       
                          <div class="form-group">
                            <label for="volume and issue number">&nbsp;&nbsp;&nbsp;vi) Volume and Issue Number</label>
                            <input type="text" name="volume_and_issue_number" class="form-control" id="volume_and_issue_number" value="{{old('volume_and_issue_number')}}">
                            <span class="text-danger">{{ $errors->first('volume_and_issue_number') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="date of acceptance">&nbsp;&nbsp;&nbsp;vii) Date of acceptance of the manuscript</label>
                              <input type="date" name="date_of_acceptance" class="form-control" id="date_of_acceptance" value="{{old('date_of_acceptance')}}">
                            <span class="text-danger">{{ $errors->first('date_of_acceptance') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="ISSN">&nbsp;&nbsp;&nbsp;viii) ISSN</label>
                            <input type="text" name="issn" class="form-control" id="issn" value="{{old('issn')}}">
                            <span class="text-danger">{{ $errors->first('issn') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="publisher">&nbsp;&nbsp;&nbsp;ix) Publisher</label>
                            <input type="text" name="publisher" class="form-control" id="publisher" value="{{old('publisher')}}">
                            <span class="text-danger">{{ $errors->first('publisher') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="publication fee">&nbsp;&nbsp;&nbsp;x) Publication fee</label>
                            <input type="text" name="publication_fee" class="form-control" id="publication_fee" value="{{old('publication_fee')}}">
                            <span class="text-danger">{{ $errors->first('publication_fee') }}</span>
                          </div>
                          <div class="form-group">
                            <label><b>Please submit the following supporting documents with this application 
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
                            </div></div>
                            <div class="col-md-6 mb-3">
                            <label for="copy of the manuscript acceptance letter issued by the publisher">3. Copy of the manuscript acceptance letter issued by the publisher</label>
                            <div class="custom-file">
                              <input type="file" name="file_letter" class="custom-file-input" id="customFile" value="{{old('file_letter')}}">
                              <span class="text-danger">{{ $errors->first('file_letter') }}</span>
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div>
                            <div class="col-md-6 mb-3">
                            <label for="Copy of the invoice">4. Copy of the invoice</label>
                            <div class="custom-file">
                              <input type="file" name="file_invoice" class="custom-file-input" id="customFile" value="{{old('file_invoice')}}">
                              <span class="text-danger">{{ $errors->first('file_invoice') }}</span>
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div>
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
                                <div class="col-md-4"><br>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div> 
                            
                          </div>
                          
                
                
                          
                        </form>
                    </p>
                    </div>
                  </div>
                </div>            
            </div>
        </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function(e) {
          FormValidation.formValidation(
              document.getElementById('demoForm'),
              {
                  fields: {
                      ...
                  },
                  plugins: {
                      bootstrap: new FormValidation.plugins.Bootstrap(),
                      ...
                  },
              }
          );
      });
      </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
<script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/vendors/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>
  </body>
</html>