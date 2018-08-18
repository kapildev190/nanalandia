<?php 
/*
 * Start the session
 *
 */
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
$requestId = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSS -->
		<?php include_once 'includes/theme/css.php';?>
    </head>
    <body>
        <!-- TOP HEADER -->
        <?php include_once 'includes/theme/top_header.php'; ?>
        <!-- NAVIGATION -->
        <?php include_once 'includes/theme/navigation.php'; 
		/*
		 * classes.php includes all the classes for the system
		 */
		//
		include_once 'server/request.php';
		$user = new Users($db);
		if( $requestId == '' || $requestId <= 0 )
		{
			header('Location: '.$user->root.'dashboard.php');
		}		
		//Create request class object (Edit)
		$request  		= new Request($db);
		$employee 		= new Employee($db);
		$requestDetail  = $request->getRequestDetails($requestId,$loggedUserId,$loggedUserType);
		if( !$requestDetail )
		{
			header('Location: '.$user->root.'dashboard.php');
		}
		$employee 			= new Employee($db);
		$assignedEmployees 	= $employee->getAllAsignedEmployees($requestId);
		$isEmpHiredForReq   = $employee->isHiredEmployeeForRequest($requestId);
		//echo "<prE>"; print_r($assignedEmployees); die;
		
        include 'includes/modals/login.php';
        include 'includes/modals/register.php';
		include 'includes/modals/request.php';
		include 'includes/modals/employee.php';
    ?>
<div class="misc container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 cont">
					<div id="messageContainer"  ></div>
				<div class="">
                	<h1>Candidates</h1> 			
					<table class="table" id="dtableo">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
					    <?php if( !empty($assignedEmployees)){ 
							$i = 1; 
							foreach($assignedEmployees as $key => $emp){ ?>
							<tr>
								<td scope="row" class="viewCandidate" data-id="<?php echo base64_encode($emp['id']);?>"><p><?php echo ucfirst($emp['fullname']); ?></p></td>
								<td class="statusTd"><p class="<?php if( $emp['status'] == 2 ) echo 'purpc'; else if( $emp['status'] == 3 ) echo 'greenc';?>"><?php if( $emp['status'] == 2 ) echo 'Waiting'; else if( $emp['status'] == 3 ) echo 'Hire'; ?></p></td>
								<td class="hireBtnTd"><?php if(!$isEmpHiredForReq && $loggedUserType == 0 ) { if( $emp['status'] == 2 ) {?><p class="subir"><a data-requestId="<?php echo $requestId;?>" data-employeeId="<?php echo $emp['id'];?>" href="javascript:;" class="hireEmployee">Hire</a></p><?php } } ?></td>
							</tr>
						<?php $i++; } } else { ?>
							<tr><td colspan="3" align="center"><p>No candidates assigned to your request.</p></td></tr>
						<?php } ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
		<!--div class="row">
			<div class="noofpages col-md-12">
				<ul>
					<li><a href=""><i class="fas fa-angle-double-left"></i></a></li>
					<li><a href=""><i class="fas fa-angle-left"></i></a></li>
					<li><a href="" class="activeh">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href=""><i class="fas fa-angle-right"></i></a></li>
					<li><a href=""><span>33 PAG.</span></a></li>
				</ul>
			</div>
		</div-->
	</div>
</div>

<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p><span>Nanalandia</span>, todos los derechos reservados 2018, Santo Domingo República Dominicana</p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="viewCandidatePopup" role="dialog">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Candidato Details</h4>
		</div>
		
		<div class="modal-body" id="popupBody">
		</div>
		</div>
		<div class="modal-footer">					
			<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
		</div>
	  </div>
	</div>
 <!-- SCRIPT -->
 <?php include_once 'includes/theme/script.php'; ?>
</body>
</html>