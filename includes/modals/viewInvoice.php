<?php $data = $_POST['data']; ?>
<form id="request_form">
   <div class="content-input">
		<div class="text-desc"><strong>Nombre</strong></div>
		<input type="text" class="input" readonly value="<?php echo trim(ucfirst($data['firstname']).' '.ucfirst($data['lastname']));?>" autocomplete="off">
	</div>
	<div class="content-input">
			<div class="text-desc"><strong>Cantidad</strong></div>
			<input type="text" readonly class="input" value="<?php echo $data['payment'];?>" autocomplete="off">
	</div>
	<div class="content-input">
			<div class="text-desc"><strong>Total</strong></div>
			<input type="text" readonly class="input" value="<?php echo '';?>"  autocomplete="off">
	</div>
	<div class="content-input">
			<div class="text-desc"><strong>Impuesto</strong></div>
			<input type="text" class="input" readonly value="<?php echo '';?>" autocomplete="off">
	</div>		 
</form>