import Vue from 'vue';
import VueRouter from 'vue-router';
import { Form, HasError, AlertError } from 'vform';
import VueI18n from 'vue-i18n';

Vue.use( VueRouter );
Vue.use( VueI18n );

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

require('./bootstrap');

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

const messages = {
	en: {
		message: {
			value: 'This is an example of content translation.'
		}
	},
	th: {
		message: {
			value: 'นี่คือตัวอย่างการแปลเนื้อหา'
		}
	},
	da: {
		message: {
			value: 'Dette er et eksempel på oversættelse af indhold.'
		}
	},
	hr: {
		message: {
			value: 'Ovo je primjer prevođenja sadržaja.'
		}
	}
};

const i18n = new VueI18n({
	                         locale: 'en',
	                         messages
                         });

const app = new Vue( {
	                     el:         '#app',
	                     components: { App },
	                     router,
	                     i18n
                     } );

