<?php $data = $_POST['data'];  
$data['pets'] 					= explode('|',$data['pets']); 
$data['religious_affiliation']  = explode('|',$data['religious_affiliation']); 
$data['work_to_be_done'] 		= explode('|',$data['work_to_be_done']); 
$data['hear_about'] 			= explode('|',$data['hear_about']); 
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
			<input type="number" class="input" value="<?php echo $data['people_in_house'];?>" name="people_in_house" id="people_in_house" placeholder="" autocomplete="off">
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
			<input type="number" class="input" value="<?php echo $data['children_number'];?>" name="children_number" id="children_number" placeholder="Cantidad" autocomplete="off">
	</div>
	
	
	<div class="content-input">
			<div class="text-desc"><strong>Edad</strong></div>
			<input type="number" class="input" value="<?php echo $data['age'];?>" name="age" id="age" placeholder="Edad" autocomplete="off">
	</div>
	
	
	
		   
	
	<div id="personal-data">
	
		 <div class="content-input" style="padding-top:5px; margin-bottom:18px;">
			<div class="text-desc" style="margin-bottom:15px;">
			<strong><strong>Mascota en casa?</strong></strong>
		 </div>
				
				<label class="container_" value="" name="dog" id="dog">Perros
					<input type="checkbox" name="pets" value="dog" <?php if( in_array('dog',$data['pets']))  echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
				
				<label class="container_" value="" name="bird" id="bird">Aves
					<input type="checkbox" name="pets" value="bird" <?php if( in_array('bird',$data['pets'])) echo 'checked';?>>
					<span class="checkmark"></span>
				</label>
				
				<label class="container_" value="" name="cat" id="cat">Gatos
					<input type="checkbox" name="pets" value="cat" <?php if( in_array('cat',$data['pets'])) echo 'checked';?>>
					<span class="checkmark"></span>
				</label>
				
				
		</div>
		
		
		<div class="content-input">
			<label class="container_" value="" name="no-pet" id="no-pet">Ninguno
				<input type="checkbox" name="pets" value="no-pet" <?php if( in_array('no-pet',$data['pets'])) echo 'checked';?>>
				<span class="checkmark"></span>
			</label>
			<label class="container_" value="" name="other" id="other">Otro
				<input type="checkbox" name="pets" value="other" <?php if( in_array('other',$data['pets'])) echo 'checked';?>>
				<span class="checkmark"></span>
			</label>                                        
			<input type="text" class="input" value="<?php echo $data['other_pet'];?>" name="other_pet" id="other_pet" placeholder="Otra Mascota" autocomplete="off">
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
					<input type="checkbox" name="religious_affiliation" value="christian" <?php if( in_array('christian',$data['religious_affiliation'])) echo 'checked';?> >
					<span class="checkmark"></span>
			  </label>
				
			  <label class="container_" value="" name="catholic">Católica
					<input type="checkbox" name="religious_affiliation" value="catholic" <?php if( in_array('catholic',$data['religious_affiliation'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
				
			  <label class="container_" value="" name="indifferent_religion">Indiferente
				<input type="checkbox" name="religious_affiliation" value="indifferent_religion" <?php if( in_array('indifferent_religion',$data['religious_affiliation'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>                                        
		</div>
		<div class="content-input">                                       
		  <label class="container_" value="" name="other_religion">Otro
				<input type="checkbox" name="religious_affiliation" value="other_religion" <?php if( in_array('other_religion',$data['religious_affiliation'])) echo 'checked';?> >
				<span class="checkmark"></span>
			</label>
		  <input type="text" class="input" value="<?php echo ucfirst($data['other_religion_text']);?>" name="other_religion_text" id="other_religion_text" placeholder="Otra Religión" autocomplete="off">
		</div>
		
	  </div>
	   
	   
	   <div class="content-input">
		<div class="text-desc"><strong>Modalidad de horario *</strong></div>
	   
		 <select class="select_group" name="hour_modal" style="margin-top:10px; margin-bottom:10px">
					<option value="">Seleccionar respuesta</option>
					<option value="Con Dormida" <?php if( $data['hour_modal'] == 'Con Dormida' ) echo 'selected';?>>Con Dormida</option>
					<option value="Sin Dormida" <?php if( $data['hour_modal'] == 'Sin Dormida' ) echo 'selected';?>>Sin Dormida</option>
					<option value="Fines de semana" <?php if( $data['hour_modal'] == 'Fines de semana' ) echo 'selected';?>>Fines de semana</option>
					<option value="3 o 4 veces por semana" <?php if( $data['hour_modal'] == '3 o 4 veces por semana' ) echo 'selected';?>>3 o 4 veces por semana</option>
					<option value="Salida quincenal" <?php if( $data['hour_modal'] == 'Salida quincenal' ) echo 'selected';?>>Salida quincenal</option>
					
			</select>
		
		
	   </div>
	   
	   <div class="content-check-box">
			<div class="content-input" style="padding-top:5px; margin-bottom:18px;">
			<div class="text-desc" style="margin-bottom:15px;">
			<strong><strong>Labores a desempeñar *</strong></strong>
		 </div>
				
			  <label class="container_" value="" name="clean">Limpiar
				<input type="checkbox" name="work_to_be_done" value="clean" <?php if( in_array('clean',$data['work_to_be_done'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="" name="wash">Lavar
				<input type="checkbox" name="work_to_be_done" value="wash"  <?php if( in_array('wash',$data['work_to_be_done'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="" name="child_security">Cuidar niños
				<input type="checkbox" name="work_to_be_done" value="child_security" <?php if( in_array('child_security',$data['work_to_be_done'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
				<label class="container_" value="" name="cook">Cocinar
					<input type="checkbox" name="work_to_be_done" value="cook" <?php if( in_array('cook',$data['work_to_be_done'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
		</div>
		<div class="content-input">
			<label class="container_" value="" name="iron">Planchar
			<input type="checkbox" name="work_to_be_done" value="iron" <?php if( in_array('iron',$data['work_to_be_done'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
		  <label class="container_" value="" name="other_job">Otro
					<input type="checkbox" name="work_to_be_done" value="other_job" <?php if( in_array('other_job',$data['work_to_be_done'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>                                        
				<input type="text" class="input" value="<?php echo ucfirst($data['other_job']);?>" name="other_job" placeholder="Otra Ocupación" autocomplete="off">
		</div>                                
	   </div>
	   <div class="content-input">
		<div class="text-desc"><strong>Modalidad de horario *</strong></div>
	   
			<select class="select_group" name="day_modal" style="margin-top:10px; margin-bottom:10px">
				<option value="">Seleccionar respuesta</option>
			  <option value="Lunes-Viernes" <?php if( $data['day_modal'] == 'Lunes-Viernes' ) echo "selected";?>>Lunes-Viernes</option>
			  <option value="Lunes-Sabados" <?php if( $data['day_modal'] == 'Lunes-Sabados' ) echo "selected";?>>Lunes-Sabados</option>
			  <option value="Domingos-Viernes" <?php if( $data['day_modal'] == 'Domingos-Viernes' ) echo "selected";?>>Domingos-Viernes</option>
			  <option value="Viernes-Lunes" <?php if( $data['day_modal'] == 'Viernes-Lunes' ) echo "selected";?>>Viernes-Lunes</option>
			  <option value="Sabado-Lunes" <?php if( $data['day_modal'] == 'Sabado-Lunes' ) echo "selected";?>>Sabado-Lunes</option>
			  <option value="Otro" <?php if( $data['day_modal'] == 'Otro' ) echo "selected";?>>Otro</option>                                            
			</select>                                
	   </div>
	   
		<div class="content-input">
			<div class="text-desc"><strong>Hora de entrada *</strong></div>
		  <input type="text" class="input" value="<?php echo $data['starting_hour'];?>" name="starting_hour" placeholder="Hora" autocomplete="off">
		</div>
		
		<div class="content-input">
			<div class="text-desc"><strong>Hora de Salida *</strong></div>
			<input type="text" class="input" value="<?php echo $data['end_hour'];?>" name="end_hour" placeholder="Hora" autocomplete="off">
		</div>
		
		 <div class="content-input">
			<div class="text-desc"><strong>Sueldo *</strong></div>
		   <input type="text" class="input" value="<?php echo $data['payment'];?>" name="payment" placeholder="Sueldo" autocomplete="off">
		</div>
		
		<div class="content-input">
		<div class="text-desc"><strong>Ayuda con el pasaje *</strong></div>
		  <select class="select_group" name="transport_help" style="margin-top:10px; margin-bottom:10px">
					<option value="">Seleccionar respuesta</option>
					<option value="Si" <?php if($data['transport_help'] == 'Si') echo 'selected';?> >Si</option>
					<option value="No" <?php if($data['transport_help'] == 'No') echo 'selected';?> >No</option>
					
			</select>
	   </div>
		
	   <div class="content-check-box">
			<div class="content-input" style="padding-top:5px; margin-bottom:18px;">
			<div class="text-desc" style="margin-bottom:15px;">
			<strong><strong>Como escucho sobre nosotros? *</strong></strong>
		 </div>
				
			  <label class="container_" value="facebook" name="facebook">Facebook
				<input type="checkbox" name="hear_about" value="facebook" <?php if( in_array('facebook',$data['hear_about'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="instagram" name="instagram">Instagram
					<input type="checkbox" name="hear_about" value="instagram" <?php if( in_array('instagram',$data['hear_about'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
			  <label class="container_" value="television" name="tv">Televisión
				<input type="checkbox" name="hear_about" value="television" <?php if( in_array('television',$data['hear_about'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
				
			  <label class="container_" value="" name="newspaper">Periódico
				<input type="checkbox" name="hear_about" value="newspaper" <?php if( in_array('newspaper',$data['hear_about'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
		</div>
		<div class="content-input">                                       
		  <label class="container_" value="" name="recomendation">Recomendación
			<input type="checkbox" name="hear_about" value="recomendation" <?php if( in_array('recomendation',$data['hear_about'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
		  <label class="container_" value="" name="other_listen_us">Otro
					<input type="checkbox" name="hear_about" value="other_listen_us" <?php if( in_array('other_listen_us',$data['hear_about'])) echo 'checked';?> >
					<span class="checkmark"></span>
				</label>
				
		  <input type="text" class="input" value="<?php echo ucfirst($data['other_listen_us_text']);?>" name="other_listen_us_text" placeholder="Otra" autocomplete="off">
		</div>
		
	   </div> 
	   
	   <div class="fulltextcontainer">
		 <div class="text-desc"><strong>Observacion:</strong></div>
		 <textarea name="comments" class="input textarea" placeholder="Comentarios" autocomplete="off"><?php echo ucfirst($data['comments']);?></textarea>
	   </div>
		     
		
   </div>
   <div id="request_results"></div>
</form>