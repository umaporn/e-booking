<template>
	<div>
		<div class="dropdown mx-4">
			<select class="form-control" id="inputGroupSelect01" v-model="$i18n.locale">
				<option
				v-for="(lang, i) in langs"
				:key="`lang-${i}`"
				:value="lang">
					{{ lang }}
				</option>
			</select>
		</div>
	</div>
</template>

<script>
	export default {
		name: 'SwitchLocale',
		data(){
			return { langs: ['en', 'th', 'da', 'hr'] };
		},
	};
</script>

<style>
	select {
		width: 150px;
		line-height: 49px;
		height: 38px;
		font-size: 22px;
		outline: 0;
		margin-bottom: 15px;
	}
</style>