<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 JQuery Form Validation Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container">	
      <section class="header-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="head">
              <img src="assets/img/logo.png" class="img-logo">
              <h4 class="logo-text">Sabaragamuwa University of Sri Lanka</h4>
              <h4 class="logo-text-4">Belihuloya Sri Lanka</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="jumbotron">
        <div class="row justify-content-center content-title">
            <div class="col-md-8">
                <h4>Application for the Research Allowance in Accordance with the Higher Education Circular 1/2019</h4>
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
                        <form enctype="multipart/form-data">
                          {{csrf_field()}}
                        <div class="form-group">
                        <label>1. Name of Applicant:</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group">
                        <label>2. Designation:</label>
                        <input type="text" name="designation" class="form-control" id="designation" value="{{old('designation')}}">
                        <span class="text-danger">{{ $errors->first('designation') }}</span>
                        </div>

                        <div class="form-group">
                        <label>3. <br> i) Department Attached:</label>
                        <input type="text" name="department" class="form-control" id="department" value="{{old('department')}}">
                        <span class="text-danger">{{ $errors->first('department') }}</span><br>
                        <label>ii) Faculty:</label>
                        <input type="text" name="faculty" class="form-control" requireid="faculty" value="{{old('faculty')}}">
                        <span class="text-danger">{{ $errors->first('faculty') }}</span>
                        </div>
                        
                         <div class="form-group">
                             <label>4. Category under which you become eligible</label>
                             <div class="row">
                        <div class="form-group col md-4 form-check">
                        <label class="form-check-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" name="a"  type="checkbox" id="" value="{{old('')}}">
                        <span class="text-danger">{{ $errors->first('') }}</span>  (a)
                        </label>
                        </div>

                        <div class="form-group col md-4 form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" name="b" type="checkbox">
                        <span class="text-danger">{{ $errors->first('') }}</span>  (b)
                        </label>
                        </div>

                        <div class="form-group col md-4 form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" name="c" type="checkbox">
                        <span class="text-danger">{{ $errors->first('') }}</span>  (c)
                        </label>
                        </div>
                         </div>
                        </div>

                        <div class="form-group">
                            <label>5. If you are applying under category (a) or (c) give evidences (at least one of the following) to prove your eligibility.
                                <br>
                                i) Research work aleady published or accepted for publication in year 2019.(full paper/abstract)
                                <input type="text" name="published" class="form-control"  id="customFile" value="{{old('published')}}" >
                                <span class="text-danger">{{ $errors->first('published') }}</span>
                                
                                <br>
                                ii) Ongoing reseach project(status of research during th year 2019)
                                <input type="text" name="ongoing" class="form-control" id="customFile" value="{{old('ongoing')}}" >
                                <span class="text-danger">{{ $errors->first('ongoing') }}</span>
                                
                                <br>
                                iii)Lecture (Probationary) - status of research project of the postgraduate degree programme.
                                <input type="text" name="status" class="form-control" id="customFile" value="{{old('status')}}" >
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                
                                <br>
                                iv) Currently on Sabbatical leave with evidence of post doctorai research/ any other type of rresearch.
                                <input type="text" name="current" class="form-control"id="customFile" value="{{old('current')}}" >
                                <span class="text-danger">{{ $errors->first('current') }}</span>
                                
                                <br>
                                v)Book/Monograph/Text book scheduled to published in 2019. Any other type of research or publication(p. specif)
                                <input type="text" name="any_type" class="form-control" id="customFile" value="{{old('any_type')}}" >
                                <span class="text-danger">{{ $errors->first('a') }}</span>
                                
                        </div>

                        <div class="form-group">
                                <label>6. Those applying under category (b) must provide following information in a separate sheet/sheets
                                    <br><br>
                                    (a) Titleof research project
                                    <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" >
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    <br>
                                    (b) Objectives of the Reseach.
                                    <input type="text" class="form-control" name="objective" id="objective" value="{{old('objective')}}" >
                                    <span class="text-danger">{{ $errors->first('objective') }}</span>
                                    <br>
                                    (c) Brief Descrption of the Research method.
                                    <input type="text" class="form-control" name="destription" id="destription" value="{{old('destription')}}" >
                                    <span class="text-danger">{{ $errors->first('destription') }}</span>
                                    <br>
                                    (d) Project duration (Months) and Time frame in a proposal.
                                    <input type="text" class="form-control" name="duration" id="duration" value="{{old('duration')}}" >
                                    <span class="text-danger">{{ $errors->first('') }}</span>
                                    <br>
                                    (e) Expected date of Commencement of Project.
                                    <input type="text" class="form-control" name="expected_date" id="expected_date" value="{{old('expected_date')}}" >
                                    <span class="text-danger">{{ $errors->first('expected_date') }}</span>
                                    <br>
                                    (f) Expected research outputs
                                    <input type="text" class="form-control" name="output" id="output" value="{{old('output')}}" >
                                    <span class="text-danger">{{ $errors->first('output') }}</span><br><br>
                                   
                                    <div class="row">

                                    <div class="form-group col md-6 form-check">
                                    <label class="form-check-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{old('remember')}}"> I agree.
                                    <span class="text-danger">{{ $errors->first('remember') }}</span>
                                     <div class="valid-feedback">Valid.</div>
                                     <div class="invalid-feedback">Check this checkbox to continue.</div>
                                    </label>
                                    </div> 
                                   <div class="form-group col md-6">
                                  <label>Date</label>
                                  <input type="date" name="date" class="form-control" id="date" value="{{old('date')}}">
                                  <span class="text-danger">{{ $errors->first('text') }}</span>
                              </div>
                            </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div  class="col-md-6">
                                    
                                </div>
                              </div>
                                

                           </div>
                          
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        
    
    
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
<script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/vendors/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>
  </body>
</html> 