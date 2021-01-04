<template>
	<div class="card card-body mt-3">
		<h4 class="text-center mb-3">Último paso</h4>
		
		<div class="form-group">
			<label for="company_name">Nombre de la compañía</label>
			<input type="text" name="company_name" id="company_name" class="form-control">
		</div>
		
		<div class="form-group">
			<label for="nif">NIF</label>
			<input type="text" name="nif" id="nif" class="form-control">
		</div>
		
		<div class="form-group">
			<label for="employees_count">Número de empleados</label>
			<select name="employees_count" class="form-control">
				<option value="1-10">1 a 10</option>
				<option value="11-20">11 a 20</option>
				<option value="21-50">21 a 50</option>
				<option value="51+">Más de 51</option>
			</select>
		</div>
		
		<div class="form-group">
			<label for="password">Crea una contraseña</label>
			<input type="text" name="password" id="password" class="form-control">
		</div>
		
		<center>
			<button type="button" class="btn btn-success" style="width: 150px;" v-on:click="finish()">
				Finalizar
			</button>
		</center>
	</div>
</template>

<script>
	export default {
		methods: {
			finish: function() {
				alert('Datos Enviados');
			}
		}
	}
</script>