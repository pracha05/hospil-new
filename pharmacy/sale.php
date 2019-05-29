<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
     Sale
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Sale</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="view_samplecollection.php">
							<div class=" row ">
								
									<div class=" col-md-4 ">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Patient Type</label>
											<div class="col-md-6">
												<select class="form-control">
												<option>Type</option>
												<option>Type</option>
												<option>Type</option>
												<option>Type</option>
											</select>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">UHID (SDH)</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="shopname" value="10000 "  readonly />
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Bill No</label>
											<div class="col-md-6">
												<input  class="form-control" name="shopname" value="20145" / readonly>
											</div>
										</div>
									</div>
									</div>
							
								
								<div class=" row ">
									
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Name</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="shopname" placeholder="Enter name" />
											</div>
										</div>
									</div>
								
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Age</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Age  " />
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Doctor name</label>
											<div class="col-md-6 ">
												<select class="form-control">
												<option>Name</option>
												<option>Name</option>
												<option>Name</option>
												<option>Name</option>
											</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Medicine Name</label>
											<div class="col-md-8">
												<select class="form-control">
												<option>Name</option>
												<option>Name</option>
												<option>Name</option>
												<option>Name</option>
											</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Batch No</label>
											<div class="col-md-6 bootstrap-timepicker">
												<input type="text" class="form-control" name="shopname" placeholder="Batch No" />
											</div>
										</div>
									</div>
									</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Required Quantity</label>
											<div class="col-md-6 bootstrap-timepicker">
												<input type="text" class="form-control" name="shopname" placeholder="Required Quantity" />
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Expiry Date</label>
											<div class="col-md-6 bootstrap-timepicker">
												<input type="text" class="form-control datepicker" >
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">MRP</label>
											<div class="col-md-6">
												<input type="number" class="form-control" name="shopname" placeholder="Enter MRP" />
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Amount</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Amount" />
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Tax Amount</label>
											<div class="col-md-6">
												<input type="number" class="form-control" name="shopname" placeholder="Tax Amount" />
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group ">
											<label class="col-lg-6 control-label">Manufacture By</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="shopname" placeholder="Manufacture By" />
											</div>
										</div>
									</div>
								</div>
								
							
							<div class="clearfix">&nbsp;</div>
						
								<div class="col-lg-12 text-center">
									<button type="submit" class="btn btn-primary " name="signup" value="Sign up">Add Sale</button>
								</div>	
									<div class="clearfix">&nbsp;</div>
								<div class="row bg-white">
									<div class="col-md-12">
									<table class="table table-bordered">
										<tr>
											<th>SLNo</th>
											<th>Medicine Name</th>
											<th>Rack</th>
											<th>TRAY</th>
											<th>Batch</th>
											<th>Exp.Dt</th>
											<th>Qty</th>
											<th>MRP</th>
											<th>NetAmt</th>
											<th>Taxamt</th>
										</tr>
										<tr>
											<td>01</td>
											<td>xxxx</td>
											<td>xxxx</td>
											<td>xxxx</td>
											<td>xxxx</td>
											<td>xxxx</td>
											<td>xxxx</td>
											<td>xxxx</td>
											<td>xxxx</td>
											<td>xxxx</td>
										</tr>
									</table>
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