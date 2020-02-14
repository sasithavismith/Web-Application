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
            <div class="col-md-10">
                <h4>Application for Encouragement Allowance and Finacial Assistance to Attend Overseas International Conference\Symposium\Workshop</h4>
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
                        <form>                        
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">(1) Presonal Details of Applicant</label>
                                </div>
                                <div class="form-group">
                                        <label>1.1 Full Name:</label>
                                        <input type="text" name="full_name" class="form-control">
                                </div>
                                <div class="form-group">
                                        <label>1.2 Designation:</label>
                                        <input type="text" name="designation" class="form-control">
                                </div>
                                <div class="form-row">
                                        <div class="form group col md-6">
                                                <label>1.3 Department:</label>
                                                <input type="text" name="department" class="form-control">
                                        </div>
                                        <div class="form group col md-6">
                                                <label>1.4 Faculty:</label>
                                                <input type="text" name="faculty" class="form-control">
                                        </div> 
                                 </div>
                                <div class="form-row">
                                        <div class="form group col md-6">
                                                <label>1.5 Tel:</label>
                                                <input type="tel" name="tel" class="form-control">
                                        </div>
                                        <div class="form group col md-6">
                                                <label>1.6 Email:</label>
                                                <input type="email" name="email" class="form-control">
                                                <br>
                                        </div> 
                                </div>
                
        
                                <div class="col-md-10">
                                        <div class="Presonal Details of Applicant">                         
                                                <div class="form-group">
                                                        <label for="exampleFormControlInput1">(2) Details of the overseas event</label>
                                                </div>
                                                <div class="form-group">
                                                        <label>2.1 Name of the Event:</label>
                                                        <input type="text" name="event" class="form-control">
                                                </div>
                                        <div class="form-group">
                                            <label>2.2 Contact detail:</label>
                                            <input type="text" name="c_detail" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label>2.3 Country:</label>
                                                <input type="text" name="country" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label>2.4 Period:</label>
                                                <input type="text" name="period" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label>2.5 Title of the abstract/paper to be presented:</label>
                                                <input type="text" name="title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label>2.6 Date of the acceptance of the abstract/paper:</label>
                                                <input type="date" name="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label>2.7 other academic activities related to the visit:</label>
                                                <input type="text" name="other_activity" class="form-control">
                                        </div>
                                     </div>
                                </div>

                                <div class="col-md-10">
                                        <div class="Presonal Details of Applicant">                         
                                                <div class="form-group">
                                                        <label for="exampleFormControlInput1"><strong>(3) Budgetary requirements</strong></label>
                                                </div>
                                                <div class="form-group">
                                                        <label>3.1 Registration fee:</label>
                                                        <input type="text" name="fee" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label>3.2 Air ticket:</label>
                                                        <input type="text" name="tickect" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label>3.3 Accommodation and meal :</label>
                                                        <input type="text" name="accommodation" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label>3.4 Iternal travelling:</label>
                                                        <input type="text" name="travelling" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label>3.5 Total cost:</label>
                                                        <input type="number" name="cost" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label>2.6 Are you getting any other finacial Assistance:</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadioInline2">No</label>
                                                                </div>
                                                </div>
                                                <div class="form-group">
                                                        <label>3.7 If yes, details of contribution from sponsor, scolarship etc.:</label>
                                                        <input type="text" name="sponsor" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label>3.8 Did you receive any other finacial assistance or Encouragement Allowance for previous visits from SUSL? If yes, provide detail:</label>
                                                                <div class="row">
                                                                
                                                              <div class="col-md-4">
                                                                <label>I. Year</label>
                                                                      <input type="text" name="year_1" class="form-control" value="">
                                                              </div>
                                                              <div class="col-md-4">
                                                                <label>I. Country</label>
                                                                <input type="text" name="country_1" class="form-control" value="">
                                                              </div>
                                                              <div class="col-md-4">
                                                                <label>I. Amount received</label>
                                                                <input type="text" name="amount_1" class="form-control" value="">
                                                              </div>  
                                                        </div>
                                                        <div class="row">
                                                                <div class="col-md-4">
                                                                        <label>II. Year</label>
                                                                        <input type="text" name="year_2" class="form-control" value="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <label>II. Country</label>
                                                                  <input type="text" name="country_2" class="form-control" value="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <label>II. Amount received</label>
                                                                  <input type="text" name="amount_2" class="form-control" value="">
                                                                </div>  
                                                          </div>
                                                          <div class="row">
                                                                <div class="col-md-4">
                                                                        <label>III. Year</label>
                                                                        <input type="text" name="year_3" class="form-control" value="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <label>III. Country</label>
                                                                  <input type="text" name="country_3" class="form-control" value="">
                                                                </div>
                                                                <div class="col-md-4">
                                                                        <label>III. Amount received</label>
                                                                  <input type="text" name="amount_3" class="form-control" value="">
                                                                </div>  
                                                          </div>
                                                          
                                                        </div>
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                        </div>
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