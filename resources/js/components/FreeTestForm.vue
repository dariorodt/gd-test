<template>
	<div>
		<div class="text-center mb-5">
			<img src="/img/logo-documentos-legales_cb591536.png" alt="">
		</div>
		<form>
			<center>Paso 1 de 3</center>
			<div class="progress" style="padding: 3px; border-radius: 8px; border: 1px solid;">
				<div class="progress-bar bg-success" role="progressbar" aria-valuenow="33.3" 
				     aria-valuemin="0" aria-valuemax="100" style="width: 33.3%; border-radius: 5px;"></div>
			</div>
			<step-three-form></step-three-form>
		</form>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				current_step: 1,
			}
		}
	}
</script>