import { Form, HasError, AlertError } from 'vform';
import VueI18n from 'vue-i18n';
import LoadScript from 'vue-plugin-load-script';

window.Form   = Form;
window._      = require( 'lodash' );
window.Popper = require( 'popper.js' ).default;
window.$      = window.jQuery = require( 'jquery' );
window.SimpleLightbox = require( 'simplelightbox/dist/simple-lightbox.js' );
require( 'bootstrap' );
window.axios                                             = require( 'axios' );
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
require( 'jquery-lazy/jquery.lazy.min.js' );
/**Call Vendor liberies*/
import UIkit from 'uikit';