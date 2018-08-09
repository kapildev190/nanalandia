<?php
echo '<!-- REGISTER POPUP -->
        <div class="overall_class" id="register_layout">
            <div id="content_register" style="transition: 0.5s; margin-top: 5%; margin-bottom: 5%;">
                <!--Close Button-->
                <div class="close_icon_group" onclick="Close(\'#register_layout\', \'#content_register\', \'#register_form\');"></div>
                <h2>Crear<span> Cuenta</span></h2>
                <p class="text-desc" style=" padding-bottom:16px; line-height:1.5">
                    Complete el siguiente formulario con la informacion solicitada para conocer el perfil del personal que precisa. Una vez hecho esto, sera contactado por nuestro equipo lo antes posible.
                </p>
                <form id="register_form">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="input" name="firstname" id="firstname" placeholder="Nombre" autocomplete="off">               
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="input" name="lastname" id="lastname" placeholder="Apellido" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Teléfono <span class="text-danger">*</span></label>
                                <input type="number" class="input" name="phone" id="phone" placeholder="Teléfono" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Celular <span class="text-danger">*</span></label>
                                <input type="number" class="input" name="cellphone" id="cellphone" placeholder="Celular" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Dirección <span class="text-danger">*</span></label>
                        <input type="text" class="input" name="direction" id="direction" placeholder="Dirección" autocomplete="off">
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Sector <span class="text-danger">*</span></label>
                                <input type="text" class="input" name="sector" id="sector" placeholder="Sector" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Ciudad <span class="text-danger">*</span></label>
                                <input type="text" class="input" name="city" id="city" placeholder="Ciudad" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" class="input" name="email" id="email" placeholder="Email" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Contraseña <span class="text-danger">*</span></label>
                                <input type="text" class="input" name="password" id="password" placeholder="Contraseña" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Registrarme">
                    </div>
                    
                    <div id="register_results"></div>

                </form>
            </div>
        </div>
    ';