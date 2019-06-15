<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Add Consultation
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Consultation</li>
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
										<div class="col-md-8"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-6 control-label"></label>
										<!--<div class="col-md-6">	<a class="btn btn-primary btn-block text-white" href="consultation-view.php">History</a>-->
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Mr No</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Mr No" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Patient Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter patient name" />
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
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
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Doctor Name</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter doctor name" />
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Doctor Amount</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter doctor amount" />
										</div>
									</div>
								</div>
								<div class=" col-md-12 ">
									<div class="form-group col-md-6">
										<label class="col-lg-4 control-label">Phone Number</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="shopname" placeholder="Enter Phone" />
										</div>
									</div>
								</div>
								
								
							</div>
					</div>
					<div class=" row ">
						<div class=" col-md-6 "></div>
					</div>
					<!--<div class=" row bg-white">
						<div class=" col-md-12 ">
							<table id="example" class="table table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>SRNo</th>
										<th>Medicine name</th>
										<th>Qty (pieces)</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>1</th>
										<td>paracetamol</td>
										<td>30</td>
										
									</tr>
								</tbody>
							</table>
						</div>
					</div>-->
					<div class="clearfix">&nbsp;</div>
					<div class="form-group">
						<div class="col-lg-12 text-center">
							
							<div class="col-lg-12 text-center">	<a type="button" name="signup" value="sign up" class="btn btn-primary " data-toggle="modal" data-target="#consult">Add </a>  <a id="patient-reg-btn" style="color:blue;font-size:25px;cursor:pointer"><i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
									</div>
						</div>
					</div>
					</form>
						<div class="clearfix">&nbsp;</div>
								<div class=" col-md-12 ">
									<div class="modal-dialog modal-lg" id="patient-reg" style="display:none">
										<div class="modal-content">
											<div class="modal-header bg-danger">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title text-center ">PATIENT REGISTRATION</h4>
											</div>
											<div class="modal-body">
												<form>
													<div class="row table_margin">
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="Total Amount" />
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="Concession" />
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="Paid Amount" />
														</div>
													</div>
													<div class="row table_margin">
														
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="Balance" />
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="Concession Reason" />
														</div>
														<div class="col-md-4">
															<select class="form-control">
																<option>Concession Given By</option>
																<option>emergency</option>
																<option>case type1</option>
																<option>case type1</option>
															</select>
														</div>
													</div>
												
													<div class="row table_margin">
														<div class="col-md-6">
															<input type="text" class="form-control" placeholder="User Code" />
														</div>
														<div class="col-md-6">
															<select class="form-control">
																<option>Mode</option>
																<option>normal</option>
																<option>emergency</option>
																<option>case type1</option>
																<option>case type1</option>
															</select>
														</div>
													</div>
													<div class="row table_margin">
														<div class="col-md-12 text-center">
															<button type="button" class="btn btn-danger">Register</button>
														</div>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
				</div>
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
	<script type="text/javascript">
		$("#patient-reg-btn").click(function(){
		  $("#patient-reg").toggle();
		});
	</script>
<?php include( "footer.php"); ?>