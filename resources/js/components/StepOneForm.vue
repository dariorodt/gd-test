<template>
	<div class="card card-body mt-3">
		<h5 class="text-center mb-3">
			Inicia tu versión de prueba Gratuita
			de <b>Gestión Direct Documentos</b>
		</h5>
		
		<div class="form-group">
			<label for="email">Correo electrónico del trabajo</label>
			<input type="text" name="email" id="email" class="form-control">
		</div>
		
		<p class="text-center">
			<small class="text-muted">
				También deseo recibir correos electrónicos de productos y servicios de Gestion Direct. (Puede cancelar la suscripción en cualquier momento)
			</small>
		</p>
		
		<label class="text-center"><input type="radio" name="can_send_email" value="1"> Si <input type="radio" name="can_send_email" value="0"> No</label>
		
		<center>
			<button type="button" class="btn btn-success" style="width: 150px;">Siguiente</button>
		</center>
	</div>
</template>