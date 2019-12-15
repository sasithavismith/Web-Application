<!DOCTYPE html>
<html>
<head>
	<title>Application for a Research Grant</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
        <div class="container text-center mt-5">
                <h4>Form B</h4>
                <br>
                <h4>Declartion form for confirming attendance at the Overseas Conference\Symposium\Workshop</h4>
                 </div> 
                 <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="Presonal Details of Applicant"> 

                      

                <form action="/savedetail" method="post">
                        
                <div class="form-group">
                <label>1. Full Name:</label>
                <input type="text" name="full_name" class="form-control" required>
                </div> 

                <div class="form-group">
                <label>2. Designation::</label>
                <input type="text" name="designation" class="form-control" required>
                </div>

                <div class="form-group">
                <label>3. Department:</label>
                <input type="text" name="department" class="form-control" required>
                </div>

                <div class="form-group">
                <label>4. Faculty:</label>
                <input type="text" name="faculty" class="form-control" required>                              
                </div>
                                       
                <div class="form-row">

                <div class="form group col md-6">        
                <label>5.Tel:</label>
                <input type="tel" name="tel" class="form-control" required>
                </div>

                <div class="form group col md-6">
                <label>6. Email:</label>
                <input type="email" name="email" class="form-control" required>
                </div> 
                
                </div>
                
                <div class="form-group">
                <label>7. Name of the Event:</label>
                <input type="text" name="event" class="form-control"  required>
                </div>
                                           
                <div class="form-group">
                <label>8. Country:</label>
                <input type="text" name="country" class="form-control" required>
                </div>

                <div class="form-group">
                <label>9. Period:</label>
                <input type="text" name="period" class="form-control" required>
                </div>

                <div class="form-group">
                <label>10. Title of the abstract/paper to be presented:</label>
                <input type="text" name="title" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit"> 
                <p>Proof of attending the event (Please attach proof such as copy of a certificate of participation, boarding pass and any other relevant documents to confirm your participation at the event)</p>
  <p>Invoice for making Payment(Please subit original invoice such as Air fare, Registration fee, Accommodation & Meal)</p>
  <p>I hereby declare that I have attended the above overseas event and participated in the activities as started in the application submitted to obtain the encouragement allowance and finacial support</p>
  <div class="row">
                <div class="form-group col md-6 form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> I agree.
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
                </div> 
                <div class="form-group col md-6">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" required>
                </form>
                
        </div>
    </div>
  </div>
</div>

</body>