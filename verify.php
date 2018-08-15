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
		$user = new Users($db);
		$token = isset($_REQUEST['token']) ? $_REQUEST['token'] : '';
		
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
					<h1>Account Verification</h1> 			
					<table class="table" id="dtableo">
					  <tbody>
					  <?php if($token == '' ){ ?>
							<tr> <td colspan="5" align="center"> <p> Invalid link. </p></td> </tr>	
						<?php }
						else
						{
							$userData = $user->checkUserToken($token);
							if( !empty($userData))
							{
								if( $user->changeUserStatus($userData['id'],1) )
								{ ?>
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<strong>Success! </strong>Your account is verified now. Please login with your credentials.
									</div>
								<?php }
								else
								{ ?>
									<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<strong>Warning! </strong>Something weent wrong. Please try again.
									</div>
								<?php }
							}
							else
							{ ?>
								<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<strong>Warning! </strong>The verification link is Invalid.
								</div>	
							<?php }
						} ?>
					   
					  </tbody>
					</table>
				</div>
			</div>
		</div>
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