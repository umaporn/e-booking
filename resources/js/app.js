import Vue from 'vue';
import VueRouter from 'vue-router';
import { Form, HasError, AlertError } from 'vform';
import VueI18n from 'vue-i18n';
import LoadScript from 'vue-plugin-load-script';

Vue.use( VueRouter );
Vue.use( VueI18n );
Vue.use( LoadScript );

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

require( './bootstrap' );

const router = new VueRouter( {
	                              mode:   'history',
	                              routes: [
		                              {
			                              path:      '/',
			                              name:      'home',
			                              component: Home,
			                              meta:      { title: 'Home' },
		                              },
		                              {
			                              path:      '/about',
			                              name:      'about',
			                              component: About,
			                              meta:      { title: 'About' },
		                              },
		                              {
			                              path:      '/services',
			                              name:      'services',
			                              component: Services,
			                              meta:      { title: 'Services' },
		                              },
		                              {
			                              path:      '/portfolio',
			                              name:      'portfolio',
			                              component: Portfolio,
			                              meta:      { title: 'Portfolio' },
		                              },
		                              {
			                              path:      '/contact',
			                              name:      'contact',
			                              component: Contact,
			                              meta:      { title: 'Contact' },
		                              },
	                              ],
                              } );

import { messages } from './lang.js';

const i18n = new VueI18n( {
	                          locale: 'en',
	                          messages,
                          } );

const app = new Vue( {
	                     el:         '#app',
	                     components: { App },
	                     router,
	                     i18n,
                     } );

