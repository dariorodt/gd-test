<template>
	<div class="card card-body mt-3">
		<h4 class="text-center mb-3">Casi terminas...</h4>
		
		<div class="form-group">
			<label for="first_name">Nombre</label>
			<input type="text" name="first_name" id="first_name" class="form-control">
		</div>
		<div class="form-group">
			<label for="last_name">Apellido</label>
			<input type="text" name="last_name" id="last_name" class="form-control">
		</div>
		<div class="form-group">
			<label for="phone">Número de teléfono</label>
			<input type="text" name="phone" id="phone" class="form-control">
		</div>
		<div class="form-group">
			<label for="job">Puesto de trabajo</label>
			<input type="text" name="job" id="job" class="form-control">
		</div>
		<div class="form-group">
			<label for="department">Departamento</label>
			<select name="department" id="department" class="form-control">
				<option value="1">Opción 1</option>
				<option value="2">Opción 2</option>
				<option value="3">Opción 3</option>
				<option value="4">Opción 4</option>
			</select>
		</div>
		
		<center>
			<button type="button" class="btn btn-success" style="width: 150px;" v-on:click="goNext()">
				Siguiente
			</button>
		</center>
	</div>
</template>

<script>
	export default {
		methods: {
			goNext: function() {
				this.$parent.current++;
			}
		}
	}
</script>

<style>
	label {
		margin-bottom: 0px;
	}
</style>