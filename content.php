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
        <div class="content container-fluid">
            <div class="fixedrow">
                <img src="assets/img/imgcontent.jpg" class="img-responsive" alt="">
            </div>
            <div>
                <div class="row paragraph">
                    <div class="col-md-6 col-md-push-6 cont">
                        <div class="maxwidthclass">
                            <h1>Quiénes <span>somos</span></h1>
                            <p>Somos una empresa creada en el año 2017 por Marisel Berroa con el fin de poder lograr la integración de un personal confiable dentro de su hogar.</p>
                            <p>Nosotros como empresa nos sentimos comprometidos en ofrecerle el mejor servicio del mercado, brindándole una solución confiable y eficiente para su hogar en la búsqueda de un personal capacitado y calificado el cual se encargara de satisfacer sus necesidades y requerimientos que se  adecue  a su hogar y estilo de vida.</p>
                            <h1>¿Cómo <span>trabajamos?</span></h1>
                            <p>Somos una empresa creada en el año 2017 por Marisel Berroa con el fin de poder lograr la integración de un personal confiable dentro de su hogar. </p>
                            <h1>¿Cómo <span>trabajamos?</span></h1>
                            <p>Somos una empresa creada en el año 2017 por Marisel Berroa con el fin de poder lograr la integración de un personal confiable dentro de su hogar. </p>
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
