/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
var gaEvents      = require('./ga-events.js'),
    facebookShare = require('./facebook-share.js'),
    analytics     = require('./analytics.js');

window.RSCG = {};
window.$    = window.jQuery = require('jquery');
window.Vue        = require('vue');
Vue.config.silent = true;

require('foundation-sites');
require('lodash');
require('./country-dropdown.js');
require('./cards.js');
require('./admin.js');
require('./hero-modal.js');
require('./foundation-abide-patterns');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('get-involved', require('./components/SupportApp.vue'));
Vue.component('contact-form', require('./components/ContactForm.vue'));
Vue.component('spread-word', require('./components/SpreadWord.vue'));
Vue.component('testimonials-form', require('./components/TestimonialsForm.vue'));

//"el" stands for "element"
const app = new Vue({
    el: '#myApp'
});

// Required for laravel ajax calls
function ajaxCsrfSetup() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}


function init() {
    $(function () {
        // Initialize everything here
        ajaxCsrfSetup();
        // gaEvents.bind('[data-ga-category]');
        analytics.bindAnalyticsAttributes();
        analytics.bindVimeoVideos();
        analytics.bindYoutubeVideos();
    });
}

init();