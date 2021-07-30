import Vue from 'vue';
import VueRouter from 'vue-router';
import { Form, HasError, AlertError } from 'vform';

Vue.use( VueRouter );

//Main pages
import Contact from './views/Contact';
import Home from './views/Home';
import App from './views/App';
import '../css/app.css';

window.Form = Form;
Vue.component( HasError.name, HasError );
Vue.component( AlertError.name, AlertError );

const router = new VueRouter( {
	                              mode:   'history',
	                              routes: [
		                              {
			                              path:      '/home',
			                              name:      'home',
			                              component: Home,
		                              },
		                              {
			                              path:      '/contact',
			                              name:      'contact',
			                              component: Contact,
		                              },
	                              ],
                              } );

const app = new Vue( {
	                     el:         '#app',
	                     components: { App },
	                     router,
                     } );