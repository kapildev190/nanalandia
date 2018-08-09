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
        <style>
            .navbar-default .navbar-brand a img {
                max-width: 245px!important;
                margin-top: 10px;
            }
        </style>
        <!-- TOP HEADER -->
        <?php include_once 'includes/theme/top_header.php'; ?>
        <!-- /TOP HEADER -->
        
        <!-- NAVIGATION -->
        <?php include_once 'includes/theme/navigation.php'; ?>
        <!-- /NAVIGATION -->
        
        <?php 
            include 'includes/modals/login.php';
            
            include 'includes/modals/register.php';
        ?>
        
        <!-- MAIN CONTENT -->
        <div class="contact container-fluid">
            <div class="fixedrow">
		        <div class="map">
                    <div id="googleMap" style="width:100%;height:470px;"></div>
                </div>
            </div>
            <div>
                <div class="row paragraph">
                    <div class="col-md-6 col-md-push-6 cont">
                        <div class="maxwidthclass">
                            <h1>Contactenos</h1>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="location">Avenida independencia, Plaza Ariel, tercer nivel local 301, Urb. Tropical.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="no1"><span>809-362-3328</span></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="wp"><span>829-641-3458</span></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="time">De Lunes a Viernes <br>9:00 AM - 5:00 pm</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="time">Sábados <br> 9:00 AM - 1:00 pm</p>
                                </div>
                            </div>
                            <div class="row">
                                <h1>Envíanos <span>un mensaje</span></h1>
                                <p class="p2">Contáctanos a través de nuestro formulario y estaremos respondiendo tus inquietudes.</p>
                                <div class="row">

                                    <form id="contact_form">
                                        <div class="col-md-6">
                                            <input type="text" class="input" name="name" id="name" placeholder="Nombre">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="input" name="email" id="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="input" name="telephone" id="telephone" placeholder="Teléfono">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="input" name="asunto" id="asunto" placeholder="Asunto">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" name="message" id="message" rows="3" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" name="contact" value="Enviar">
                                        </div>
                                        
                                        <div id="results" class="col-md-12"></div>
                                    </form>

                                </div>
                            </div>
                        </div>
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
