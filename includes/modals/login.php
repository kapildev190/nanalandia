<?php
echo '<!--LOGIN POP-->
        <div id="content-window-light-box" class="overall_class">  
            <div id="content-login-box" style="transition: 0.5s; top: 50%; left: 50%; transform: translate(-50%,-50%); position: absolute;">
                <div class="close_icon_group" onclick="Close(\'#content-window-light-box\', \'#content-login-box\', \'#login_form\');"></div>
                <h2>Iniciar <span>Sesión</span></h2>

                <form id="login_form">
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="text" class="input" name="email" placeholder="Email" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Contraseña <span class="text-danger">*</span></label>
                        <input type="password" class="input" name="password" placeholder="Contraseña" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Iniciar Sesión">
                    </div>
                    
                    <div id="login_results"></div>

                    <p>Aun no tienes cuenta?</p>

                    <input type="button" onClick="DisplayAndClose(\'#content-window-light-box\', \'#content-login-box\', \'#login_form\', \'#register_layout\',\'#content_register\')" value="Registrate">
                </form>
            </div>
        </div>
';