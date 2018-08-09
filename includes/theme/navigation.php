<?php
echo '<header role="banner" class="navbar navbar-fixed-top navbar-default forborder" style="">
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
                    <div class="navbar-brand">
                        <a href="#"><img src="assets/img/logo.png" title="Nanalandia" width="400" alt="Nanalandia"></a>
                    </div>
                </div>   

                <div class="navbar-default side-collapse in">
                    <nav id="navbar"  role="navigation" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <li>
                                <a href="#"><p>Inicio</p><div class="crta"></div></a>
                            </li>
                            <li>
                                <a href="#"><p>Nosotros</p><div class="crta"></div></a>
                            </li>
                            <li>
                                <a href="#"><p>Blog</p><div class="crta"></div></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" onClick="Display(\'#content-window-light-box\', \'#content-login-box\')" class="btnmenu"><img src="assets/img/iconmenubtn.png" alt="iconmenubtn"><div class="crtica"></div>Ingresar</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    ';

