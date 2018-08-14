<?php
$loggedUserId   = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$loggedUserType = isset($_SESSION['type']) ? $_SESSION['type'] : '';

if(isset($_SERVER['HTTPS'])){
	$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
}
else{
	$protocol = 'http';
}
//echo $protocol . "://" . $_SERVER['HTTP_HOST'].'/nanalandia';

if ((strpos($_SERVER['REQUEST_URI'],'dashboard') !== false || strpos($_SERVER['REQUEST_URI'],'employee') !== false) && $loggedUserId  == '') {
	$url = $protocol . "://" . $_SERVER['HTTP_HOST'].'/nanalandia';
	header("Location: $url");
	die();
}

?>
	<header role="banner" class="navbar navbar-fixed-top navbar-default forborder" style="">
            <div class="container">
                <div class="navbar-header">
                    <a data-toggle="collapse-side"  data-target=".side-collapse" data-target-2=".side-collapse-container">
                        <button type="button"  class="navbar-toggle pull-right collapsed" data-toggle="collapse" data-target="#navbar"  data-target-2=".side-collapse-container" data-target-3=".side-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                        </button>
                    </a>
                    <div class="navbar-brand" >
                        <a href="<?php echo $root;?>"><img src="assets/img/logo.png" title="Nanalandia"  alt="Nanalandia"></a>
                    </div>
                </div>   

                <div class="navbar-default side-collapse in">
                    <nav id="navbar"  role="navigation" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
							<?php if( $loggedUserId > 0 ){
								if( $loggedUserType == 0 ) { // customer
							?>
								<li>
									<a href="#"><p>Mis solicitudes</p><div class="crta"></div></a>
								</li>
								<li>
									<a href="javascript:;" onClick="Display('#makerequest', '#content_makerequest');"><p>Nueva solicitud</p><div class="crta"></div></a>
								</li>
							<?php }else{?>
								<li>
									<a href="dashboard.php"><p>Solicitudes</p><div class="crta"></div></a>
								</li>
								<li>
									<a href="employee.php"><p>Empleados</p><div class="crta"></div></a>
								</li>
							<?php }}else{ ?>
                            <li>
                                <a href="#"><p>Inicio</p><div class="crta"></div></a>
                            </li>
                            <li>
                                <a href="#"><p>Nosotros</p><div class="crta"></div></a>
                            </li>
                            <li>
                                <a href="#"><p>Blog</p><div class="crta"></div></a>
                            </li>
							<?php } ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
							<?php if( $loggedUserId > 0 ){ ?>
                                <a href="<?php echo $root.'logout.php';?>" class="btnmenu"><img src="assets/img/iconmenubtn.png" alt="iconmenubtn"><div class="crtica"></div>Cerrar sesión</a>
                                <?php if( $loggedUserType == 1 ){ ?>
									<a href="#section1" class="btnmenu" style="text-align:center" onClick="Display('#makerequest', '#content_makerequest')">Contratar</a>													
								<?php } ?>
							<?php } else {?>	
                                <a href="javascript:;" onClick="Display('#content-window-light-box', '#content-login-box')" class="btnmenu"><img src="assets/img/iconmenubtn.png" alt="iconmenubtn"><div class="crtica"></div>Ingresar</a>
							<?php } ?>	
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

