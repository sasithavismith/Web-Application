// Input fields
const full_name = document.getElemenyById('full_name');
const designation = document.getElemenyById('designation');
const department = document.getElemenyById('department');
const faculty = document.getElemenyById('faculty');
const tel = document.getElemenyById('tel');
const email = document.getElemenyById('email');
const event = document.getElemenyById('event');
const country = document.getElemenyById('country');
const period = document.getElemenyById('period');
const title = document.getElemenyById('title');
//Form
const form = document.getElementById('myForm');
//Validation colors
const green = '#4CAF50';
const red = '#F44336';

function validatefull_name(){
    //check if is empty
    if(checkIfEmpty(full_name)) return;
    // is if it has only letters
    if(!checkIfOnlyLetters(full_name)) return;
    return true;
}
 function checkIfEmpty(field){
     if(isEmpty(field.value.trim())){
         //set field Invalid
         setInvalid(field, '${field.name} must not be empty');
         return true;

     }else{
         //set field Valid
         setValid(field);
         return false;
     }
 }
 function isEmpty(value){
     if(value === '')
     return true;
     return false;
 }
 function setInvalid(field, message){
     field.className = 'Invalid';
     field.nextElementSibling.innerHTML = message;
     field.nextElementSibling.style.color = red; 
 }
 function setValid(field, message){
    field.className = '';
    field.nextElementSibling.innerHTML = message;
    //field.nextElementSibling.style.color = green; 
}
function checkIfOnlyLetters(field){
    if(/^[a-zA-Z ]+$/.test(field.value)){
        setValid(field);
        return true;
    }else{
        setInvalid(field, '${field.name} must contain only letters');
        return false;
    }
}