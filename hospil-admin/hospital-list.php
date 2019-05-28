<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Hospital List 
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">List</li>
		</ol>
	</section>
	<section class="content ">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12 bg-white">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title pull-left">Hospital List</h3>
						
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div style="padding:20px;">
					<div class="row table-responsive">
						<table id="example1" class="display" style="width:100%">
        <thead>
		
            <tr>
                <th>SNo</th>
                <th>Hospital Name</th>
                <th>Register Name</th>
                <th>Website Address</th>
                <th>Email Id</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Confirm Password</th>
            </tr>
			
        </thead>
        <tbody>
           
            <tr>
                <th>1</th>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
            </tr> 
			<tr>
                <th>1</th>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
            </tr>
			<tr>
                <th>1</th>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
            </tr>
        </tbody>

    </table>	
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
	
</div>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php include( "footer.php"); ?>
