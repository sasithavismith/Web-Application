
$(document).ready(function(){
	
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			name:{
				required:true,
				name:true
			},
			full_name:{
				required:true,
				full_name:true
			},
			designation:{
				required:true,
				designation: true
			},
			department:{
				required:true,
				department: true
			},
			faculty:{
				required:true,
				faculty: true
			},
			title:{
				required:true,
				title: true
			},
			first_author:{
				required:true,
				first_author: true
			},
			corresponding_author:{
				required:true,
				corresponding_author: true
				},
			other_author:{
				required:true,
				other_author: true
			},
			journal:{
				required:true,
				journal: true
			},
			volume_and_issue_number:{
				required:true,
				volume_and_issue_number: true
			},
			date_of_acceptance:{
				required:true,
				date_of_acceptance: true
			},
			issn:{
				required:true,
				issn: true
			},
			publisher:{
				required:true,
				publisher: true
							},
			publication_fee:{
				required:true,
				publication_fee: true
				},
			file_copy:{
				required:true,
				file_copy: true
			},
			file_evidence:{
				required:true,
				file_evidence: true
			},
			file_letter:{
				required:true,
				file_letter: true
			},
			file_invoice:{
				required:true,
				file_invoice: true
			},
			date1:{
				required:true,
				date1: true
				
			},
			tel:{
				required: true,
				tel:true,
				minlength:10,
				maxlength:10
			},
			email:{
				required:true,
				email:true
			},
			country:{
				required:true,
				country:true
			},
			period:{
				required:true,
				period:true,
				maxlength:10
			},
			title:{
				required:true,
				titleb:true
			},
			date:{
				required:true,
				date:true
			},
			event:{
				required:true,
				event:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			pwd2:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
});
