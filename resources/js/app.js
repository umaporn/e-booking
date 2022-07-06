// import Vue from 'vue';
// import VueRouter from 'vue-router';
// import { Form, HasError, AlertError } from 'vform';
// import VueI18n from 'vue-i18n';
// import LoadScript from 'vue-plugin-load-script';
//
// Vue.use( VueRouter );
// Vue.use( VueI18n );
// Vue.use( LoadScript );

//Main pages
// import App from './views/App';
// import Contact from './views/Contact';
// import Home from './views/Home';
// import About from './views/About';
// import Services from './views/Services';
// import Portfolio from './views/Portfolio';
// import '../sass/app.scss';
//
// window.Form = Form;
// Vue.component( HasError.name, HasError );
// Vue.component( AlertError.name, AlertError );
//
// require( './bootstrap' );
//
// const router = new VueRouter( {
// 	                              mode:   'history',
// 	                              routes: [
// 		                              {
// 			                              path:      '/',
// 			                              name:      'home',
// 			                              component: Home,
// 			                              meta:      { title: 'Home' },
// 		                              },
// 		                              {
// 			                              path:      '/about',
// 			                              name:      'about',
// 			                              component: About,
// 			                              meta:      { title: 'About' },
// 		                              },
// 		                              {
// 			                              path:      '/services',
// 			                              name:      'services',
// 			                              component: Services,
// 			                              meta:      { title: 'Services' },
// 		                              },
// 		                              {
// 			                              path:      '/portfolio',
// 			                              name:      'portfolio',
// 			                              component: Portfolio,
// 			                              meta:      { title: 'Portfolio' },
// 		                              },
// 		                              {
// 			                              path:      '/contact',
// 			                              name:      'contact',
// 			                              component: Contact,
// 			                              meta:      { title: 'Contact' },
// 		                              },
// 	                              ],
//                               } );
//
// import { messages } from './lang.js';
//
// const i18n = new VueI18n( {
// 	                          locale: 'en',
// 	                          messages,
//                           } );
//
// const app = new Vue( {
// 	                     el:         '#app',
// 	                     components: { App },
// 	                     router,
// 	                     i18n,
//                      } );

import { Form, HasError, AlertError } from 'vform';
import VueI18n from 'vue-i18n';
import LoadScript from 'vue-plugin-load-script';

window.Form   = Form;
window._      = require( 'lodash' );
window.Popper = require( 'popper.js' ).default;
window.$      = window.jQuery = require( 'jquery' );
window.SimpleLightbox = require( 'simplelightbox/dist/simple-lightbox.js' );
require( 'bootstrap' );
require( '@fancyapps/fancybox/dist/jquery.fancybox.js' );
window.axios                                             = require( 'axios' );
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
require( 'jquery-lazy/jquery.lazy.min.js' );
/**Call Vendor liberies*/
import UIkit from 'uikit';
