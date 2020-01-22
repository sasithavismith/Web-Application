<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 JQuery Form Validation Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
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
                    @if ($message = Session::get('fsuccess'))
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
                          <input type="text" name="name" class="form-control" id="name">
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                          <div class="form-group">
                            <label for="designation">2. Designation(Same designation of the formB)</label>
                            <input type="text" name="designation" class="form-control" id="designation">
                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="department">3. i) Department Attached</label>
                            <input type="text" name="department" class="form-control" id="department">
                            <span class="text-danger">{{ $errors->first('department') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="faculty">&nbsp;&nbsp;&nbsp;ii) Faculty</label>
                            <input type="text" name="faculty" class="form-control" id="faculty">
                            <span class="text-danger">{{ $errors->first('faculty') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="description">4. Description of the manuscript</label><br>
                            <label for="title">&nbsp;&nbsp;&nbsp;i) Title of the manuscript</label> 
                            <input type="text" name="title" class="form-control" id="title">
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                          </div> 
                          <div class="form-group">
                            <label for="first author">&nbsp;&nbsp;&nbsp;ii) First author And affiliations</label>
                            <input type="text" name="first_author" class="form-control" id="forst_author">
                            <span class="text-danger">{{ $errors->first('first_author') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="corresponding author">&nbsp;&nbsp;&nbsp;iii) corresponding author and affiliation</label>
                            <input type="text" name="corresponding_author" class="form-control" id="corresponding_author">
                            <span class="text-danger">{{ $errors->first('corresponding_author') }}</span>
                          </div> 
                          <div class="form-group">
                            <label for="other author">&nbsp;&nbsp;&nbsp;iv) Other authors and their affiliations</label>
                            <input type="text" name="other_author" class="form-control" id="other_author">
                            <span class="text-danger">{{ $errors->first('other_author') }}</span>
                          </div>  
                          <div class="form-group">
                            <label for="name of the journal">&nbsp;&nbsp;&nbsp;v) Name of the Journal</label>
                            <input type="text" name="journal" class="form-control" id="journal">
                            <span class="text-danger">{{ $errors->first('journal') }}</span>
                          </div>                       
                          <div class="form-group">
                            <label for="volume and issue number">&nbsp;&nbsp;&nbsp;vi) Volume and Issue Number</label>
                            <input type="text" name="volume_and_issue_number" class="form-control" id="volume_and_issue_number">
                            <span class="text-danger">{{ $errors->first('volume_and_issue_number') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="date of acceptance">&nbsp;&nbsp;&nbsp;vii) Date of acceptance of the manuscript</label>
                              <input type="date" name="date_of_acceptance" class="form-control" id="date_of_acceptance">
                            <span class="text-danger">{{ $errors->first('date_of_acceptance') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="ISSN">&nbsp;&nbsp;&nbsp;viii) ISSN</label>
                            <input type="text" name="issn" class="form-control" id="issn">
                            <span class="text-danger">{{ $errors->first('issn') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="publisher">&nbsp;&nbsp;&nbsp;ix) Publisher</label>
                            <input type="text" name="publisher" class="form-control" id="publisher">
                            <span class="text-danger">{{ $errors->first('publisher') }}</span>
                          </div>
                          <div class="form-group">
                            <label for="publication fee">&nbsp;&nbsp;&nbsp;x) Publication fee</label>
                            <input type="text" name="publication_fee" class="form-control" id="publication_fee">
                            <span class="text-danger">{{ $errors->first('publication_fee') }}</span>
                          </div>
                          <div class="form-group">
                            <label><b>Please submit the following supporting documents with this application 
                              Copy of the manuscript</b>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="copy of the manuscript">1. Copy of the manuscript</label>
                            <div class="custom-file">
                              <input type="file" name="file_copy" class="custom-file-input" id="customFile">
                              <span class="text-danger">{{ $errors->first('file_copy') }}</span>
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div>
                            <div class="col-md-6 mb-3">
                            <label for="evidence of journal listing in master journal list">2. Evidence of journal listing in master journal list</label>
                            <div class="custom-file">
                              <input type="file" name="file_evidence" class="custom-file-input" id="customFile">
                              <span class="text-danger">{{ $errors->first('file_evidence') }}</span>
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div>
                            <div class="col-md-6 mb-3">
                            <label for="copy of the manuscript acceptance letter issued by the publisher">3. Copy of the manuscript acceptance letter issued by the publisher</label>
                            <div class="custom-file">
                              <input type="file" name="file_letter" class="custom-file-input" id="customFile">
                              <span class="text-danger">{{ $errors->first('file_letter') }}</span>
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div>
                            <div class="col-md-6 mb-3">
                            <label for="Copy of the invoice">4. Copy of the invoice</label>
                            <div class="custom-file">
                              <input type="file" name="file_invoice" class="custom-file-input" id="customFile">
                              <span class="text-danger">{{ $errors->first('file_invoice') }}</span>
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div></div>
                            <p>Once the application is approved the University will make arrangements to pay the publication fee to the publisher .</p>
                            <p>I hereby certify that the information provided in this application are true and correct to the best of my knowledge and no organization or other authors have undertaken to pay the publication fee .</p>
                            <div class="form-group col md-6 form-check">
                              <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" name="remember"> I agree.
                              <span class="text-danger">{{ $errors->first('remember') }}</span>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Check this checkbox to continue.</div>
                              </label>
                              <br>
                              <br>
                              <div class="row">
                                <div class="form-group col-md-4">
                              <label>Date</label>
                              <input type="date" name="date1" class="form-control">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>