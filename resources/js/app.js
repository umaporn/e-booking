import Vue from 'vue';
import VueRouter from 'vue-router';
import { Form, HasError, AlertError } from 'vform';

Vue.use( VueRouter );

//Main pages
import App from './views/app.vue';
import Home from './views/Home';
import '../css/app.css';


window.Form = Form;
Vue.component( HasError.name, HasError );
Vue.component( AlertError.name, AlertError );

const router = new VueRouter( {
	                              mode:   'history',
	                              routes: [
		                              {
			                              path:      '/',
			                              name:      'home',
			                              component: Home,
		                              },
	                              ],
                              } );

const app    = new Vue( {
	                        el:         '#app',
	                        components: { App },
	                        router,
                        } );