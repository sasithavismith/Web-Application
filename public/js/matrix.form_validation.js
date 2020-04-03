
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
			contact:{
				required:true,
				contact:true
			},
			abstract:{
				required:true,
				abstract:true
			},
			date_abstract:{
				required:true,
				date_abstract:true
			},
			Other_visit:{
				required:true,
				Other_visit:true
			},
			registration:{
				required:true,
				registration:true
			},
			airticket:{
				required:true,
				airticket:true
			},
			accommodation:{
				required:true,
				accommodation:true
			},
			internal:{
				required:true,
				internal:true
			},
			total_cost:{
				required:true,
				total_cost:true
			},
			Another_financial:{
				required:true,
				Another_financial:true
			},
			year1:{
				required:true,
				year1:true
			},
			country1:{
				required:true,
				country1:true
			},
			amount1:{
				required:true,
				amount1:true
			},
			year2:{
				required:true,
				year2:true
			},
			country2:{
				required:true,
				country2:true
			},
			amount2:{
				required:true,
				amount2:true
			},
			year3:{
				required:true,
				year3:true
			},
			country3:{
				required:true,
				country3:true
			},
			amount3:{
				required:true,
				amount3:true
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
