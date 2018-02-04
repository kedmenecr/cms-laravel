
require('./bootstrap');
require('./manage');

import Vue from 'vue'
window.Vue = require('vue');
import Buefy from 'buefy';


Vue.use(Buefy);



//Vue.component('example-component', require('./components/ExampleComponent.vue'));


$(document).ready(function(){
    $('button.button').hover(function (e){
        $('.dropdown-trig').toggleClass('is-open');
    });
});

