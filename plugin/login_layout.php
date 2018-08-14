<!--LOGIN POP-->
<div id="content-window-light-box" class="overall_class">
            	
            	<div id="content-login-box" style="transition: 0.5s; margin-top: 10%;">
                	<div class="close_icon_group" onclick="Close('#content-window-light-box', '#content-login-box');"></div>
                	<h2>Iniciar <span>Sesión</span></h2>
                    
                    <form id="login_form">
                    <div class="content-input" style="width:100%;">
                        <div class="text-desc">Nombre de Usuario</div>
                        <input type="text" class="input" value="" name="username" id="username" placeholder="Nombre de usuario" autocomplete="off">
                    </div>
                    
                    <div class="content-input" style="width:100%;">
                        <div class="text-desc">Contraseña</div>
                        <input type="password" class="input" value="" name="password" id="password" placeholder="Contraseña" autocomplete="off">
                    </div>
                    <!--<div class="txt">Aun no tienes cuenta?</div>-->
                    <input type="button" style="margin-bottom:0;" onclick="" value="Iniciar Sesión">
                    		
                    <div class="txt">Aun no tienes cuenta?</div>
                    <input type="button" style="margin-bottom:0;" onClick="Display('#register_layout','#content_register')" value="Registrate">
                    </form>
                </div>
            </div>

<!--END POP-->
