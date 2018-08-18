<?php $data = $_POST['data'];?>
<form id="employee_form">
<div class="content-input">
<div class="text-desc"><strong>Nombre completo</strong></div>
<input type="text" class="input" value="<?php echo ucfirst($data['fullname']);?>" autocomplete="off">
</div>
<div class="content-input">
<div class="text-desc"><strong>Edad</strong></div>
<input type="number" class="input" value="<?php echo ucfirst($data['age']);?>" autocomplete="off">
</div> 
<div class="content-input" style="width:100%">
<div class="text-desc"><strong>Dirección</strong></div>
<input type="text" class="input" value="<?php echo ucfirst($data['direction']);?>" autocomplete="off">
</div>
<div class="content-input">
<div class="text-desc"><strong>Estado Civil</strong></div>
<input type="number" class="input" value="<?php echo ucfirst($data['marital_status']);?>"  autocomplete="off">
</div>
<div class="content-input">
<div class="text-desc"><strong>Teléfono</strong></div>
<input type="number" class="input" value="<?php echo ucfirst($data['phone']);?>" autocomplete="off">
</div>
<div class="content-input">
<div class="text-desc"><strong>Celular</strong></div>
<input type="number" class="input" value="<?php echo ucfirst($data['cellphone']);?>"  autocomplete="off">
</div>
<div class="content-input">
<div class="text-desc"><strong>Nivel de estudio</strong></div>
<select class="select_group" style="margin-top:10px; margin-bottom:10px">
<option value="0" >Seleccionar respuesta</option>
<option value="Básico" <?php if( $data['academic_level'] == 'Básico'){ echo 'selected';} ?> >Básico</option>
<option value="Bachiller" <?php if( $data['academic_level'] == 'Bachiller'){ echo 'selected';} ?> >Bachiller</option>
<option value="Universitario" <?php if( $data['academic_level'] == 'Universitario' ){ echo 'selected';} ?> >Universitario</option>
<option value="Técnico" <?php if( $data['academic_level'] == 'Técnico' ){ echo 'selected';} ?> >Técnico</option>
<option value="No estudios" <?php if( $data['academic_level'] == 'No estudios' ){ echo 'selected';} ?> >No estudios</option>
</select>
</div>
<div class="content-input">
<div class="text-desc"><strong>Padece alguna enfermedad?</strong></div>
<input type="text" class="input" value="<?php echo ucfirst($data['any_desease']);?>" autocomplete="off">
</div>

<div class="content-input">
<div class="text-desc"><strong>¿Para qué posición se está postulando?</strong></div>
<select class="select_group" name="position" id="position" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Niñera" <?php if( $data['position'] == 'Niñera'){ echo 'selected';} ?>>Niñera</option>
<option value="Domestica" <?php if( $data['position'] == 'Domestica'){ echo 'selected';} ?>>Domestica</option>
<option value="Todologa" <?php if( $data['position'] == 'Todologa'){ echo 'selected';} ?>>Todologa</option>
<option value="Cocinera" <?php if( $data['position'] == 'Cocinera'){ echo 'selected';} ?>>Cocinera</option>
<option value="Enfermera" <?php if( $data['position'] == 'Enfermera'){ echo 'selected';} ?>>Enfermera</option>
<option value="Chofer" <?php if( $data['position'] == 'Chofer'){ echo 'selected';} ?>>Chofer</option>
<option value="Jardinero" <?php if( $data['position'] == 'Jardinero'){ echo 'selected';} ?>>Jardinero</option>
</select>
</div>
<div class="content-check-box">
<div class="content-input" style="padding-top:5px; margin-bottom:18px;">
<div class="text-desc" style="margin-bottom:15px;">
<strong><strong>Que sabe usted hacer?</strong></strong>
</div>                                        
<label class="container_" value="" name="wash">Lavar
<input type="checkbox" name="wash" value="1" <?php if( $data['wash'] == 1 ) echo 'checked';?> >
<span class="checkmark"></span>
</label>
<label class="container_" value="" name="child_care">Cuidar niños
<input type="checkbox" name="child_care" value="1" <?php if( $data['child_care'] == 1 ) echo 'checked';?>>
<span class="checkmark"></span>
</label>
<label class="container_" value="" name="cook">Cocinar
<input type="checkbox" name="cook"  value="1" <?php if( $data['cook'] == 1 ) echo 'checked';?>>
<span class="checkmark"></span>
</label>
<label class="container_" value="" name="drive">Conducir
<input type="checkbox" name="drive" value="1" <?php if( $data['drive'] == 1 ) echo 'checked';?>>
<span class="checkmark"></span>
</label>
</div>
<div class="content-input">
<label class="container_" value="" name="iron">Planchar
<input type="checkbox" name="iron" value="1" <?php if( $data['iron'] == 1 ) echo 'checked';?>>
<span class="checkmark"></span>
</label>
<label class="container_" value="" name="gardening">Jardineria
<input type="checkbox" name="gardening" value="1" <?php if( $data['gardening'] == 1 ) echo 'checked';?>>
<span class="checkmark"></span>
</label>
<label class="container_" value="" name="elderly_care">Cuidar Ancianos‎
<input type="checkbox" name="elderly_care" value="1" <?php if( $data['elderly_care'] == 1 ) echo 'checked';?>>
<span class="checkmark"></span>
</label>
</div>
</div>

<div class="content-input">
<div class="text-desc"><strong>¿Cuál es su situación laboral actual?</strong></div>
<select class="select_group" name="employment_situation" id="employment_situation" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Empleado" <?php if( $data['employment_situation'] == 'Empleado'){ echo 'selected';} ?> >Empleado</option>
<option value="Desempleado" <?php if( $data['employment_situation'] == 'Desempleado'){ echo 'selected';} ?> >Desempleado</option>
<option value="Particular" <?php if( $data['employment_situation'] == 'Particular'){ echo 'selected';} ?> >Particular</option>
<option value="Estudiante" <?php if( $data['employment_situation'] == 'Estudiante'){ echo 'selected';} ?> >Estudiante</option>
</select>
</div>

<div class="content-input">
<div class="text-desc"><strong>¿Tiene experiencia laboral?</strong></div>
<select class="select_group" name="employment_experience" id="employment_experience" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Si"  <?php if( $data['employment_experience'] == 'Si'){ echo 'selected';} ?>>Si</option>
<option value="No"  <?php if( $data['employment_experience'] == 'No'){ echo 'selected';} ?>>No</option>
</select>
</div>

<div class="content-input">
<div class="text-desc"><strong>Con que frecuencia toma bebidas alcoholicas ?</strong></div>
<select class="select_group" name="how_often_do_you_drink_alcohole" id="how_often_do_you_drink_alcohole" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Frecuentemente"  <?php if( $data['how_often_do_you_drink_alcohole'] == 'Frecuentemente'){ echo 'selected';} ?>>Frecuentemente</option>
<option value="Algunas veces"  <?php if( $data['how_often_do_you_drink_alcohole'] == 'Algunas veces'){ echo 'selected';} ?>>Algunas veces</option>
<option value="No Consumo Bebidas Alcoholicas"  <?php if( $data['how_often_do_you_drink_alcohole'] == 'No Consumo Bebidas Alcoholicas'){ echo 'selected';} ?>>No Consumo Bebidas Alcoholicas</option>
</select>
</div>

<div class="content-input">
<div class="text-desc"><strong>Con que frecuencia usted Fuma?</strong></div>
<select class="select_group" name="how_often_do_you_smoke" id="how_often_do_you_smoke" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Frecuentemente" <?php if( $data['how_often_do_you_smoke'] == 'Frecuentemente'){ echo 'selected';} ?>>Frecuentemente</option>
<option value="Algunas veces" <?php if( $data['how_often_do_you_smoke'] == 'Algunas veces'){ echo 'selected';} ?>>Algunas veces</option>
<option value="No Fumo" <?php if( $data['how_often_do_you_smoke'] == 'No Fumo'){ echo 'selected';} ?>>No Fumo</option>
</select>
</div>

<div class="fulltextcontainer">
<div class="text-desc"><strong>Explique brevemente cual ha sido su experiencia laboral</strong></div>
<textarea name="comments" class="input textarea" autocomplete="off"><?php echo $data['comments'];?></textarea>
</div>

<div class="content-input">
<div class="text-desc"><strong>Cuanto tiempo tiene de experiencia?</strong></div>
<select class="select_group" name="employment_experience_time" id="employment_experience_time" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Menos de un año"  <?php if( $data['employment_experience_time'] == 'Menos de un año'){ echo 'selected';} ?>>Menos de un año</option>
<option value="Más de un año" <?php if( $data['employment_experience_time'] == 'Más de un año'){ echo 'selected';} ?>>Más de un año</option>
<option value="No tengo experiencia" <?php if( $data['employment_experience_time'] == 'No tengo experiencia'){ echo 'selected';} ?>>No tengo experiencia</option>
</select>
</div>

<div class="content-input">
<div class="text-desc"><strong>Ha cuidado niños?</strong></div>
<select class="select_group" name="employment_experience_time2" id="employment_experience_time2" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Si" <?php if( $data['employment_experience_time2'] == 'Si'){ echo 'selected';} ?>>Si</option>
<option value="No" <?php if( $data['employment_experience_time2'] == 'No'){ echo 'selected';} ?>>No</option>
</select>
</div>

<div class="fulltextcontainer">
<div class="text-desc"><strong>Explique brevemente cual ha sido su experiencia laboral</strong></div>
<textarea name="last_job" class="input textarea" autocomplete="off"><?php echo $data['last_job'];?></textarea>
</div>

<div class="content-input">
<div class="text-desc"><strong>En que horario desea trabajar?</strong></div>
<input type="text" class="input" value="<?php echo ucfirst($data['hour_to_job']);?>" autocomplete="off">
</div>

<div class="content-input">
<div class="text-desc"><strong>Le interesa?</strong></div>
<select class="select_group" name="night_or_day" id="night_or_day" style="margin-top:10px; margin-bottom:10px">
<option value="">Seleccionar respuesta</option>
<option value="Con Dormida" <?php if( $data['night_or_day'] == 'Con Dormida'){ echo 'selected';} ?> >Con Dormida</option>
<option value="Si Dormida" <?php if( $data['night_or_day'] == 'Si Dormida'){ echo 'selected';} ?>>Sin Dormida</option>
</select>
</div>

<div class="content-input">
<div class="text-desc"><strong>Cuanto desea ganar?</strong></div>
<input type="text" class="input" value="<?php echo ucfirst($data['how_much_do_you_want_earn']);?>" autocomplete="off">
</div>

<div class="fulltextcontainer">
<div class="text-desc"><strong>Diga 2 Referencias Laborables Nombre y Telefono</strong></div>
<textarea class="input textarea" autocomplete="off"><?php echo $data['work_reference'];?></textarea>
</div>
<div class="fulltextcontainer">
<div class="text-desc"><strong>Diga 2 Referencias Personales Nombre y Telefono</strong></div>
<textarea class="input textarea"  autocomplete="off"><?php echo $data['personal_references'];?></textarea>
</div>
<br />
<br />
</form>   

