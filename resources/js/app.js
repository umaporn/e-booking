import Vue from 'vue';
import VueRouter from 'vue-router';
import { Form, HasError, AlertError } from 'vform';

Vue.use( VueRouter );

//Main pages
import App from './views/App';
import Contact from './views/Contact';
import Home from './views/Home';
import About from './views/About';
import Services from './views/Services';
import Portfolio from './views/Portfolio';
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
		                              {
			                              path:      '/about',
			                              name:      'about',
			                              component: About,
		                              },
		                              {
			                              path:      '/services',
			                              name:      'services',
			                              component: Services,
		                              },
		                              {
			                              path:      '/portfolio',
			                              name:      'portfolio',
			                              component: Portfolio,
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
