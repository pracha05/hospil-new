<?php include( "header.php"); ?>

<head>
	<link rel="stylesheet" href="../dist/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../dist/css/buttons.dataTables.min.css">
</head>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
     Purchase
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Purchase</li>
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
								<div class="col-md-12">
									<div class=" col-md-6 ">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Date</label>
											<div class="col-md-8">
												<input type="text" class="form-control pull-right datepicker">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label class="col-lg-4 control-label">Purchase Type</label>
										<div class="col-md-8">
											<label class="radio-inline">
												<input type="radio" name="optradio" checked>Direct</label>
											<label class="radio-inline">
												<input type="radio" name="optradio">PurchOrder</label>
										</div>
									</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Voucher no</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Voucher no" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Supplier</label>
											<div class="col-md-8">
												<select class="form-control">
												<option>Supplier</option>
												<option>Supplier</option>
												<option>Supplier</option>
												<option>Supplier</option>
											</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">INV no</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter INV no" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Address</label>
											<div class="col-md-8">
												<textarea class="form-control"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">DC no</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Dc no" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Sec No</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Sec no" />
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Phone Number</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Phone no" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">State Code</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter State Code" />
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
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
											<label class="col-lg-4 control-label">Quantity</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Voucher no" />
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Pack Quantity</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Pack Quantity" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Pack Rate</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Pack Rate" />
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">MRP</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter MRP" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Free Pack</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Free Pack" />
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Batch No</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Batch no" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Tax%</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter Tax%" />
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Exp Date</label>
											<div class="col-md-8">
												<input type="text" class="form-control datepicker" >
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ">
											<label class="col-lg-4 control-label">Disc</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="shopname" placeholder="Enter State Code" />
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="col-lg-12 text-center">
									<button type="submit" class="btn btn-primary toggle-vechile-info-btn" name="signup" value="Sign up">Add Purchase</button>
								</div>
							</div>
						</form>
						<div style="display:none" id="toggle-vechile-info">
							<div class="row table-responsive">
								<div class="col-md-10 col-md-offset-1">
									<table id="example" class="display" style="width:100%">
										<thead>
											<tr>
												<th>SNO</th>
												<th>Medicine Name</th>
												<th>Quality Rec</th>
												<th>Free</th>
												<th>Rate</th>
												<th>Rate/Pack</th>
												<th>Mrp</th>
												<th>Amount</th>
												<th>Batch No</th>
												<th>Exp Date</th>
												<th>Disc</th>
												<th>Tax</th>
												<th>Net Amount</th>
												<th>Pack Multi</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Donna Snider</th>
												<td>Customer Support</td>
												<td>New York</td>
												<td>27</td>
												<td>2011/01/25</td>
												<td>$112,000</td>
												<td>$112,000</td>
												<td>$112,000</td>
												<td>$112,000</td>
												<th>Donna Snider</th>
												<td>Customer Support</td>
												<td>New York</td>
												<td>27</td>
												<td>2011/01/25</td>
												<td>$112,000</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!--/.col (right) -->
</div>
<!-- /.row -->
</section>
<script>
	$(document).ready(function(){
	  $(".toggle-vechile-info-btn").click(function(){
	    $("#toggle-vechile-info").toggle();
	  });
	});
</script>
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
<script src="../dist/js/dataTables.buttons.min.js"></script>
<script src="../dist/js/buttons.print.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable( {
	        dom: 'Bfrtip',
	        buttons: [
	            'print'
	        ]
	    } );
	} );
</script>