/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

    var miFormulario = document.querySelector('.formulario');

    var campoUsername = miFormulario.querySelector('.username');

    var campoEmail = miFormulario.querySelector('.email');
    campoEmail.onblur = function() {
        if (!emailRegex.test(this.value)) {
            alert('El campo email tiene un formato incorrecto');
        }
    }
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    miFormulario.querySelector('.pais');

    var campoPass = miFormulario.querySelector('.password');
    var campoConfPass = miFormulario.querySelector('.password-confirm');

    miFormulario.onsubmit = function() {
        if (campoUsername.value == '') {
            alert('El campo Nombre de Usuario es obligatorio');
            event.preventDefault();
        } else if (campoEmail.value == '') {
            alert('El campo email es obligatorio');
            event.preventDefault();
        } else if (campoPass.value == '') {
            alert('El campo contraseña es obligatorio');
            event.preventDefault();
        } else if (campoConfPass.value !== campoPass.value) {
            alert('Las contraseñas no coinciden');
            event.preventDefault();
        }    
    }

    var container = document.getElementById("contenedor");
    var botonEnviar = document.getElementById("boton");
    console.log(botonEnviar);
    
    /* fetch('http://country.io/names.json')
    .then(function (respuesta) {
        return respuesta,json();
    })
    .then(function (datos) {
        console.log(datos);
    }) */

