<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       op procedure 
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">op procedure</li>
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
									<label class="col-lg-4 control-label">Patient Type</label>
									<div class="col-md-8">
									<select class="form-control">
											<option>op</option>
											<option>others </option>
										
										</select>
										
									</div>
								</div> 
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">MRNO</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="shopname" placeholder="Enter MR no" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Op no</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="shopname" placeholder="Enter op no" />
									</div>
								</div>
									<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Patient Name</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="shopname" placeholder="Enter Patient name" />
									</div>
								</div>
								 <div class="form-group col-md-6">
									<label class="col-lg-4 control-label"> Doctor</label>
									<div class="col-md-8">
									<select class="form-control">
											<option>Doctor1</option>
											<option>Doctor2 </option>
										
										</select>
										
									</div>
								</div> 
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label"> specialty </label>
									<div class="col-md-8">
									<select class="form-control">
											<option>specialty 1 </option>
											<option>specialty 2 </option>
										
										</select>
										
									</div>
								</div>
								 
							
						
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Date of birth</label>
									<div class="col-md-8">
												
                  <input type="text" class="form-control pull-right datepicker" >
               
							
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">age</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="shopname" placeholder="Enter Age" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Guardian</label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="shopname" placeholder="Enter Guardian" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Phone </label>
									<div class="col-md-8">
									<input type="text" class="form-control" name="shopname" placeholder="Enter Phone" />
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="col-lg-4 control-label">Address</label>
									<div class="col-md-8">
									<textarea class="form-control"></textarea>
									</div>
								</div>
								
							
								
								
								
								
								
						</div>
				<div class="row">
								<div class=" col-md-10 col-md-offset-1">
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr>
												<th class="text-center bg-primary">Op Procedure Field</th>
												<th class="text-center bg-primary">Quantity</th>
												<th class="text-center bg-primary">Charge</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td><select class="form-control select2" style="width: 100%;">
									  <option selected="selected">Alabama</option>
									  <option>Alaska</option>
									  <option>California</option>
									  <option>Delaware</option>
									  <option>Tennessee</option>
									  <option>Texas</option>
									  <option>Washington</option>
									</select></td>
												<td>
													<div class="form-group col-md-12">
														<div class="">
															<input type="text" class="form-control" name="" placeholder="Enter Quality" />
														</div>
													</div>
												</td>
												<td>
													<div class="form-group col-md-12">
														<div class="">
															<input type="text" class="form-control" name="shopname" placeholder="Enter Charge" />
														</div>
													</div>
												</td>
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class=" row">
								<div class=" col-md-10 col-md-offset-1 clearfix"> <a id="add_row" class="btn btn-primary pull-left text-white btn-xs">Add row</a>  <a id='delete_row' class="pull-right btn btn-danger text-white btn-xs">Delete row</a>
								</div>
							</div>
								
							
						<div class="clearfix">&nbsp;</div>
							
							<div class="form-group">
								<div class="col-lg-12 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Add op</button>
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
      $('#addr'+i).html("<td><div class='form-group col-md-12'><div class=''><input name='user"+i+"' type='text' placeholder='Enter Op Procedure Field' class='form-control input-md mt-2'  /></div></div> </td><td><div class='form-group col-md-12'><div class=''><input name='user"+i+"' type='text' placeholder='Enter Quality' class='form-control input-md mt-2'  /></div></div> </td><td><div class='form-group col-md-12'><div class=''><input name='user"+i+"' type='text' placeholder='Enter Charge' class='form-control input-md mt-2'  /></div></div> </td>");

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