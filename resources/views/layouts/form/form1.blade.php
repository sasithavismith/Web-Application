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
     <div class="application-form">
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
            <h4>APPLICATION FOR A RESEARCH GRANT</h4>
            <p>(Please refer to the Guidelines for a Applicants - Grants for a Scientific Research)</p>
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
                        <div class="row">
                           <div class="col-md-8">
                              <label for="exampleFormControlInput1">1. Project Title</label>
                              <input type="text" class="form-control" name="project" id="project" value="" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-8">
                              <label for="exampleFormControlSelect1">2. Research areas</label>
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
                        </div>
                     </div>
                     <div class="invesigator">
                        <div class="form-group">
                           <label><b>3.  Investigators</b>
                           <br><b>&nbsp;&nbsp;&nbsp; Investigator</b></label>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label>  Name and Designation</label>
                              <input type="text" class="form-control">
                           </div>
                           <div class="form-group col-md-6">
                              <label>  Malling Address</label>
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
                              <label><b>&nbsp;&nbsp;&nbsp;Co-Investigator-1</b></label>
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
                                 <label><b>&nbsp;&nbsp;&nbsp;Co-Investigator-2</b></label>
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
                                    * Attach lis tincluding complete description of type (e.g. chemicals, glassware, etc) Quantity and cost
                                 </p>
                              </div>
                              <div class="form-group">
                                 <label><strong>11.Budget Justification</strong><br><br>
                                 <label><strong>(1) Personnel</strong></label> <br><br>
                                 <label><strong>(i) Research Student</strong></label><br>
                                 a. Full time/part time for <input type="text" > Years/months.<br>
                                 Description of work to be carried out by the Research student:-<br><br>
                                 <input type="text-area"><br><br>
                                 b. Research student will be registering for a postgraduate degree.<br><br>
                                 <input type="text"><br><br>
                                 <label><strong>(ii) Technical Assistant</strong></label><br>
                                 a. Full time/part time for <input type="text" > Years/months.<br>
                                 Description of work to be carried out by the Research Assistantent:-<br><br>
                                 <label><strong>(iii) Labourers</strong></label><br>
                                 a. Full time/part time for <input type="text" > Years/months.<br>
                                 Description of work to be performed<br><br>
                                 </label>
                              </div>
                               <div class="row justify-content-between">
                               <div class="col-md-2 mt-4">
                              <input type="button" class="btn btn-cancel font-weight-bold" value="Cancel" data-toggle="modal" data-target="#cancel"> 
                           </div>
                              <div class="col-md-4 mt-4">
                                 <input type="submit" class="btn btn-submit font-weight-bold" value="Submit"> 
                              </div>
                           </div>
                           </div>
                        </form>
                         <!-- Modal -->
                         <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                                  <h6 class="mt-4 text-danger text-center">
                                    Are you sure you want to exit?
                                  </h6>
                                  <div class="row justify-content-end mt-5">
                                    <div class="col-md-6">
                                      <a href="/"> <button type="button" class="btn btn-danger pl-4 pr-4">Yes</button></a>
                                  <button type="button" class="btn btn-warning text-light pl-4 pr-4"  data-dismiss="modal">No</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
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
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>
</html>