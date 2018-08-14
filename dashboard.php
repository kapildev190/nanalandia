<?php 
/*
 * Start the session
 *
 */
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSS -->
		<?php if(!isset($_SESSION)) 
			{ 
				session_start(); 
			}			
        include_once 'includes/theme/css.php'; ?>
    </head>
    <body>
        <!-- TOP HEADER -->
        <?php include_once 'includes/theme/top_header.php'; ?>
        <!-- /TOP HEADER -->

        <!-- NAVIGATION -->
        <?php include_once 'includes/theme/navigation.php'; ?>
        <!-- /NAVIGATION -->

        <?php 
		/*
		 * classes.php includes all the classes for the system
		 */
		//
		include_once 'server/request.php';
		//Create request class object (Edit)
		$request = new Request($db);
		$reqs = $request->getAllRequest($loggedUserId);
		//echo "<prE>"; print_r($req); die;
		
        include 'includes/modals/login.php';

        include 'includes/modals/register.php';
		
		include 'includes/modals/request.php';
		
		include 'includes/modals/employee.php';
        ?>
		
		<div class="misc container-fluid">
            <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
						<a href="javascript:;" onClick="Display('#employee_layout', '#content_employee');"><div class="buttons_">Nuevo Empleado</div></a>
						<h1>Mis <span>contratos</span></h1> 
							<table class="table table-striped" id="dtables">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Job Type</th>
								  <th scope="col">Age Range</th>
								  <th scope="col">Nationality</th>
								  <th scope="col">For Work</th>								  
								  <th scope="col">For Work</th>								  
								</tr>
							  </thead>
							  <tbody>
									<?php $i = 1; foreach($reqs as $key => $req){ ?>
										<tr>
											<td scope="row"><p><?php echo $i; ?></p></td>
											<td><p><?php echo $req['job_type']; ?></p></td>
											<td><p><?php echo $req['range_age_employee']; ?></p></td>
											<td><p><?php echo $req['employee_nationality']; ?></p></td>
											<td><p><?php echo $req['work_to_be_done']; ?></p></td>
											<td><p><?php echo date('m-d-Y',strtotime($req['created_at'])); ?></p></td>
										</tr>
									<?php $i++; } ?>
								
							  </tbody>
							</table>
<div class="clearfix"></div>

							<!--ul class="pagination pull-right">
								<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
							</ul-->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
						<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input class="form-control " type="text" placeholder="Mohsin">
						</div>
						<div class="form-group">
							<input class="form-control " type="text" placeholder="Irshad">
						</div>
						<div class="form-group">
							<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
						</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
					</div>
				</div>
				<!-- /.modal-content --> 
			</div>
			<!-- /.modal-dialog --> 
		</div>

		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
						<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
					</div>
					<div class="modal-footer ">
						<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
					</div>
				</div>
				<!-- /.modal-content --> 
			</div>
			<!-- /.modal-dialog --> 
		</div>
		<!-- FOOTER -->
        <?php include_once 'includes/theme/footer.php'; ?>
        <!-- /FOOTER -->

        <!-- SCRIPT -->
        <?php include_once 'includes/theme/script.php'; ?>
    </body>
</html>
