<template>
  <div>
		<b-navbar toggleable="lg" type="dark" variant="info">
			<b-container>
				<!-- <b-row> -->
					<b-navbar-brand href="/">
						<img src="../../../assets/logo.png" alt="" class="image">

					</b-navbar-brand>
				<!-- </b-row> -->

			</b-container>
		</b-navbar>
	</div>
</template>

<script>
export default {
}
</script>

<style scoped lang="scss">
	$mainColor: #EE94B4;
	.navbar{
		padding: 0px;
	}
	.navbar-brand{
		margin: auto;
		img{

			width: 50px;
			height: 50px;
		}
	}
	.bg-info {
    background-color: $mainColor !important;
}
</style>
