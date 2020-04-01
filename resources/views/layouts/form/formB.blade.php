<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>

<meta charset="utf-8" />
 
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="css/select2.css" />
</head>
<body style="font-size: 17px;"> 
  <div class="container mt-5 mb-5">	
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
                      </p>
                      @endif
                <form action="{{url('formB')}}" method="post"  enctype="multipart/form-data" class="form-horizontal" name="basic_validate" id="basic_validate" novalidate="novalidate">
                        {{csrf_field()}}<div class="container">
                          <div class="control-group mb-2">
                            <label for="formGroupExampleInput" class="control-label">1.full Name</label>
                              <div class="controls">
                                <input type="text" name="full_name" class="form-control" id="full_name">
                              </div>
                          </div>
                          <div class="control-group mb-2">
                            <label for="formGroupExampleInput" class="control-label">2. Designation</label>
                              <div class="controls">
                                <input type="text" name="designation" class="form-control" id="designation">
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">3. Department</label>
                                  <div class="controls">
                                    <input type="text" name="department" class="form-control" id="department">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">4. Faculty</label>
                                  <div class="controls">
                                    <input type="text" name="faculty" class="form-control" id="faculty">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">5. Tel</label>
                                  <div class="controls">
                                    <input type="text" name="tel" class="form-control" id="tel">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">6. Email</label>
                                  <div class="controls">
                                    <input type="text" name="email" class="form-control" id="email">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="control-group mb-2">
                            <label for="formGroupExampleInput" class="control-label">7. Name of the Event</label>
                              <div class="controls">
                                <input type="text" name="event" class="form-control" id="event">
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">8. Country</label>
                                  <div class="controls">
                                    <input type="text" name="country" class="form-control" id="country">
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">9. Period</label>
                                  <div class="controls">
                                    <input type="text" name="period" class="form-control" id="period">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">10. Title of the abstract/paper to be presented:</label>
                                  <div class="controls">
                                    <input type="text" name="title" class="form-control" id="title">
                                  </div>
                              </div> 
                            </div>
                            <div class="col-md-4">
                              <div class="control-group mb-2">
                                <label for="formGroupExampleInput" class="control-label">Date</label>
                                  <div class="controls">
                                    <input type="date" name="date" class="form-control" id="date">
                                  </div>
                              </div> 
                            </div>
                          </div>
                          <br>
                          <br>
                            <!-- <p>Proof of attending the event (Please attach proof such as copy of a certificate of participation, boarding pass and any other relevant documents to confirm your participation at the event)</p>
                            <p>Invoice for making Payment(Please subit original invoice such as Air fare, Registration fee, Accommodation & Meal)</p>
                            <p>I hereby declare that I have attended the above overseas event and participated in the activities as started in the application submitted to obtain the encouragement allowance and finacial support</p> -->
                             <!--  <div class="row">
                                <div class="form-group col md-6 form-check">
                                  <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="remember"> I agree.
                                  <div class="valid-feedback">Valid.</div>
                                  <div class="invalid-feedback">Check this checkbox to continue.</div>
                                </label>
                                </div>  -->
                            <input type="submit" class="btn btn-primary" value="Submit"> 
                </form>
           
        </div>
    </div>
  </div>
</div>
    </div>
  </div>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>


<script src="js/jquery.min.js"></script> 

<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.validate.js"></script> 

<script src="js/matrix.form_validation.js"></script>



</body>
</html>