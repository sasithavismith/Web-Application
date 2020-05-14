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
          <div class="shadow-sm p-3 mb-5 bg-white rounded">
         <h4 class="text-monospace">Declartion form for confirming attendance at the Overseas Conference\Symposium\Workshop</h4>
          </div>
             @if ($message = Session::get('submit_success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <br>
            @endif
                
            <div class="form">
              <form action="{{url('formB')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="container">
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
                
                  <p>Proof of attending the event (Please attach proof such as copy of a certificate of participation, boarding pass and any other relevant documents to confirm your participation at the event)</p>
          <p>Invoice for making Payment(Please subit original invoice such as Air fare, Registration fee, Accommodation & Meal)</p>
          <p>I hereby declare that I have attended the above overseas event and participated in the activities as started in the application submitted to obtain the encouragement allowance and finacial support</p>
          <div class="row">
                  <div class="form-group col-md-6 form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> I agree.
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Check this checkbox to continue.</div>
                  </label>
                  </div> 
                  <div class="form-group-col md-6">
                          <label>Date</label>
                          <input type="date" name="date" class="form-control"></div>
                          </div>
                          <input type="submit" class="btn btn-primary btn-sm btn-rounded" value="Submit"> 
                        </div>
                  </form>
            
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

