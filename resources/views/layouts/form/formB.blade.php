<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet"  href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="bg-admin">
    <div class="container">	
      <section class="header-section">
      <div class="contaniner">
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
    </div>
    <div class="container" style="font-size: 12px;">
    @if(Session::has('flash_message_error'))
    <div class="alert alert-primary alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>{!! Session('flash_message_error') !!}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-primary alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>{!! session('flash_message_success') !!}</strong>
    </div>
    @endif
    <div class="card mt-5 mb-5">
      <div class="card-header">
        <h4 class="card-title text-center"><b>Declartion form for confirming attendance at the Overseas Conference\Symposium\Workshop</b></h4><hr class="my-4">
      </div>
      <div class="card-body">
        <div class="row justify-content-center">
          <div class="col-md-12"> 
              
            <!--start form B-->

            <form action="{{url('formB')}}" method="post" name="form1" id="form1" class="form-horizontal" role="form" style="margin:10px 0 10px 0" enctype="multipart/form-data">
              {{csrf_field()}}
            <div id="grpfull_name" class="form-group">
              <label for="full_name" class="col-sm-2 control-label">1. Full Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="full_name" id="full_name" value="{{old('full_name')}}">
                 <span id="full_name_Icon"  class=""></span>
                 <div id="full_name_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
            
  
            <div id="grpdesignation" class="form-group">
              <label for="designation" class="col-sm-2 control-label">2. Designation:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="designation" id="designation" value="{{old('designation')}}">
                 <span id="designation_Icon"  class=""></span>
                 <div id="designation_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            <div id="grpdepartment" class="form-group">
              <label for="department" class="col-sm-2 control-label">3. Department:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="department" id="department" value="{{old('department')}}">
                 <span id="department_Icon"  class=""></span>
                 <div id="department_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            <div id="grpfaculty" class="form-group">
              <label for="faculty" class="col-sm-2 control-label">4. Faculty:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="faculty" id="faculty" value="{{old('faculty')}}">
                 <span id="faculty_Icon"  class=""></span>
                 <div id="faculty_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            <div id="grptel" class="form-group">
              <label for="tel" class="col-sm-2 control-label">5. Tel:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tel" id="tel" value="{{old('tel')}}">
                 <span id="tel_Icon"  class=""></span>
                 <div id="tel_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            
  
            <div id="grpemail" class="form-group">
              <label for="email" class="col-sm-2 control-label">6. Email:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">
                 <span id="email_Icon"  class=""></span>
                 <div id="email_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            <div id="grpevent" class="form-group">
              <label for="event" class="col-sm-2 control-label">7. Name of the Event:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="event" id="event" value="{{old('event')}}">
                 <span id="event_Icon"  class=""></span>
                 <div id="event_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            <div id="grpcountry" class="form-group">
              <label for="country" class="col-sm-2 control-label">8. Country:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="country" id="country" value="{{old('country')}}">
                 <span id="country_Icon"  class=""></span>
                 <div id="country_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            <div id="grpperiod" class="form-group">
              <label for="period" class="col-sm-2 control-label">9. Period(days):</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="period" id="period" value="{{old('period')}}">
                 <span id="period_Icon"  class=""></span>
                 <div id="period_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
  
            <div id="grptitle" class="form-group">
              <label for="title" class="col-sm-2 control-label">10. Title of the abstract/paper to be presented:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                 <span id="title_Icon"  class=""></span>
                 <div id="title_ErrorMsg" class="text-danger"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
            </div>
          </form>

            <!--end  form B-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://abhilash.site44.com/js/com_abhi.js"></script>
  <script type="text/javascript" src="js/1.js"></script>
  <script src="assets/js/jquery.js"></script>
  	<script src="assets/js/bootstrap.js"></script>
  </body>
  </html>