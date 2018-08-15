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
		<?php include_once 'includes/theme/css.php'; ?>  
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
		$request  = new Request($db);
		$employee = new Employee($db);
		$requests = $request->getAllRequestForDropdown('');
		$emps = $employee->getAllEmployee($loggedUserId);
		//echo "<prE>"; print_r($emps); die;
		
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
                	<!--<div class="buttons_" >Contratar</div>-->
                    <a href="javascript:;" onClick="Display('#employee_layout', '#content_employee');"><div class="buttons_">Nuevo Empleado</div></a>
					<h1>Candidates</h1> 			
					<table class="table" id="dtableo">
					  <thead>
					    <tr>
					      <th>Nombre</th>
					      <th>For Work</th>
					      <th>Status</th>
					      <th>No. Request</th>
					      <th></th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php if(empty($emps)){ ?>
								<tr> <td colspan="5" align="center"> <p> No Candidates </p></td> </tr>	
						<?php }else{
								$i = 1; foreach($emps as $key => $emp){ ?>
							<tr>
								<td scope="row"><p><?php echo ucfirst($emp['fullname']); ?></p></td>
								<td><p><?php echo $emp['position']; ?></p></td>
								<td><p class="<?php if( $emp['status'] == 1 ) echo 'redc'; else if( $emp['status'] == 2 ) echo 'purpc'; else if( $emp['status'] == 3 ) echo 'greenc';?>"><?php if( $emp['status'] == 1 ) echo 'Unemploy'; else if( $emp['status'] == 2 ) echo 'Assigned'; else if( $emp['status'] == 3 ) echo 'Hire'; ?></p></td>
								<td class="requestDropdownTd"><p>
									<select class="form-control requestDropdown">
									<?php if( !empty($requests)){?>
										<option value="" >Select Request</option>
									<?php foreach($requests as $key=>$value){?>
										<option value="<?php echo $value['id'];?>" ><?php echo trim(ucfirst($value['firstname']).' '.ucfirst($value['lastname']));?></option>
									<?php }
									}else{ ?>
										<option value="" >No Request</option>
									<?php } ?>
									</select>
								</p></td>
								<td><p class="subir"><a data-id="<?php echo $emp['id'];?>" href="javascript:;" class="assignEmployee">aplicar</a></p></td>
							</tr>
						<?php $i++; } 
						}?>
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

 <!-- SCRIPT -->
 <?php include_once 'includes/theme/script.php'; ?>
</body>
</html>