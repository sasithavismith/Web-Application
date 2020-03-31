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
                      </p>
                      @endif
                        <form action="{{url('manuscript')}}" method="post" enctype="multipart/form-data" class="form-horizontal" name="basic_validate" id="basic_validate" novalidate="novalidate">
                          {{csrf_field()}}
                          <div class="container">
                          <div class="control-group mb-2">
                            <label for="formGroupExampleInput" class="control-label">1. Name</label>
                              <div class="controls">
                                <input type="text" name="name" class="form-control" id="name">
                              </div>
                          </div>
                          <div class="control-group mb-2">
                            <label for="designation" class="control-label">2. Designation(Same designation of the formB)</label>
                            <div class="controls">
                            <input type="text" name="designation" class="form-control" id="designation">
                            </div>
                            </div>
                          
                          <div class="row">
                          <div class="col-md-6">
                          <div class="control-group mb-3">
                            <label for="department" class="control-label">3. i) Department Attached</label>
                            <div class="controls">
                            <input type="text" name="department" class="form-control" id="department">
                          </div>
                          </div>
                          </div>
                          <div class="col-md-6">
                          <div class="control-group mb-3">
                            <label for="faculty" class="control-label">ii) Faculty</label>
                            <div class="controls">
                            <input type="text" name="faculty" class="form-control" id="faculty">
                            </div>
                          </div>
                          </div>
                          </div>
                          <div class="control-group mb-3">
                            <label for="description" class="control-label">4. Description of the manuscript</label><br>
                            <label for="title" class="control-label">&nbsp;&nbsp;&nbsp;i) Title of the manuscript</label> 
                            <div class="controls">
                            <input type="text" name="title" class="form-control" id="title">
                            </div>
                          </div> 
                          <div class="control-group mb-3">
                            <label for="first author" class="control-label">&nbsp;&nbsp;&nbsp;ii) First author And affiliations</label>
                            <div class="controls">
                            <input type="text" name="first_author" class="form-control" id="forst_author">
                          </div>
                          </div>
                          <div class="control-group mb-3">
                            <label for="corresponding author" class="control-label">&nbsp;&nbsp;&nbsp;iii) corresponding author and affiliation</label>
                            <div class="controls">
                            <input type="text" name="corresponding_author" class="form-control" id="corresponding_author">
                          </div> 
                          </div>
                          <div class="control-group mb-3">
                            <label for="other author" class="control-label">&nbsp;&nbsp;&nbsp;iv) Other authors and their affiliations</label>
                            <div class="controls">
                            <input type="text" name="other_author" class="form-control" id="other_author">
                          </div>  
                          </div>
                          <div class="control-group mb-3">
                            <label for="name of the journal" class="control-label">&nbsp;&nbsp;&nbsp;v) Name of the Journal</label>
                            <div class="controls">
                            <input type="text" name="journal" class="form-control" id="journal" >
                          </div> 
                          </div>  
                          <div class="row">
                            <div class="col-md-6">                    
                          <div class="control-group mb-3">
                            <label for="volume and issue number" class="control-label">&nbsp;&nbsp;&nbsp;vi) Volume and Issue Number</label>
                            <div class="controls">
                            <input type="text" name="volume_and_issue_number" class="form-control" id="volume_and_issue_number">
                          </div>
                          </div>
                          </div>
                            <div class="col-md-6">
                          <div class="control-group mb-3">
                            <label for="date of acceptance" class="control-label">&nbsp;&nbsp;&nbsp;vii) Date of acceptance of the manuscript</label>
                            <div class="controls">
                              <input type="date" name="date_of_acceptance" class="form-control" id="date_of_acceptance" >
                          </div>
                          </div>
                          </div>
                          </div>
                          <div class="control-group mb-3">
                            <label for="ISSN" class="control-label">&nbsp;&nbsp;&nbsp;viii) ISSN</label>
                            <div class="controls">
                            <input type="text" name="issn" class="form-control" id="issn" >
                          </div>
                          </div>
                          <div class="control-group mb-3">
                            <label for="publisher" class="control-label">&nbsp;&nbsp;&nbsp;ix) Publisher</label>
                            <div class="controls">
                            <input type="text" name="publisher" class="form-control" id="publisher" >   
                          </div>
                          </div>                       
                          <div class="control-group mb-3">
                            <label for="publication fee" class="control-label">&nbsp;&nbsp;&nbsp;x) Publication fee</label>
                              <div class="controls">
                                <input type="text" name="publication_fee" class="form-control" id="publication_fee" >
                              </div>
                              </div>
                           
                            <b>Please submit the following supporting documents with this application 
                              Copy of the manuscript</b>
                           
                            
                              <div class="control-group mb-3">
                                <div class="col-md-6 mb-3">
                                  <label class="control-label" for="copy of the manuscript">1. Copy of the manuscript</label>
                                  <div class="controls">
                                    <div class="custom-file">
                                      <input type="file" name="file_copy" class="custom-file-input" id="customFile">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                               
                              <div class="control-group mb-3">
                                <div class="col-md-6 mb-3">
                                  <label class="control-label" for="evidence of journal listing in master journal list">2. Evidence of journal listing in master journal list</label>
                                    <div class="controls">
                                    <div class="custom-file">
                                        <input type="file" name="file_evidence" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="control-group mb-3">
                                <div class="col-md-6 mb-3">
                                  <label class="control-label" for="copy of the manuscript acceptance letter issued by the publisher">3. Copy of the manuscript acceptance letter issued by the publisher</label>
                                    <div class="custom-file">
                                      <div class="controls">
                                        <input type="file" name="file_letter" class="custom-file-input" id="customFile" >
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="control-group mb-3">
                                <div class="col-md-6 mb-3">
                                  <label class="control-label" for="Copy of the invoice">4. Copy of the invoice</label>
                                    <div class="custom-file">
                                      <div class="controls">
                                        <input type="file" name="file_invoice" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <p>Once the application is approved the University will make arrangements to pay the publication fee to the publisher .</p>
                            <p>I hereby certify that the information provided in this application are true and correct to the best of my knowledge and no organization or other authors have undertaken to pay the publication fee .</p>
                            <div class="control-group">
                              <label class="control-label">Valid</label>
                              <div class="controls">
                                <label>
                                  <input type="checkbox" name="radios" />
                                  Check this checkbox to continue.</label>
                                </div>
                                </div>
                             

                                
                              <br>
                              <br>
                              <div class="row">
                                <div class="form-group col-md-4">
                              <label>Date</label>
                              <input type="date" name="date1" class="form-control" >
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4"><br>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
            </form>
          </div>
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