<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Add Concession
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Concession</li>
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
							
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">UHID</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Uhid" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Ip No</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Ip no" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Bill Date</label>
										<div class="col-md-8">
											<input type="text" class="form-control pull-right datepicker">
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Bill No</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Bill no" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Patient Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Patient Name" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">age</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter age" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Gender</label>
										<div class="col-md-8">
											<label class="radio-inline">
												<input type="radio" name="optradio" checked>Male</label>
											<label class="radio-inline">
												<input type="radio" name="optradio">Female</label>
										</div>
									</div>
									
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Phone No</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Bill no" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Address</label>
										<div class="col-md-8">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
								</div>
								<div class=" row ">
								<div class=" col-md-12 ">
								<div class="form-group col-md-6">
								<div class="col-md-12">
								<h3>Payments</h3>
								</div>
								</div>
								<div class="col-md-12">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Total</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Total" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Paid Amount</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Paid Amount" />
										</div>
									</div>
									</div>
									<div class="col-md-12">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Balance</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Balance" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">pre con Amount</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Amount" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Concession Amount</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Amount" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Reason</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Reason" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Con Given By</label>
										<div class="col-md-8">
											<select class="form-control">
											<option>Con Given By</option>
											<option>Con Given By</option>
											<option>Con Given By</option>
											<option>Con Given By</option>
											<option>Con Given By</option>
										</select>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">User Code</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="User Code" />
										</div>
									</div>
									
								</div>
								</div>
								<div class="clearfix">&nbsp;</div>
								<div class="form-group">
									<div class="col-lg-12 text-center">
										<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Add Concession</button>
									</div>
								</div>
						</form>
						<div class="clearfix">&nbsp;</div>
						
					</div>
					<!-- /.box -->
				</div>
			</div>
			<!--/.col (right) -->
		</div>
		<!-- /.row -->
	</section>
	<script type="text/javascript">
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