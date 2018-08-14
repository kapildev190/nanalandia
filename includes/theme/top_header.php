<?php
$root  = "http://".$_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

echo '<div class="container-fluid topmenu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p> Santo Domingo , República Dominicana   -  agenciananalandia@gmail.com  <span>829-641-3458</span></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid aftermenuwhiteline">

        </div>
    ';
