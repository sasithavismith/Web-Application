<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Manuscript Publication Fee</title>
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
            <h4>Declartion form for confirming attendance at the Overseas Conference\Symposium\Workshop</h4><hr class="my-4">
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
                
             
                <form action="{{url('formB')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                <div class="form-group">
                <label>1. Full Name:</label>
                <input type="text" name="full_name" id="full_name" value="{{old('full_name')}}" class="form-control" >
                <span class="text-danger">{{ $errors->first('full_name') }}</span>
                </div> 

                <div class="form-group">
                <label>2. Designation::</label>
                <input type="text" name="designation" class="form-control" value="{{old('designation')}}"  >
                <span class="text-danger">{{ $errors->first('designation') }}</span>
                </div>

                <div class="form-group">
                <label>3. Department:</label>
                <input type="text" name="department" class="form-control" value="{{old('department')}}">
                <span class="text-danger">{{ $errors->first('department') }}</span>
                </div>

                <div class="form-group">
                <label>4. Faculty:</label>
                <input type="text" name="faculty" class="form-control" value="{{old('faculty')}}">  
                <span class="text-danger">{{ $errors->first('faculty') }}</span>                            
                </div>
                                       
                <div class="form-row">

                <div class="form group col md-6">        
                <label>5.Tel:</label>
                <input type="tel" name="tel" class="form-control" value="{{old('tel')}}">
                <span class="text-danger">{{ $errors->first('tel') }}</span>
                </div>

                <div class="form group col md-6">
                <label>6. Email:</label>
                <input type="email" name="email" class="form-control"  value="{{old('email')}}">
                <span class="text-danger">{{ $errors->first('email') }}</span>
                </div> 
                
                </div>
                
                <div class="form-group">
                <label>7. Name of the Event:</label>
                <input type="text" name="event" class="form-control"  value="{{old('event')}}">
                <span class="text-danger">{{ $errors->first('event') }}</span>
                </div>
                                           
                <div class="form-group">
                <label>8. Country:</label>
                <input type="text" name="country" class="form-control"  value="{{old('country')}}">
                <span class="text-danger">{{ $errors->first('country') }}</span>
                </div>

                <div class="form-group">
                <label>9. Period:</label>
                <input type="text" name="period" class="form-control"  value="{{old('period')}}">
                <span class="text-danger">{{ $errors->first('period') }}</span>
                </div>

                <div class="form-group">
                <label>10. Title of the abstract/paper to be presented:</label>
                <input type="text" name="title" class="form-control"  value="{{old('title')}}">
                <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit"> 
                <p>Proof of attending the event (Please attach proof such as copy of a certificate of participation, boarding pass and any other relevant documents to confirm your participation at the event)</p>
  <p>Invoice for making Payment(Please subit original invoice such as Air fare, Registration fee, Accommodation & Meal)</p>
  <p>I hereby declare that I have attended the above overseas event and participated in the activities as started in the application submitted to obtain the encouragement allowance and finacial support</p>
  <div class="row">
                <div class="form-group col md-6 form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> I agree.
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
                </div> 
                <div class="form-group col md-6">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control">
                </form>
           
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