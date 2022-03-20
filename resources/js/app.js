import UpcomingEvents from "./components/Website/UpcomingEvents";

require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

/**Vue Awesome Swiper*/
import Vue from 'vue';
import VueAwesomeSwiper from 'vue-awesome-swiper';
Vue.use(VueAwesomeSwiper);

/***Lax.js***/
import lax from 'lax.js';

/**Vue Material***/
import VueMaterial from 'vue-material';
Vue.use(VueMaterial);


/**Router-Link*/
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/*import Layout from './components/Website/websiteLayout'
import Home from './components/Website/Home'
import Teacher from './components/Website/teacher/teachers'
/!**About*!/
import AboutUs from './components/Website/about/aboutus'
import History from './components/Website/about/history'
import OurTeam from './components/Website/about/ourteam'
/!**Information*!/
import Notices from "./components/Website/information/notices";
import upcomingevents from "./components/Website/information/upcomingevents";
import Blogs from './components/Website/information/blogs'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'aboutus',
            component: AboutUs
        },
        {
            path: '/history',
            name: 'history',
            component: History
        },
        {
            path: '/team',
            name: 'ourteam',
            component: OurTeam
        },
        {
            path: '/teachers',
            name: 'teachers',
            component: Teacher
        },
        {
            path: '/notices',
            name: 'notices',
            component: Notices,
        },
        {
            path: '/upcomingevents',
            name: 'upcomingevents',
            component: upcomingevents,
        },
        {
            path: '/blogs',
            name: 'blogs',
            component: Blogs,
        },
    ],
});*/

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('create-blog', require('./components/Blog/CreateBlogComponent.vue').default);
Vue.component('notice-event', require('./components/Notice-Event/CreateNoticeEventComponent.vue').default);
Vue.component('setting-setup', require('./components/Blog/SettingSetupComponent.vue').default);
Vue.component('view-teacher', require('./components/Blog/ViewTeacherComponent.vue').default);
Vue.component('view-all-blog', require('./components/Blog/EditBlogComponent.vue').default);
Vue.component('create-testemonial', require('./components/Testemonial/CreateFrontTestemonial.vue').default);
Vue.component('view-testemonial', require('./components/Testemonial/ViewTestemonialComponent').default);
Vue.component('add-front-pic', require('./components/Front-Pic/ForntPicComponent').default);


//Website
Vue.component('upcoming-events', require('./components/Website/UpcomingEvents.vue').default);
/*Vue.component('news-events', require('./components/Website/RecentNewsEvents.vue').default);*/
/*Vue.component('testemonial', require('./components/Website/TestemonialComponent').default);*/

/*Vue.component('event-desk', require('./components/Website/index.vue').default);*/



/**New Website Components*/
/**Defining Website components*/
Vue.component('website-layout', require('./components/Website/websiteLayout.vue').default);
Vue.component('website-layout-2', require('./components/Website/WebsiteLayout-2.vue').default);
Vue.component('layout-second', require('./components/Website/layoutSecond.vue').default);
Vue.component('parallax-component', require('./components/Website/parallaxComponent.vue').default);
Vue.component('established-details', require('./components/Website/establishedDetails.vue').default);
Vue.component('message-desk', require('./components/Website/messageDesk.vue').default);
Vue.component('message-desk-2', require('./components/Website/messageDesk-2.vue').default);
Vue.component('message-desk-3', require('./components/Website/messageDesk-3.vue').default);
Vue.component('services-desk', require('./components/Website/servicesDesk.vue').default);
Vue.component('testinomials-desk', require('./components/Website/testinomials.vue').default);
Vue.component('testinomials-desk-2', require('./components/Website/testimonialDesk.vue').default);
Vue.component('gallery-desk', require('./components/Website/gallery.vue').default);
Vue.component('gallery-article-desk', require('./components/Website/galleryArticle.vue').default);
Vue.component('event-desk', require('./components/Website/eventDesk.vue').default);
Vue.component('upcoming-event-desk', require('./components/Website/upcomingeventDesk.vue').default);
Vue.component('founding-members', require('./components/Website/foundingMembers.vue').default);
Vue.component('fotter-component', require('./components/Website/fotterComponent.vue').default);

/**About Us Component*/
Vue.component('about-aboutus', require('./components/Website/about/aboutus.vue').default);
Vue.component('about-history', require('./components/Website/about/history.vue').default);
Vue.component('about-ourteam', require('./components/Website/about/ourteam.vue').default);

/**Teacher Component*/
Vue.component('teachers-component', require('./components/Website/teacher/teachers.vue').default);
/**Contact*/
Vue.component('facilities-component', require('./components/Website/facilities/facilities.vue').default);

/**Information Component*/
Vue.component('information-blogs', require('./components/Website/information/blogs.vue').default);
Vue.component('information-blog-details', require('./components/Website/information/blogDetails.vue').default);
Vue.component('information-notices', require('./components/Website/information/notices.vue').default);
Vue.component('information-upcoming-events', require('./components/Website/information/upcomingevents.vue').default);
Vue.component('information-event-details', require('./components/Website/information/eventDetails.vue').default);

const app = new Vue({
    el: '#app'
});
