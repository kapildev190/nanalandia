<?php
echo '<!-- EMPLOYEE POPUP -->
        <div class="overall_class" id="employee_layout">
    <div id="content_employee" style=" transition: 0.5s; margin-top: 10%;">
                        <!--Close Button-->
                        <div class="close_icon_group" onClick="Close(\'#employee_layout\', \'#content_employee\');"></div>
                            <h2>Nuevo empleado perfil<span> de empleado</span></h2>
                               <p class="text-desc" style=" padding-bottom:16px; line-height:1.5">
                               Por favor observe aquí abajo las oportunidades laborales que se adapten a sus criterios y envíe su petición completando este formulario de solicitud de empleo.
                                </p>
                        <form id="employee_form">
                           <div class="content-input">
                                <div class="text-desc"><strong>Nombre completo</strong></div>
                               
                                <input type="text" class="input" value="" name="fullname" id="fullname" placeholder="Nombre completo" autocomplete="off">
                                
                            </div>
                            
                            
                           <div class="content-input">
                        		<div class="text-desc"><strong>Edad</strong></div>
                        		<input type="number" class="input" value="" name="age" id="age" placeholder="Edad" autocomplete="off">
                   		  </div> 
                          
                          
                          <div class="content-input" style="width:100%">
                                <div class="text-desc"><strong>Dirección</strong></div>
                                <input type="text" class="input" value="" name="direction" id="direction" placeholder="Dirección" autocomplete="off">
                            </div>
                          
                          
                           <div class="content-input">
                        		<div class="text-desc"><strong>Estado Civil</strong></div>
                        		<input type="number" class="input" value="" name="marital_status" id="marital_status" placeholder="Estado Civil" autocomplete="off">
                   		  </div>
                          
                          
                           <div class="content-input">
                        		<div class="text-desc"><strong>Teléfono</strong></div>
                        		<input type="number" class="input" value="" name="phone" id="phone" placeholder="Teléfono" autocomplete="off">
                   		  </div>
                          
                    
                    
                            <div class="content-input">
                                <div class="text-desc"><strong>Celular</strong></div>
                                <input type="number" class="input" value="" name="cellphone" id="cellphone" placeholder="Celular" autocomplete="off">
                            </div>
                            
                           <div class="content-input">
                                <div class="text-desc"><strong>Nivel de estudio</strong></div>
                               
                                   <select class="select_group" name="academic_level" id="academic_level" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Básico">Básico</option>
                                            <option value="Bachiller">Bachiller</option>
                                            <option value="Universitario">Universitario</option>
                                            <option value="Técnico">Técnico</option>
                                            <option value="No estudios">No estudios</option>
                                    </select>
                                
                                
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>Padece alguna enfermedad?</strong></div>
                                <input type="text" class="input" value="" name="any_desease" id="any_desease" placeholder="Enfermedad" autocomplete="off">
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>¿Para qué posición se está postulando?</strong></div>
                                  <select class="select_group" name="academic_level" id="academic_level" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Niñera">Niñera</option>
                                            <option value="Domestica" selected="selected">Domestica</option>
                                            <option value="Todologa">Todologa</option>
                                            <option value="Cocinera">Cocinera</option>
                                            <option value="Enfermera">Enfermera</option>
                                            <option value="Chofer">Chofer</option>
                                            <option value="Jardinero">Jardinero</option>
                                    </select>
                            </div>
                            
                             <div class="content-check-box">
                                    <div class="content-input" style="padding-top:5px; margin-bottom:18px;">
                                    <div class="text-desc" style="margin-bottom:15px;">
                                    <strong><strong>Que sabe usted hacer?</strong></strong>
                                 </div>
                                   		
                                      
                                        
                                      <label class="container_" value="" name="wash">Lavar
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="" name="child_care">Cuidar niños
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        <label class="container_" value="" name="cook">Cocinar
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        <label class="container_" value="" name="drive">Conducir
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                </div>
                                <div class="content-input">
                                       
                                  <label class="container_" value="" name="iron">Planchar
                               	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                  <label class="container_" value="" name="gardening">Jardineria
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                  </label>
                                  
                                  <label class="container_" value="" name="elderly_care">Cuidar Ancianos‎

                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                  </label>
                                        
                                        
                                </div>
                                
                               </div>
                               
                               <!--<div class="content-input">
                                	<div class="text-desc"><strong>Fecha de disponibilidad</strong></div>
                               		 <input type="text" class="input" value="" name="date" id="date" placeholder="dd-mm-YY" autocomplete="off">
                           	   </div>-->
                               
                            <div class="content-input">
                                <div class="text-desc"><strong>Padece alguna enfermedad?</strong></div>
                                <input type="text" class="input" value="" name="any_desease" id="any_desease" placeholder="Enfermedad" autocomplete="off">
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>¿Cuál es su situación laboral actual?</strong></div>
                                  <select class="select_group" name="employment_situation" id="employment_situation" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Empleado">Empleado</option>
                                            <option value="Desempleado">Desempleado</option>
                                            <option value="Particular">Particular</option>
                                            <option value="Estudiante">Estudiante</option>
                                            
                                    </select>
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>¿Tiene experiencia laboral?</strong></div>
                                  <select class="select_group" name="employment_experience" id="employment_experience" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            
                                    </select>
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>Con que frecuencia toma bebidas alcoholicas ?</strong></div>
                                  <select class="select_group" name="how_often_do_you_drink_alcohole" id="how_often_do_you_drink_alcohole" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Frecuentemente">Frecuentemente</option>
                                            <option value="Algunas veces">Algunas veces</option>
                                            <option value="No Consumo Bebidas Alcoholicas">No Consumo Bebidas Alcoholicas</option>
                                            
                                    </select>
                            </div>
                            <div class="content-input">
                                <div class="text-desc"><strong>Con que frecuencia usted Fuma?</strong></div>
                                  <select class="select_group" name="how_often_do_you_smoke" id="how_often_do_you_smoke" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Frecuentemente">Frecuentemente</option>
                                            <option value="Algunas veces">Algunas veces</option>
                                            <option value="No Fumo">No Fumo</option>
                                            
                                    </select>
                            </div>
                            
                            <div class="fulltextcontainer">
                                 <div class="text-desc"><strong>Explique brevemente cual ha sido su experiencia laboral</strong></div>
                                 <textarea name="comments" class="input textarea" placeholder="Comentarios" autocomplete="off"></textarea>
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>Cuanto tiempo tiene de experiencia?</strong></div>
                                  <select class="select_group" name="employment_experience_time" id="employment_experience_time" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Menos de un año">Menos de un año</option>
                                            <option value="Más de un año">Más de un año</option>
                                            <option value="No tengo experiencia">No tengo experiencia</option>
                                            
                                    </select>
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>Ha cuidado niños?</strong></div>
                                  <select class="select_group" name="employment_experience_time" id="employment_experience_time" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            
                                    </select>
                            </div>
                            
                           <div class="fulltextcontainer">
                                 <div class="text-desc"><strong>Explique brevemente cual ha sido su experiencia laboral</strong></div>
                                 <textarea name="last_job" class="input textarea" placeholder="Explique brevemente cual ha sido su experiencia laboral" autocomplete="off"></textarea>
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>En que horario desea trabajar?</strong></div>
                                  <input type="text" class="input" value="" name="hour_to_job" id="hour_to_job" placeholder="En que horario desea trabajar?" autocomplete="off">
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>Le interesa?</strong></div>
                                  <select class="select_group" name="night_or_day" id="night_or_day" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Con Dormida">Con Dormida</option>
                                            <option value="Si Dormida">Sin Dormida</option>
                                            
                                    </select>
                            </div>
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>Cuanto desea ganar?</strong></div>
                                  <input type="text" class="input" value="" name="how_much_do_you_want_earn" id="how_much_do_you_want_earn" placeholder="0.00" autocomplete="off">
                            </div>
                            
                            <div class="fulltextcontainer">
                                 <div class="text-desc"><strong>Diga 2 Referencias Laborables Nombre y Telefono</strong></div>
                                 <textarea name="work_reference" class="input textarea" placeholder="Referencia Laboral" autocomplete="off">1 -
2 -</textarea>
                            </div>
                            
                            <div class="fulltextcontainer">
                                 <div class="text-desc"><strong>Diga 2 Referencias Personales Nombre y Telefono</strong></div>
                                 <textarea name="personal_references" class="input textarea" placeholder="Referencia Personal" autocomplete="off">1 -
2 -</textarea>
                            </div>
                            
                            
                                <br />
                                <br />

                                <input type="submit" onClick="" value="Registrarme">
                                
							<div id="employee_results"></div>
                           </div>
                        </form>   
                            
                    </div>
                    
                   </div>
	';
?>