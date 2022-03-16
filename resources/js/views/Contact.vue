<template>
	<div>
		<section class="page-section" id="contact">
			<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
					<div class="col-lg-8 col-xl-6 text-center">
						<h2 class="mt-0">Let's Get In Touch!</h2>
						<hr class="divider"/>
						<p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back
						                           to you as soon as possible!
						</p>
					</div>
				</div>
				<div class="row gx-4 gx-lg-5 justify-content-center mb-5">
					<div class="col-lg-6">
						<form action="" id="contactForm" method="POST" @submit.prevent="register">
							<div class="form-floating mb-3">
								<label for="name">Full name</label>
								<input class="form-control"
								       id="name"
								       type="text"
								       name="name"
								       v-model="form.name"
								       placeholder="Enter your name..."/>
								<has-error :form="form" field="name" class="error"></has-error>
							</div>
							<div class="form-floating mb-3">
								<label for="email">Email address</label>
								<input class="form-control"
								       id="email"
								       type="email"
								       v-model="form.email"
								       placeholder="name@example.com"
								/>
								<has-error :form="form" field="email" class="error"></has-error>
							</div>
							<div class="form-floating mb-3">
								<label for="phone">Phone number</label>
								<input class="form-control"
								       id="phone"
								       type="tel"
								       v-model="form.phone"
								       name="phone"
								       placeholder="(123) 456-7890"
								/>
								<has-error :form="form" field="phone" class="error"></has-error>
							</div>
							<div class="form-floating mb-3">
								<label for="message">Message</label>
								<textarea class="form-control"
								          name="message"
								          v-model="form.message"
								>
								</textarea>
								<has-error :form="form" field="message" class="error"></has-error>
							</div>
							<div class="d-grid">
								<button class="btn btn-primary btn-xl" type="submit">Submit</button>
							</div>
							<div class="px-3 py-3 mb-3 bg-blue-100"
							     v-bind:class="{ invisible: isInvisible }"
							     id="response-message">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</template>

<script>
	export default {
		data(){
			return {
				form:        new Form( {
					                       name:    '',
					                       email:   '',
					                       phone:   '',
					                       message: '',
				                       } ),
				isInvisible: true,
			};
		},
		methods: {

			register(){
				console.log( 'contact' );
				this.form.post( '/contact' )
				    .then( ( response ) => {

					    var attr         = document.getElementById( 'response-message' );
					    this.isInvisible = false;
					    attr.innerHTML   = response.data.message;

					    this.form.reset();

				    } );
			},
			loadScript(){
				this.$loadScript( './script.js' );
			},
		},

		beforeMount(){
			this.loadScript();
		},
	};
</script>