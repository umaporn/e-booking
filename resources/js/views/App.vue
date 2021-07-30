<template>
	<div>
		<div>
			<ul class="nav navbar-nav">
				<li class="menu-item-has-children dropdown">
					<router-link to="/home" tag="a">
						<i class="menu-icon fa fa-shopping-bag"></i>Home
					</router-link>
					<router-link to="/contact" tag="a">
						<i class="menu-icon fa fa-shopping-bag"></i>Contact
					</router-link>
				</li>
			</ul>
		</div>
		<router-view></router-view>
	</div>
</template>

<script>
	export default {
		name: 'app',
	};
</script>