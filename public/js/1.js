
var g_UnFocusElementStyle = "";
var g_FocusBackColor = "#FFC";
var g_reEmail = /^[\w\.=-]+\@[\w\.-]+.[a-z]{2,4}$/;
var g_reCell = /^\d{10}$/;
var g_invalidFields = 0;

function initFormElements(sValidElems) {
  var inputElems = document.getElementsByTagName('textarea');
  for(var i = 0; i < inputElems.length; i++) {
    com_abhi.EVENTS.addEventHandler(inputElems[i], 'focus', highlightFormElement, false);
    com_abhi.EVENTS.addEventHandler(inputElems[i], 'blur', unHightlightFormElement, false);
  }
  /* Add the code for the input elements */
  inputElems = document.getElementsByTagName('input');
  for(var i = 0; i < inputElems.length; i++) {
    if(sValidElems.indexOf(inputElems[i].getAttribute('type') != -1)) {
      com_abhi.EVENTS.addEventHandler(inputElems[i], 'focus', highlightFormElement, false);
      com_abhi.EVENTS.addEventHandler(inputElems[i], 'blur', unHightlightFormElement, false);
    }
  }
  
  /* submit handler */
  
  
  com_abhi.EVENTS.addEventHandler(document.getElementById('form1'), 'submit' , validateAllfields, false);
  
  /* Add the default focus handler */
  document.getElementsByTagName('input')[0].focus();
  
  /* Add the event handlers for validation */
  com_abhi.EVENTS.addEventHandler(document.forms[0].full_name, 'blur', validatefull_name, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].designation, 'blur', validatedesignation, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].department, 'blur', validatedepartment, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].faculty, 'blur', validatefaculty, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].event, 'blur', validateevent, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].country, 'blur', validatecountry, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].period, 'blur', validateperiod, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].title, 'blur', validatetitle, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].email, 'blur', validateemail, false);
  com_abhi.EVENTS.addEventHandler(document.forms[0].tel, 'blur', validatetel, false);
}

function highlightFormElement(evt) {
  var elem = com_abhi.EVENTS.getEventTarget(evt);
  if(elem != null) {
    elem.style.backgroundColor = g_FocusBackColor;
  }
}

function unHightlightFormElement(evt) {
  var elem = com_abhi.EVENTS.getEventTarget(evt);
  if(elem != null) {
    elem.style.backgroundColor = "";
  }
}


function validatefull_name() {
  var formField = document.getElementById('full_name');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grpfull_name');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('full_name_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('full_name_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('full_name_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('full_name_ErrorMsg').innerHTML = "Please enter your full name";
    }
    return ok;
  }
}

function validatedesignation() {
  var formField = document.getElementById('designation');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grpdesignation');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('designation_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('designation_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('designation_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('designation_ErrorMsg').innerHTML = "Please enter your address";
    }
    return ok;
  }
  
}


function validatedepartment() {
  var formField = document.getElementById('department');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grpdepartment');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('department_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('department_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('department_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('department_ErrorMsg').innerHTML = "Please enter your department";
    }
    return ok;
  }
}


function validatefaculty() {
  var formField = document.getElementById('faculty');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grpfaculty');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('faculty_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('faculty_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('faculty_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('faculty_ErrorMsg').innerHTML = "Please enter your faculty";
    }
    return ok;
  }
}


function validateevent() {
  var formField = document.getElementById('event');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grpevent');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('event_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('event_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('event_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('event_ErrorMsg').innerHTML = "Please enter your event";
    }
    return ok;
  }
}


function validatecountry() {
  var formField = document.getElementById('country');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grpcountry');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('country_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('country_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('country_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('country_ErrorMsg').innerHTML = "Please enter your country";
    }
    return ok;
  }
}


function validatetitle() {
  var formField = document.getElementById('title');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grptitle');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('title_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('title_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('title_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('title_ErrorMsg').innerHTML = "Please enter your title";
    }
    return ok;
  }
}


function validateperiod() {
  var formField = document.getElementById('period');
  var ok = (formField.value != null && formField.value.length != 0);
  var grpEle = document.getElementById('grpperiod');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('period_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('period_ErrorMsg').innerHTML = "";
    }
    else  {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('period_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('period_ErrorMsg').innerHTML = "Please enter your period";
    }
    return ok;
  }
}



function validateemail() {
  var formField = document.getElementById('email');
  var ok = (formField.value.length != 0 && g_reEmail.test(formField.value));
  var grpEle = document.getElementById('grpemail');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('email_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('email_ErrorMsg').innerHTML = "";
    }
    else {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('email_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('email_ErrorMsg').innerHTML = "Please enter your valid email";
    }
  }
  return ok;
}

function validatetel() {
  var formField = document.getElementById('tel');
  var ok = (formField.value.length != 0 && g_reCell.test(formField.value));
  var grpEle = document.getElementById('grptel');
  if(grpEle != null) {
    if(ok) {
      grpEle.className = "form-group has-success has-feedback";
      document.getElementById('tel_Icon').className = "glyphicon glyphicon-ok form-control-feedback";
      document.getElementById('tel_ErrorMsg').innerHTML = "";
    }
    else {
      grpEle.className = "form-group has-error has-feedback";
      document.getElementById('tel_Icon').className = "glyphicon glyphicon-remove form-control-feedback";
      document.getElementById('tel_ErrorMsg').innerHTML = "Please enter your valid mobile number";
    }
  }
  return ok;
}



function validateAllfields(e) {
  /* Need to do it this way to make sure all the functions execute */
  
  var bOK = validatefull_name();
  bOK &= validatedesignation();
  bOK &= validatedepartment();
  bOK &= validatefaculty();
  bOK &= validatecountry();
  bOK &= validateevent();
  bOK &= validatetitle();
  bOK &= validateperiod();
  bOK &= validateemail();
  bOK &= validatetel(); 

  bOK &= validateemail();
  

  if(!bOK) {
    alert("The fields that are marked bold and red are required. Please supply valid\n values for these fields before sending.");
    com_abhi.EVENTS.preventDefault(e);
  }
  
  
}

com_abhi.EVENTS.addEventHandler(window, "load", function() { initFormElements("text"); }, false);