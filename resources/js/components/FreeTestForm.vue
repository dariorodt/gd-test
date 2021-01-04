<template>
	<div>
		<div class="text-center mb-5">
			<img src="/img/logo-documentos-legales_cb591536.png" alt="">
		</div>
		<form>
			<center>Paso {{ current }} de 3</center>
			<div class="progress" style="padding: 3px; border-radius: 8px; border: 1px solid;">
				<div id="progress" class="progress-bar bg-success" role="progressbar" aria-valuenow="33.3" 
				     aria-valuemin="0" aria-valuemax="100" style="width: 33.3%; border-radius: 5px;"></div>
			</div>
			<step-one-form v-if="current == 1"></step-one-form>
			<step-two-form v-if="current == 2"></step-two-form>
			<step-three-form v-if="current == 3"></step-three-form>
		</form>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				current: 1,
			}
		},
		watch: {
			current: function(newCurrent, oldCurrent) {
				if (this.current == 1) 
					document.getElementById('progress').style.width = "33.3%";
				if (this.current == 2) 
					document.getElementById('progress').style.width = "66.6%";
				if (this.current == 3)
					document.getElementById('progress').style.width = "100%";
			}
		}
	}
</script>