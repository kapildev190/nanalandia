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
        include_once 'includes/theme/css.php';
		
		?>

  
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
		$employee = new Employee($db);
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
				<div class="">
                	<!--<div class="buttons_" >Contratar</div>-->
                    <a href="javascript:;" onClick="Display('#employee_layout', '#content_employee');"><div class="buttons_">Nuevo Empleado</div></a>
					<h1>Mis <span>Empleados</span></h1> 			
					<table class="table" id="dtableo">
					  <thead>
					    <tr>
					      <th>No.</th>
					      <th>Nombre</th>
					      <th>Fecha</th>
					      <th>Estatus</th>
					      <th></th>
					    </tr>
					  </thead>
					  <tbody>
					    <!--tr>
					      <td><p>0006</p></td>
					      <td><p>Juan Roberto Casimiro Perez</p></td>
					      <td><p>27-07-2018</p></td>
					      <td><p class="redc">Pendiente pago</p></td>
					      <td><p class="subir"><a href="#">Subir Comprobante</a></p></td>
					    </tr-->
						<?php $i = 1; foreach($emps as $key => $emp){ ?>
							<tr>
								<td scope="row"><p><?php echo $i; ?></p></td>
								<td><p><?php echo $emp['fullname']; ?></p></td>
								<td><p><?php echo $emp['cellphone']; ?></p></td>
								<td><p><?php echo $emp['academic_level']; ?></p></td>
								<td><p><?php echo $emp['marital_status']; ?></p></td>
							</tr>
						<?php $i++; } ?>
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