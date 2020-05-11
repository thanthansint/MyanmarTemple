/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// Require dependencies
//var Vue = require('vue');
var VueCookie = require('vue-cookie');
// Tell Vue to use the plugin
Vue.use(VueCookie);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import AdminPanelEvent from './components/AdminPanelEvent.vue'
import LoginAdmin from './components/LoginAdmin.vue'
import AddEvent from './components/AddEvent.vue'
import UserPanelEvent from './components/UserPanelEvent.vue'
import EditEvent from './components/EditEvent.vue'
import EditForm from './components/EditForm.vue'
import ConfirmEventForm from './components/ConfirmEventForm.vue'

import AdminPanelAnnouncement from './components/AdminPanelAnnouncement.vue'
import AddAnnouncement from './components/AddAnnouncement.vue'
import EditAnnouncement from './components/EditAnnouncement.vue'
import EditAnnouncementForm from './components/EditAnnouncementForm.vue'
import ConfirmAnnouncementForm from './components/ConfirmAnnouncementForm.vue'
import Location from './components/Location.vue'
import About from './components/About.vue'

import UserRootAbout from './components/UserRootAbout.vue'
import UserRootEvent from './components/UserRootEvent.vue'
import UserRootAnnouncement from './components/UserRootAnnouncement.vue'

Vue.component('Root', require('./components/Root.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        About: About,
        AdminPanelEvent: AdminPanelEvent,
        LoginAdmin: LoginAdmin,
        AddEvent: AddEvent,
        UserPanelEvent: UserPanelEvent,
        EditEvent: EditEvent,
        EditForm: EditForm,
        ConfirmEventForm: ConfirmEventForm,

        AdminPanelAnnouncement: AdminPanelAnnouncement,
        AddAnnouncement: AddAnnouncement,
        EditAnnouncement: EditAnnouncement,
        EditAnnouncementForm: EditAnnouncementForm,
        ConfirmAnnouncementForm: ConfirmAnnouncementForm,
        Location: Location,
        UserRootAnnouncement: UserRootAnnouncement,
        UserRootEvent: UserRootEvent,
        UserRootAbout: UserRootAbout

    }
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
  });
