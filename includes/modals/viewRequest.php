<?php $data = $_POST['data']; echo  "<pre>"; print_r($data); echo "</pre>";

[id] => 1
    [user_id] => 5
    [housing_type] => 1
    [floor_number] => 123
    [bedrooms_number] => 12
    [square_meter] => 123
    [people_in_house] => 10
    [children] => 2
    [children_number] => 10
    [age] => 15
    [pets] => dog
    [other_pet] => 
    [no_of_pets] => 2
    [employee_type] => 2
    [job_type] => Jardinero
    [range_age_employee] => 18-25
    [employee_nationality] => Haitiana
    [academic_level] => Bachiller
    [work_experience] => Si
    [religious_affiliation] => christian
    [other_religion_text] => 
    [hour_modal] => Con Dormida
    [work_to_be_done] => clean
    [other_job] => 
    [day_modal] => Domingos-Viernes
    [starting_hour] => 10
    [end_hour] => 15
    [payment] => 1000
    [transport_help] => Si
    [hear_about] => facebook
    [other_listen_us_text] => 
    [comments] => hi this is testing
    [terms] => on
    [created_at] => 2018-08-17 21:51:06
    [modified_at] => 2018-08-17 21:51:06
    [status] => 1
    [path] => 1534522981_1

 ?>
<form id="request_form">
   <div class="content-input">
		<div class="text-desc"><strong>Tipo de vivienda *</strong></div>
	   
		<select class="select_group" name="housing_type" id="housing_type" style="margin-top:10px; margin-bottom:10px">
				<option value="0">Seleccionar respuesta</option>
				<option value="1" <?php if( $data['housing_type'] == '1'){ echo 'selected';} ?>  >Casa <!--House--></option>
				<option value="2" <?php if( $data['academic_level'] == '2'){ echo 'selected';} ?> >Apartamento <!--Apartment--></option>
		</select>
		
	</div>
	
	<div class="content-input">
			<div class="text-desc"><strong>Niveles de la vivienda *</strong></div>
			<input type="number" class="input" value="<?php echo $data['floor_number'];?>" name="floor_number" id="floor" placeholder="Niveles" autocomplete="off">
	</div>
	
	
	<div class="content-input">
			<div class="text-desc"><strong>Cantidad de habitaciones *</strong></div>
			<input type="number" class="input" <?php echo $data['bedrooms_number'];?>" name="bedrooms_number" id="bedrooms" placeholder="habitacines" autocomplete="off">
	</div>
	
	
	<div class="content-input">
			<div class="text-desc"><strong>M² (Aproximación) *</strong></div>
			<input type="number" class="input" <?php echo $data['square_meter'];?>" name="square_meter" id="square_meter" placeholder="M²" autocomplete="off">
	</div>
	
	
	<div class="content-input">
			<div class="text-desc"><strong>Cuantas personas viven en la casa?</strong></div>
			<input type="number" class="input" <?php echo $data['people_in_house'];?>" name="people_in_house" id="people_in_house" placeholder="" autocomplete="off">
	</div>
	
	
	<div class="content-input">
		<div class="text-desc"><strong>Hijos?*</strong></div>
	   
		<select class="select_group" name="children" id="children" style="margin-top:10px; margin-bottom:10px">
				<option value="0">Seleccionar respuesta</option>
				<option value="1" <?php if( $data['children'] == '1'){ echo 'selected';} ?>>Si</option>
				<option value="2" <?php if( $data['children'] == '2'){ echo 'selected';} ?>>No</option>
		</select>
		
		
	</div>
	
	
	<div class="content-input">
			<div class="text-desc"><strong>Cantidad de niños*</strong></div>
			<input type="number" class="input" <?php echo $data['children_number'];?>" name="children_number" id="children_number" placeholder="Cantidad" autocomplete="off">
	</div>
	
	
	<div class="content-input">
			<div class="text-desc"><strong>Edad</strong></div>
			<input type="number" class="input" <?php echo $data['age'];?>" name="age" id="age" placeholder="Edad" autocomplete="off">
	</div>
	
	
	
		   
	
	<div id="personal-data">
	
		 <div class="content-input" style="padding-top:5px; margin-bottom:18px;">
			<div class="text-desc" style="margin-bottom:15px;">
			<strong><strong>Mascota en casa?</strong></strong>
		 </div>
				
				<label class="container_" value="" name="dog" id="dog">Perros
					<input type="checkbox" name="pets" value="dog" <?php if( $data['pets'] == 'dog' ) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
				
				<label class="container_" value="" name="bird" id="bird">Aves
					<input type="checkbox" name="pets" value="bird" <?php if( $data['pets'] == 'bird' ) echo 'checked';?>>
					<span class="checkmark"></span>
				</label>
				
				<label class="container_" value="" name="cat" id="cat">Gatos
					<input type="checkbox" name="pets" value="cat" <?php if( $data['pets'] == 'cat' ) echo 'checked';?>>
					<span class="checkmark"></span>
				</label>
				
				
		</div>
		
		
		<div class="content-input">
			<label class="container_" value="" name="no-pet" id="no-pet">Ninguno
				<input type="checkbox" name="pets" value="no-pet" <?php if( $data['pets'] == 'no-pet' ) echo 'checked';?>>
				<span class="checkmark"></span>
			</label>
			<label class="container_" value="" name="other" id="other">Otro
				<input type="checkbox" name="pets" value="other" <?php if( $data['pets'] == 'other' ) echo 'checked';?>>
				<span class="checkmark"></span>
			</label>                                        
			<input type="text" class="input" value="<?php echo $data['floor_number'];?>" name="other_pet" id="other_pet" placeholder="Otra Mascota" autocomplete="off">
		</div>
		
		<div class="content-input">
		<div class="text-desc"><strong>Cantidad de mascotas en casa</strong></div>                               
			<select class="select_group" name="no_of_pets" id="no_of_pets" style="margin-top:10px; margin-bottom:10px">
					<option value="0">Seleccionar respuesta</option>
					<option value="1" <?php if( $data['no_of_pets'] == '1'){ echo 'selected';} ?>>1</option>
					<option value="2" <?php if( $data['no_of_pets'] == '2'){ echo 'selected';} ?>>2</option>
					<option value="3" <?php if( $data['no_of_pets'] == '3'){ echo 'selected';} ?>>3</option>
					<option value="4" <?php if( $data['no_of_pets'] == '4'){ echo 'selected';} ?>>4</option>
					<option value="5" <?php if( $data['no_of_pets'] == '5'){ echo 'selected';} ?>>5</option>
			</select>
	   </div>
	
	   <div class="content-input">
			<div class="text-desc"><strong>Servicio Domestico Actual *</strong></div>                               
			<select class="select_group" name="employee_type" id="employee_type" style="margin-top:10px; margin-bottom:10px">
				<option value="0">Seleccionar respuesta</option>
				<option value="1" <?php if( $data['employee_type'] == '1'){ echo 'selected';} ?>>si</option>
				<option value="2" <?php if( $data['employee_type'] == '2'){ echo 'selected';} ?>>no</option>
			</select>
	   </div>
	   <h2>Perfil empleada</h2>
	   
	   <div class="content-input">
		<div class="text-desc"><strong>Seleccione el Tipo de Personal que busca. *</strong></div>
	   
		 <select class="select_group" name="job_type" id="job_type" style="margin-top:10px; margin-bottom:10px">
					<option value="0">Seleccionar respuesta</option>
					<option value="Niñera" <?php if( $data['job_type'] == 'Niñera'){ echo 'selected';} ?>>Niñera</option>
					<option value="Domestica" <?php if( $data['job_type'] == 'Domestica'){ echo 'selected';} ?>>Domestica</option>
					<option value="Todologa" <?php if( $data['job_type'] == 'Todologa'){ echo 'selected';} ?>>Todologa</option>
					<option value="Chofer" <?php if( $data['job_type'] == 'Chofer'){ echo 'selected';} ?>>Chofer</option>
					<option value="Jardinero" <?php if( $data['job_type'] == 'Jardinero'){ echo 'selected';} ?>>Jardinero</option>
					<option value="Enfermera" <?php if( $data['job_type'] == 'Enfermera'){ echo 'selected';} ?>>Enfermera</option>
			</select>
		
		
	   </div>
	   
	   <div class="content-input">
		<div class="text-desc"><strong>Rango de Edad de la Empleada *</strong></div>
	   
		 <select class="select_group" name="range_age_employee" id="range_age_employee" style="margin-top:10px; margin-bottom:10px">
					<option value="0">Seleccionar respuesta</option>-
					<option value="18-25" <?php if( $data['range_age_employee'] == '18-25'){ echo 'selected';} ?>>18-25</option>
					<option value="25-30"<?php if( $data['range_age_employee'] == '25-30'){ echo 'selected';} ?>>25-30</option>
				   <option value="30-35" <?php if( $data['range_age_employee'] == '30-35'){ echo 'selected';} ?>>30-35</option>
				   <option value="35+" <?php if( $data['range_age_employee'] == '35+'){ echo 'selected';} ?>>35+</option>
			</select>
		</div>
		<div class="content-input">
			<div class="text-desc"><strong>Nacionalidad de la empleada *</strong></div>
			<select class="select_group" name="employee_nationality" id="employee_nationality" style="margin-top:10px; margin-bottom:10px">
				<option value="0">Seleccionar respuesta</option>
				<option value="Dominicana"<?php if( $data['employee_nationality'] == 'Dominicana'){ echo 'selected';} ?>>Dominicana</option>
				<option value="Haitiana" <?php if( $data['employee_nationality'] == 'Haitiana'){ echo 'selected';} ?> >Haitiana</option>
				<option value="Venezonala"<?php if( $data['employee_nationality'] == 'Venezonala'){ echo 'selected';} ?>>Venezonala</option>
				<option value="Indiferente" <?php if( $data['employee_nationality'] == 'Indiferente'){ echo 'selected';} ?>>Indiferente</option>
			</select>
	   </div>
		<div class="content-input">
			<div class="text-desc"><strong>Nivel academico</strong></div>
			<select class="select_group" name="academic_level" id="academic_level" style="margin-top:10px; margin-bottom:10px">
					<option value="0">Seleccionar respuesta</option>
					<option value="Básico" <?php if( $data['academic_level'] == 'Básico'){ echo 'selected';} ?>>Básico</option>
					<option value="Bachiller" <?php if( $data['academic_level'] == 'Bachiller'){ echo 'selected';} ?>>Bachiller</option>
					<option value="Universitario" <?php if( $data['academic_level'] == 'Universitario'){ echo 'selected';} ?>>Universitario</option>
					<option value="Técnico" <?php if( $data['academic_level'] == 'Técnico'){ echo 'selected';} ?>>Técnico</option>
			</select>
	   </div>
	   
	   <div class="content-input">
		<div class="text-desc"><strong>Experiencia laboral</strong></div>
			<select class="select_group" name="work_experience" id="work_experience" style="margin-top:10px; margin-bottom:10px">
					<option value="0">Seleccionar respuesta</option>
				  <option value="Si" <?php if( $data['work_experience'] == 'Si'){ echo 'selected';} ?>>Si</option>
				  <option value="No" <?php if( $data['work_experience'] == 'No'){ echo 'selected';} ?>>No</option>
			</select>                                
	   </div>
	   
	  <div class="content-check-box">
			<div class="content-input" style="padding-top:5px; margin-bottom:18px;">
			<div class="text-desc" style="margin-bottom:15px;">
			<strong><strong>Afiliacion Religiosa</strong></strong>
		 </div>
				
			  <label class="container_" value="" name="christian">Cristiana
					<input type="checkbox" name="religious_affiliation" value="christian" >
					<span class="checkmark"></span>
			  </label>
				
			  <label class="container_" value="" name="catholic">Católica
					<input type="checkbox" name="religious_affiliation" value="catholic" >
					<span class="checkmark"></span>
				</label>
				
			  <label class="container_" value="" name="indifferent_religion">Indiferente
				<input type="checkbox" name="religious_affiliation" value="indifferent_religion" >
					<span class="checkmark"></span>
				</label>                                        
		</div>
		<div class="content-input">                                       
		  <label class="container_" value="" name="other_religion">Otro
				<input type="checkbox" name="religious_affiliation" value="other_religion">
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
				<input type="checkbox" name="work_to_be_done" value="clean" >
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="" name="wash">Lavar
				<input type="checkbox" name="work_to_be_done" value="wash"  >
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="" name="child_security">Cuidar niños
				<input type="checkbox" name="work_to_be_done" value="child_security" >
					<span class="checkmark"></span>
				</label>
				<label class="container_" value="" name="cook">Cocinar
					<input type="checkbox" name="work_to_be_done" value="cook">
					<span class="checkmark"></span>
				</label>
		</div>
		<div class="content-input">
			<label class="container_" value="" name="iron">Planchar
			<input type="checkbox" name="work_to_be_done" value="iron">
					<span class="checkmark"></span>
				</label>
		  <label class="container_" value="" name="other_job">Otro
					<input type="checkbox" name="work_to_be_done" value="other_job">
					<span class="checkmark"></span>
				</label>                                        
				<input type="text" class="input" value="" name="other_job" placeholder="Otra Ocupación" autocomplete="off">
		</div>                                
	   </div>
	   <div class="content-input">
		<div class="text-desc"><strong>Modalidad de horario *</strong></div>
	   
			<select class="select_group" name="day_modal" style="margin-top:10px; margin-bottom:10px">
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
				<input type="checkbox" name="hear_about" value="facebook" >
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="instagram" name="instagram">Instagram
					<input type="checkbox" name="hear_about" value="instagram">
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="television" name="tv">Televisión
				<input type="checkbox" name="hear_about" value="television" >
					<span class="checkmark"></span>
				</label>
				
			  <label class="container_" value="" name="newspaper">Periódico
				<input type="checkbox" name="hear_about" value="newspaper" >
					<span class="checkmark"></span>
				</label>
		</div>
		<div class="content-input">                                       
		  <label class="container_" value="" name="recomendation">Recomendación
			<input type="checkbox" name="hear_about" value="recomendation" >
					<span class="checkmark"></span>
				</label>
		  <label class="container_" value="" name="other_listen_us">Otro
					<input type="checkbox" name="hear_about" value="other_listen_us" >
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
				<input type="checkbox" name="terms">
				 <span class="checkmark"></span>
	   </label>
	   </div>       
		
		<input type="submit" value="Hacer pedito">
		
   </div>
   <div id="request_results"></div>
</form>