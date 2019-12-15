<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
  <title>
  Web Application
  </title>
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <body class="">

<body>
    <div class="container text-center mt-5">
        <h4>SABARAGAMUWA UNIVERSITY OF SRI LANKA</h4>
		<br>
		<h4>APPLICATION FOR A RESEARCH GRANT</h4>
        <p>(Please refer to the Guidelines for a Applicants - Grants for a Scientific Research)</p>
    </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                @foreach($errors->all() as $error)
           <div class="alert alert-danger" role="alert">
               {{$error}}
           </div> 
           @endforeach

                    <form>
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">1.Project Title</label>
                            <input type="text" class="form-control" name="project" id="project" value="{{ old('project') }}" required>
                            @if ($errors->has('project'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">2.Research areas</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Agriculture and Animal Science</option>
                                <option>Enviromental and Biodiversity</option>
                                <option>Engneering and Surveying Science</option>
                                <option>Food science and Technology</option>
                                <option>Natural Resources</option>
                                <option>Social Science</option>
                                <option>Management Studies</option>
                                <option>Technology Development and Promotion</option>
                                <option>Languages</option>
                                <option>Fundermental Research</option>
                            </select>
                        </div>
                    <div class="invesigator">
                        <div class="form-group">
                            <label>3.Investigators
                                <br>Principal Investigator</label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name and Designation</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Malling Address</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                            <div class="form-group">
                                <label>Institution</label>
                                <input type="text" class="form-control">
                            </div>
                                
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Telephone</label>
                                <input type="phone" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Fax</label>
                                <input type="phone" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>

                        <div class="co-investigator">

                            <div class="form-group">
                                    <label>Co-Investigator-1</label>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>(a) Name and Designation</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Malling Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
        
                                    <div class="form-group">
                                        <label>Institution</label>
                                        <input type="text" class="form-control">
                                    </div>
                                        
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Telephone</label>
                                        <input type="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Fax</label>
                                        <input type="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control">
                                    </div>    
                                </div>
                                
                                <div class="co-investigator">

                                        <div class="form-group">
                                                <label>Co-Investigator-2</label>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>(b) Name and Designation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Malling Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                    
                                                <div class="form-group">
                                                    <label>Institution</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                    
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label>Telephone</label>
                                                    <input type="phone" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Fax</label>
                                                    <input type="phone" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>E-mail</label>
                                                    <input type="email" class="form-control">
                                                </div>    
                                            </div>

                                            <div class="collaborator">
                                                    <div class="form-group">
                                                        <label>4.Collaborators</label>
                                                    </div>
                                                        <div class="form-group">
                                                            <label>Name and Designation</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                            
                                                        <div class="form-group">
                                                            <label>Institution</label>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>4.1 Total Budget:</label>
                                                                    <input type="phone" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>4.2 Budget for First Year:</label>
                                                                    <input type="phone" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <label>4.3 Project Period:</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-group">
                                                    <label>5.Institution's where research is to be performed</label>
                                                    <input  type="textarea" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label>6. Is this a continuation of an ongoing project?</label><br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                                  </div>
                                                  <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadioInline2">No</label>
                                                  </div>
                                                  </div>

                                                  <div class="form-group col-md-6">
                                                        <label>Period for Which the grant is required:-</label><br>
                                                        <input type="text" class="form-control">
                                                                </div>
                                                                </div>
                                                    <div class="form-group">
                                                        <label> 7. Financial Support<br>
                                                            <br> (a) Is the proposed research currently being supported by any other grant?
                                                            If so, please indicate the name of granting organization and give the amount and duration.
                                                        </label>
                                                        <input type="text" class="form-control">
                                                        <br> (b) Is this application currently being considered elsewhere for funding? If so, by what organization's; by what date is a decision expected?
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label> <strong>8.Othe Commitments of the applicant</strong> (Please indicate the periods/durations as applicable)</label>
                                                        <br>
                                                        <label>(a) Teaching(No. of hours per week)</label>
                                                        <input type="text" name="teaching" class="form-control"><br>

                                                        <label>(b) Training Programmes.</label>
                                                        <input type="text" name="training" class="form-control"><br>

                                                        <label>(c) Leave abroad, eith period(study leave, sabbatical leave etc)</label>
                                                        <input type="text" name="leave" class="form-control"><br>

                                                        <label>(d) Othe research activities in progess for which the applicant/s/is/are responsible as principal investigator or co-investigator</label>
                                                        <input type="text" name="research" class="form-control"><br>
                                                        <div class="form-row">                                                        
                                                            <div class="form-group col-md-4">
                                                                <label>TITLE OF PROJECT</label>
                                                                <input type="text" name="title" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label>SOURCE OF PROJECT</label>
                                                                <input type="text" name="source" class="form-control">
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                    <label>DURATION OF SUPPORT</label>
                                                                    <input type="DATE" name="date" class="form-control">
                                                            </div>
                                                    </div>


                                                    </div>   
                                                    <div class="form-group">
                                                        <label><strong>9.Project Ddescription</strong><br>
                                                        </label>
                                                       <input type="file" class="form-control-file" id="exampleFormControlFile1" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label><strong>10. Summary of Budeget</strong></label>
                                                        <br>For each of the items for which funds are required please give a justification for requesting the fund sitemized, abd show clearly hoe the cost figures were deliverd in the following pages.
                                                         <br><label><strong>(1) Presonnel</strong></label><br>
                                                         <label>(i) Research Student</label>
                                                         <div class="form-row"> 
                                                         <div class="form-group col-md-3">
                                                                <label>1st year Rs.</label>
                                                                <input type="text" name="rs.1" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                                <label>2nd year Rs.</label>
                                                                <input type="text" name="rs.2" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                                <label>3rd year Rs.</label>
                                                                <input type="text" name="rs.3" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                                <label>Total</label>
                                                                <input type="text" name="total" class="form-control">
                                                        </div>
                                            </div>
                                            <label>(ii) Technical Assistant</label>
                                            <div class="form-row"> 
                                            <div class="form-group col-md-3">
                                                   <label>1st year Rs.</label>
                                                   <input type="text" name="rs.1" class="form-control">
                                           </div>
                                           <div class="form-group col-md-3">
                                                   <label>2nd year Rs.</label>
                                                   <input type="text" name="rs.2" class="form-control">
                                           </div>
                                           <div class="form-group col-md-3">
                                                   <label>3rd year Rs.</label>
                                                   <input type="text" name="rs.3" class="form-control">
                                           </div>
                                           <div class="form-group col-md-3">
                                                   <label>Total</label>
                                                   <input type="text" name="total" class="form-control">
                                           </div>
                               </div>
                                           <label>(iii) Other</label>
                                           <div class="form-row"> 

                                           <div class="form-group col-md-3">
                                           <label>1st year Rs.</label>
                                           <input type="text" name="rs.1" class="form-control">
                                           </div>

                                           <div class="form-group col-md-3">
                                           <label>2nd year Rs.</label>
                                           <input type="text" name="rs.2" class="form-control">
                                           </div>

                              <div class="form-group col-md-3">
                                      <label>3rd year Rs.</label>
                                      <input type="text" name="rs.3" class="form-control">
                              </div>
                              <div class="form-group col-md-3">
                                      <label>Total</label>
                                      <input type="text" name="total" class="form-control">
                              </div>
                  </div>
                  <label>Sub Total(Personnel)</label>
                  <div class="form-row"> 
                  <div class="form-group col-md-3">
                         <label>1st year Rs.</label>
                         <input type="text" name="rs.1" class="form-control">
                 </div>
                 <div class="form-group col-md-3">
                         <label>2nd year Rs.</label>
                         <input type="text" name="rs.2" class="form-control">
                 </div>
                 <div class="form-group col-md-3">
                         <label>3rd year Rs.</label>
                         <input type="text" name="rs.3" class="form-control">
                 </div>
                 <div class="form-group col-md-3">
                         <label>Total</label>
                         <input type="text" name="total" class="form-control">
                 </div>
                 </div>
                 <label><strong>(2) Equipment</strong></label><br>
                 <div class="form-row"> 
                        <div class="form-group col-md-3">
                               <label>1st year Rs.</label>
                               <input type="text" name="rs.1" class="form-control">
                       </div>
                       <div class="form-group col-md-3">
                               <label>2nd year Rs.</label>
                               <input type="text" name="rs.2" class="form-control">
                       </div>
                       <div class="form-group col-md-3">
                               <label>3rd year Rs.</label>
                               <input type="text" name="rs.3" class="form-control">
                       </div>
                       <div class="form-group col-md-3">
                               <label>Total</label>
                               <input type="text" name="total" class="form-control">
                       </div>
                       </div>
                       <label><strong>(3) Consumable</strong></label><br>
                       <div class="form-row"> 
                              <div class="form-group col-md-3">
                                     <label>1st year Rs.</label>
                                     <input type="text" name="rs.1" class="form-control">
                             </div>
                             <div class="form-group col-md-3">
                                     <label>2nd year Rs.</label>
                                     <input type="text" name="rs.2" class="form-control">
                             </div>
                             <div class="form-group col-md-3">
                                     <label>3rd year Rs.</label>
                                     <input type="text" name="rs.3" class="form-control">
                             </div>
                             <div class="form-group col-md-3">
                                     <label>Total</label>
                                     <input type="text" name="total" class="form-control">
                             </div>
                             </div>
                             <label><strong>(4) Travel and Subsistence </strong></label><br>
                             <div class="form-row"> 
                                    <div class="form-group col-md-3">
                                           <label>1st year Rs.</label>
                                           <input type="text" name="rs.1" class="form-control">
                                   </div>
                                   <div class="form-group col-md-3">
                                           <label>2nd year Rs.</label>
                                           <input type="text" name="rs.2" class="form-control">
                                   </div>
                                   <div class="form-group col-md-3">
                                           <label>3rd year Rs.</label>
                                           <input type="text" name="rs.3" class="form-control">
                                   </div>
                                   <div class="form-group col-md-3">
                                           <label>Total</label>
                                           <input type="text" name="total" class="form-control">
                                   </div>
                                   </div>
                                   <label><strong>(5) Miscellaneous</strong></label><br>
                                   <div class="form-row"> 
                                          <div class="form-group col-md-3">
                                                 <label>1st year Rs.</label>
                                                 <input type="text" name="rs.1" class="form-control">
                                         </div>
                                         <div class="form-group col-md-3">
                                                 <label>2nd year Rs.</label>
                                                 <input type="text" name="rs.2" class="form-control">
                                         </div>
                                         <div class="form-group col-md-3">
                                                 <label>3rd year Rs.</label>
                                                 <input type="text" name="rs.3" class="form-control">
                                         </div>
                                         <div class="form-group col-md-3">
                                                 <label>Total</label>
                                                 <input type="text" name="total" class="form-control">
                                         </div>
                                         </div>
<p>*  List all the items of equipment in this cage.<br>
* Attach lis tincluding complete description of type (e.g. chemicals, glassware, etc) Quantity and cost</p>
     
                                            

                                                    </div>
                                                    <div class="form-group">
                                                        <label><strong>11.Budget Justification</strong><br>
                                                         (1) Personnel<br>
                                                            
                                                            <label><strong>(i) Research Student</strong></label><br>
                                                            a. Full time/part time for <input type="text" > Years/months. 
                                                        </label>

                                                    </div>
                                                   
                                                    
                                                    </div>


                                            
                      
                        </form>
                        <a href="/form A" type="submit" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
 
</body>
        
          <!--   Core JS Files   -->
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
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
    
  </script>
    </body>

</html>
