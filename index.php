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
        include 'includes/modals/login.php';

        include 'includes/modals/register.php';
		
		include 'includes/modals/request.php';
		
        ?>

        <!-- MAIN CONTENT -->
        <div class="container-fluid hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="title">
                            <h2>Contratar personal</h2>
                            <h1>Nunca ha sido tan fácil</h1>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
						<?php if( $loggedUserId > 0 ){
							?>
							<p class="mainbtn"><a href="javascript:;" onClick="Display('#makerequest', '#content_makerequest');">Solicitar domestica</a></p>
							<?php } else{ ?>
							<p class="mainbtn"><a href="javascript:;" onclick="Display('#content-window-light-box', '#content-login-box')">Solicitar domestica</a></p>		
							<?php	} ?>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>Clic aquí si estas buscando una trabajadora domestica</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid secst2">
            <div class="velikacrta"></div>
            <div class="">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="cont">
                            <h1><span>¿Por qué</span> elegirnos?</h1>
                            <div class="crta"></div>
                            <p>Has pensado en lo difícil que es contratar a una persona para que trabaje en tu casa y cuide a tus hijos?</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="cont">
                            <h1><span>¿Cómo</span> trabajamos?</h1>
                            <div class="crta"></div>
                            <p>Has pensado en lo difícil que es contratar a una persona para que trabaje en tu casa y cuide a tus hijos?</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="cont">
                            <h1><span>¿Por qué</span> elegirnos?</h1>
                            <div class="crta"></div>
                            <p>Has pensado en lo difícil que es contratar a una persona para que trabaje en tu casa y cuide a tus hijos?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid sectores ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h1>Sectores a los que damos servicio</h1>
                        <p>Danos tu confianza y nosotros te daremos lo que necesitas...</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul>
                            <li><div class="cont"><img src="assets/img/iconinli1.png" alt=""><p>Casas</p></div></li>
                            <li><div class="cont"><img src="assets/img/iconinli2.png" alt=""><p>Oficinas</p></div></li>
                            <li><div class="cont"><img src="assets/img/iconinli3.png" alt=""><p>Apartamentos</p></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid contratar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h1>Contratar es más fácil con Nanalandia</h1>
                        <p>Has pensado en lo difícil que es contratar a una persona para que trabaje en tu casa y cuide a tus hijos?</p>
                    </div>
                    <div class="col-lg-5 col-lg-push-1 col-md-5 col-md-push-1">
                        <div class="crtica"></div>
                        <p class="btn2"><a href="javascript:;" onClick="Display('#register_layout', '#content_register')">Quiero registrarme</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /MAIN CONTENT -->

        <!-- FOOTER -->
        <?php include_once 'includes/theme/footer.php'; ?>
        <!-- /FOOTER -->

        <!-- SCRIPT -->
        <?php include_once 'includes/theme/script.php'; ?>
    </body>
</html>
