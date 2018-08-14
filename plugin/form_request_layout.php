<div class="overall_class" id="makerequest">
    <div id="content_makerequest" style=" transition: 0.5s; margin-top: 10%;">
                        <!--Close Button-->
                        <div class="close_icon_group" onClick="Close('#makerequest', '#content_makerequest');"></div>
                            <h2>Formulario de <span>Contratación</span></h2>
                               <p class="text-desc" style=" padding-bottom:16px; line-height:1.5">
                               Complete el siguiente formulario con la informacion solicitada para conocer el perfil del personal que precisa. Una vez hecho esto, sera contactado por nuestro equipo lo antes posible.
                                </p>
                           
                           <div class="content-input">
                                <div class="text-desc"><strong>Tipo de vivienda *</strong></div>
                               
                                <select class="select_group" name="housing_type" id="housing_type" style="margin-top:10px; margin-bottom:10px">
                                        <option value="0">Seleccionar respuesta</option>
                                        <option value="1">Casa <!--House--></option>
                                        <option value="2">Apartamento <!--Apartment--></option>
                                </select>
                                
                                
                            </div>
                            
                            <div class="content-input">
                                    <div class="text-desc"><strong>Niveles de la vivienda *</strong></div>
                                    <input type="number" class="input" value="" name="floor_number" id="floor" placeholder="Niveles" autocomplete="off">
                            </div>
                            
                            
                            <div class="content-input">
                                    <div class="text-desc"><strong>Cantidad de habitaciones *</strong></div>
                                    <input type="number" class="input" value="" name="bedrooms_number" id="bedrooms" placeholder="habitacines" autocomplete="off">
                            </div>
                            
                            
                            <div class="content-input">
                                    <div class="text-desc"><strong>M² (Aproximación) *</strong></div>
                                    <input type="number" class="input" value="" name="square_meter" id="square_meter" placeholder="M²" autocomplete="off">
                            </div>
                            
                            
                            <div class="content-input">
                                    <div class="text-desc"><strong>Cuantas personas viven en la casa?</strong></div>
                                    <input type="number" class="input" value="" name="people_in_house" id="people_in_house" placeholder="" autocomplete="off">
                            </div>
                            
                            
                            <div class="content-input">
                                <div class="text-desc"><strong>Hijos?*</strong></div>
                               
                                <select class="select_group" name="children" id="children" style="margin-top:10px; margin-bottom:10px">
                                        <option value="0">Seleccionar respuesta</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                </select>
                                
                                
                            </div>
                            
                            
                            <div class="content-input">
                                    <div class="text-desc"><strong>Cantidad de niños*</strong></div>
                                    <input type="number" class="input" value="" name="children_number" id="children_number" placeholder="Cantidad" autocomplete="off">
                            </div>
                            
                            
                            <div class="content-input">
                                    <div class="text-desc"><strong>Edad</strong></div>
                                    <input type="number" class="input" value="" name="age" id="age" placeholder="Edad" autocomplete="off">
                            </div>
                            
                            
                            
                                   
                            
                            <div id="personal-data">
                            
                                 <div class="content-input" style="padding-top:5px; margin-bottom:18px;">
                                    <div class="text-desc" style="margin-bottom:15px;">
                                    <strong><strong>Mascota en casa?</strong></strong>
                                 </div>
                                   		
                                        <label class="container_" value="" name="dog" id="dog">Perros
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        <label class="container_" value="" name="bird" id="bird">Aves
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        <label class="container_" value="" name="cat" id="cat">Gatos
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        
                                </div>
                                
                                
                                <div class="content-input">
                                    	
                                        
                                        
                                        <label class="container_" value="" name="no-pet" id="no-pet">Ninguno
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        <label class="container_" value="" name="other" id="other">Otro
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                  <input type="text" class="input" value="" name="other_pet" id="other_pet" placeholder="Otra Mascota" autocomplete="off">
                                </div>
                                
                                
                                <div class="content-input">
                                <div class="text-desc"><strong>Cantidad de mascotas en casa</strong></div>
                               
                                    <select class="select_group" name="housing_type" id="housing_type" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                    </select>
                                
                                
                               </div>
                            
                               <div class="content-input">
                                <div class="text-desc"><strong>Servicio Domestico Actual *</strong></div>
                               
                                    <select class="select_group" name="employee_type" id="employee_type" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="1">si</option>
                                            <option value="2">no</option>
                                    </select>
                                
                                
                               </div>
                           	   <h2>Perfil empleada</h2>
                               
                               <div class="content-input">
                                <div class="text-desc"><strong>Seleccione el Tipo de Personal que busca. *</strong></div>
                               
                                 <select class="select_group" name="job_type" id="job_type" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Niñera">Niñera</option>
                                            <option value="Domestica">Domestica</option>
                                            <option value="Todologa">Todologa</option>
                                            <option value="Chofer">Chofer</option>
                                            <option value="Jardinero">Jardinero</option>
                                            <option value="Enfermera">Enfermera</option>
                                    </select>
                                
                                
                               </div>
                               
							   <div class="content-input">
                                <div class="text-desc"><strong>Rango de Edad de la Empleada *</strong></div>
                               
                                 <select class="select_group" name="range_age_employee" id="range_age_employee" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="18-25">18-25</option>
                                            <option value="25-30">25-30</option>
                                   <option value="30-35">30-35</option>
                                   <option value="35+">35+</option>
                                    </select>
                                
                                
                               </div>
                               
                               <div class="content-input">
                                <div class="text-desc"><strong>Nacionalidad de la empleada *</strong></div>
                               
                                 <select class="select_group" name="employee_nationality" id="employee_nationality" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Dominicana">Dominicana</option>
                                            <option value="Haitiana">Haitiana</option>
                                            <option value="Venezonala">Venezonala</option>
                                            <option value="Indiferente">Indiferente</option>
                                    </select>
                                
                                
                               </div>
                               
                               <div class="content-input">
                                <div class="text-desc"><strong>Nivel academico</strong></div>
                               
                                 <select class="select_group" name="academic_level" id="academic_level" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Básico">Básico</option>
                                            <option value="Bachiller">Bachiller</option>
                                            <option value="Universitario">Universitario</option>
                                            <option value="Técnico">Técnico</option>
                                    </select>
                                
                                
                               </div>
                               
                               <div class="content-input">
                                <div class="text-desc"><strong>Experiencia laboral</strong></div>
                               
                                    <select class="select_group" name="academic_level" id="academic_level" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                      <option value="Si">Si</option>
                                      <option value="No">No</option>
                                    </select>
                                
                                
                               </div>
                               
                              <div class="content-check-box">
                                    <div class="content-input" style="padding-top:5px; margin-bottom:18px;">
                                    <div class="text-desc" style="margin-bottom:15px;">
                                    <strong><strong>Afiliacion Religiosa</strong></strong>
                                 </div>
                                   		
                                      <label class="container_" value="" name="christian">Cristiana
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="" name="catholic">Católica
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="" name="indifferent_religion">Indiferente
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        
                                </div>
                                <div class="content-input">
                                       
                                  <label class="container_" value="" name="other_religion">Otro
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                  <input type="text" class="input" value="" name="other_religion_text" id="other_religion_text" placeholder="Otra Religión" autocomplete="off">
                                </div>
                                
                              </div>
                               
                               
                               <div class="content-input">
                                <div class="text-desc"><strong>Modalidad de horario *</strong></div>
                               
                                 <select class="select_group" name="hour_modal" style="margin-top:10px; margin-bottom:10px">
                                            <option value="0">Seleccionar respuesta</option>
                                            <option value="Con Dormida">Con Dormida</option>
                                            <option value="Sin Dormida">Sin Dormida</option>
                                            <option value="Fines de semana">Fines de semana</option>
                                            <option value="3 o 4 veces por semana">3 o 4 veces por semana</option>
                                            <option value="Salida quincenal">Salida quincenal</option>
                                            
                                    </select>
                                
                                
                               </div>
                               
                               <div class="content-check-box">
                                    <div class="content-input" style="padding-top:5px; margin-bottom:18px;">
                                    <div class="text-desc" style="margin-bottom:15px;">
                                    <strong><strong>Labores a desempeñar *</strong></strong>
                                 </div>
                                   		
                                      <label class="container_" value="" name="clean">Limpiar
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="" name="wash">Lavar
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="" name="child_security">Cuidar niños
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        <label class="container_" value="" name="cook">Cocinar
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                </div>
                                <div class="content-input">
                                       
                                  <label class="container_" value="" name="iron">Planchar
                               	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                  <label class="container_" value="" name="other_job">Otro
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                        <input type="text" class="input" value="" name="other_job" placeholder="Otra Ocupación" autocomplete="off">
                                </div>
                                
                               </div>
                               
                               
                               <div class="content-input">
                                <div class="text-desc"><strong>Modalidad de horario *</strong></div>
                               
                                    <select class="select_group" name="hour_modal" style="margin-top:10px; margin-bottom:10px">
                                    		<option value="0">Seleccionar respuesta</option>
                                      <option value="Lunes-Viernes" selected="selected">Lunes-Viernes</option>
                                      <option value="Lunes-Sabados">Lunes-Sabados</option>
                                      <option value="Domingos-Viernes">Domingos-Viernes</option>
                                      <option value="Viernes-Lunes">Viernes-Lunes</option>
                                      <option value="Sabado-Lunes">Sabado-Lunes</option>
                                      <option value="Otro">Otro</option>
                                            
                                    </select>
                                
                                
                               </div>
                               
                           
                                <div class="content-input">
                                    <div class="text-desc"><strong>Hora de entrada *</strong></div>
                                  <input type="text" class="input" value="" name="starting_hour" placeholder="Hora" autocomplete="off">
                                </div>
                                
                                <div class="content-input">
                                    <div class="text-desc"><strong>Hora de Salida *</strong></div>
                                    <input type="text" class="input" value="" name="end_hour" placeholder="Hora" autocomplete="off">
                                </div>
                                
                                
                                 <div class="content-input">
                                    <div class="text-desc"><strong>Sueldo *</strong></div>
                                   <input type="text" class="input" value="" name="payment" placeholder="Sueldo" autocomplete="off">
                                </div>
                                
                                
                                <div class="content-input">
                                <div class="text-desc"><strong>Ayuda con el pasaje *</strong></div>
                               
                                  <select class="select_group" name="transport_help" style="margin-top:10px; margin-bottom:10px">
                                    		<option value="0">Seleccionar respuesta</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                            
                                    </select>
                                
                                
                               </div>
                                
                               <div class="content-check-box">
                                    <div class="content-input" style="padding-top:5px; margin-bottom:18px;">
                                    <div class="text-desc" style="margin-bottom:15px;">
                                    <strong><strong>Como escucho sobre nosotros? *</strong></strong>
                                 </div>
                                   		
                                      <label class="container_" value="facebook" name="facebook">Facebook
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="instagram" name="instagram">Instagram
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="televisión" name="tv">Televisión
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                      <label class="container_" value="" name="newspaper">Periódico
                                   	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                </div>
                                <div class="content-input">
                                       
                                  <label class="container_" value="" name="recomendation">Recomendación
                               	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                  <label class="container_" value="" name="other_listen_us">Otro
                                     	    <input type="checkbox" >
                                      	    <span class="checkmark"></span>
                                        </label>
                                        
                                  <input type="text" class="input" value="" name="other_listen_us_text" placeholder="Otra" autocomplete="off">
                                </div>
                                
                               </div> 
                               
                               <div class="fulltextcontainer">
                                 <div class="text-desc"><strong>Observacion:</strong></div>
                                 <textarea name="comments" class="input textarea" placeholder="Comentarios" autocomplete="off"></textarea>
                               </div>
                                
                               <div class="agreementcontent">
                               <label class="container_" name="agreement">Estoy de acuerdo con los <a href="#">términos del Servicio</a>
                                   	    <input type="checkbox" >
                                      	 <span class="checkmark"></span>
                               </label>
                               </div>       
                                
                                <input type="button" onClick="" value="Hacer pedito">
                                
                           </div>
                            
                            
                    </div>
                    
                   </div>