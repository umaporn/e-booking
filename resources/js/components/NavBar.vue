<template>
	<div>
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-shrink" id="mainNav">
			<div class="container px-4 px-lg-5">
				<router-link to="/" tag="a" class="navbar-brand" href="#page-top">
					Starter Kits
				</router-link>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ms-auto my-2 my-lg-0">
						<li class="nav-item">
							<router-link to="/about" tag="a" class="nav-link">
								About
							</router-link>
						</li>
						<li class="nav-item">
							<router-link to="/services" tag="a" class="nav-link">
								Services
							</router-link>
						</li>
						<li class="nav-item">
							<router-link to="/portfolio" tag="a" class="nav-link">
								Portfolio
							</router-link>
						</li>
						<li class="nav-item">
							<router-link to="/contact" tag="a" class="nav-link">
								Contact
							</router-link>
						</li>
					</ul>
					<ul class="navbar-nav">
						<locale-dropdown locale="en"
						                 link-en="http://starter-kits.dm.com/en"
						                 link-th="http://starter-kits.dm.com/th"
						></locale-dropdown>
					</ul>
				</div>
			</div>
		</nav>

	</div>
</template>

<script>
	import LocaleDropdown from './LocaleDropdown'

	export default {
	  components: {
		  LocaleDropdown
	  },
	};
</script>
