<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
     User Rights
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Rights</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="">
							
						<div class=" row ">
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">User name</label>
									<div class="col-md-8">
										<select class="form-control">
											<option>Admin</option>
											<option>Lab</option>
											<option>Lab</option>
										</select>
									</div>
								</div> 
							<div class="form-group">
							<label class="col-lg-4 control-label">Module name</label>
							<div class="col-lg-8">
							<select class="form-control select2" multiple="multiple" data-placeholder="Select Module name" >
							  <option>Admin</option>
							  <option>OP</option>
							  <option>Diag</option>
							
							</select>
						  </div>
						  </div>
						  <div class="form-group">
							<label class="col-lg-4 control-label">Description</label>
							<div class="col-lg-8">
							 <div class="panel-group" id="faqAccordion">
								<div class="panel panel-default ">
									<div class="panel-heading accordion-toggle question-toggle collapsed">
										 <h4 class="panel-title">
										 <div class="row">
											<a href="#" class="ing"> 
											<div class="checkbox col-md-1">
											  <label><input type="checkbox" value=""> </label>
											</div> 
											<span  class="col-md-10 mt-3" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">General Master</span></a>
											</div>
									  </h4>

									</div>
									<div id="question0" class="panel-collapse collapse" style="height: 0px;">
										<div class="panel-body">
											 <div class="checkbox">
											  <label><input type="checkbox" value="">States</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">District</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>City</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Department</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Specialty</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Doctors</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Refferal Doctor</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Organization</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Users</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Users Rights</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Roles</label>
											</div>
											
										</div>
									</div>
								</div>
								<div class="panel panel-default ">
									<div class="panel-heading accordion-toggle collapsed question-toggle" >
										 <h4 class="panel-title">
										  <div class="row">
											<a href="#" class="ing"> 
											<div class="checkbox col-md-1">
											  <label><input type="checkbox" value=""> </label>
											</div> 
											<span  class="col-md-10 mt-3" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">OP Module</span></a>
											</div>
											
										
									  </h4>

									</div>
									<div id="question1" class="panel-collapse collapse" style="height: 0px;">
										<div class="panel-body">
											 <div class="checkbox">
											  <label><input type="checkbox" value="">Procedure Type</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">Procedures</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>OP Packages</label>
											</div>
											
										</div>
									</div>
								</div>
								<div class="panel panel-default ">
									<div class="panel-heading accordion-toggle collapsed question-toggle">
										 <h4 class="panel-title">
										  <div class="row">
											<a href="#" class="ing"> 
											<div class="checkbox col-md-1">
											  <label><input type="checkbox" value=""> </label>
											</div> 
											<span  class="col-md-10 mt-3"  data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">IP Module</span></a>
											</div>
										 
										 
											
									  </h4>

									</div>
									<div id="question2" class="panel-collapse collapse" style="height: 0px;">
										<div class="panel-body">
											  <div class="checkbox">
											  <label><input type="checkbox" value="">floors</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">Room Type</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Rooms</label>
											</div>  
											<div class="checkbox">
											  <label><input type="checkbox" value="">Beds</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">IP services types</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Services Master</label>
											</div>	
											<div class="checkbox">
											  <label><input type="checkbox" value="">Machine Equipment</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">Room Type</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Room Type</label>
											</div>  
											<div class="checkbox">
											  <label><input type="checkbox" value="">Operation Type</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">Operation Master</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Theatre master</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">Packages</label>
											</div>
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Discharge Template</label>
											</div>  
											<div class="checkbox">
											  <label><input type="checkbox" value="">Discharge Parameter</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">Design Template</label>
											</div>
										
										</div>
									</div>
								</div>
								<div class="panel panel-default ">
									<div class="panel-heading accordion-toggle collapsed question-toggle" >
										 <h4 class="panel-title">
										 
										   <div class="row">
											<a href="#" class="ing"> 
											<div class="checkbox col-md-1">
											  <label><input type="checkbox" value=""> </label>
											</div> 
											<span  class="col-md-10 mt-3"  data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">Lab</span></a>
											</div>
											
											
									  </h4>

									</div>
									<div id="question3" class="panel-collapse collapse" style="height: 0px;">
										<div class="panel-body">
											<div class="checkbox disabled">
											  <label><input type="checkbox" value="" disabled>Investigations</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" value="">Packages</label>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						  </div>
						  </div>
							
						</div>
						 
				
								
							
						<div class="clearfix">&nbsp;</div>
							
							<div class="form-group">
								<div class="col-lg-6 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Add User Rights</button>
								</div>
							</div>
						</form>
						
						
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!--/.col (right) -->
</div>
<!-- /.row -->
</section> <script type="text/javascript">
	      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><div class='form-group col-md-12'><div class=''><input name='user"+i+"' type='text' placeholder='Enter Specialty Name' class='form-control input-md mt-2'  /></div></div> </td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });
</script>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		 //Timepicker
	    $(".timepicker").timepicker({
	      showInputs: false
	    });
	    // Generate a simple captcha
	    function randomNumber(min, max) {
	        return Math.floor(Math.random() * (max - min + 1) + min);
	    };
	    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
	
	    $('#defaultForm').bootstrapValidator({
	//        live: 'disabled',
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            firstName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The first name is required and cannot be empty'
	                    }
	                }
	            },
	            lastName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The last name is required and cannot be empty'
	                    }
	                }
	            },
	            shopname: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The shopname is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    },
	                    remote: {
	                        type: 'POST',
	                        url: 'add-seller.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            },
				 ownername: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The ownername is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    },
	                    remote: {
	                        type: 'POST',
	                        url: 'add-seller.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            },
				email: {
	                validators: {
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    }
	                }
	            },
	            
	            shopname: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The shopname is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    },
	                    remote: {
	                        type: 'POST',
	                        url: 'add-seller.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            } ,
				mobilenumber: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The mobilenumber is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9@_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    },
	                    remote: {
	                        type: 'POST',
	                        url: 'add-seller.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            },
	            confirmPassword: {
	                validators: {
	                    notEmpty: {
	                        message: 'The confirm password is required and cannot be empty'
	                    },
	                    identical: {
	                        field: 'password',
	                        message: 'The password and its confirm are not the same'
	                    },
	                    different: {
	                        field: 'username',
	                        message: 'The password cannot be the same as username'
	                    }
	                }
	            },
	             address: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The shopname is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 300,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    
	                    remote: {
	                        type: 'POST',
	                        url: 'add-seller.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            },
	            'languages[]': {
	                validators: {
	                    notEmpty: {
	                        message: 'Please specify at least one language you can speak'
	                    }
	                }
	            },
	            'programs[]': {
	                validators: {
	                    choice: {
	                        min: 2,
	                        max: 4,
	                        message: 'Please choose 2 - 4 programming languages you are good at'
	                    }
	                }
	            },
	            captcha: {
	                validators: {
	                    callback: {
	                        message: 'Wrong answer',
	                        callback: function(value, validator) {
	                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
	                            return value == sum;
	                        }
	                    }
	                }
	            }
	        }
	    });
	
	    // Validate the form manually
	    $('#validateBtn').click(function() {
	        $('#defaultForm').bootstrapValidator('validate');
	    });
	
	    $('#resetBtn').click(function() {
	        $('#defaultForm').data('bootstrapValidator').resetForm(true);
	    });
	});
</script>
<?php include( "footer.php"); ?>