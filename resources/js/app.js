require("../sass/app.scss");

import Vue from "vue";
import VueRouter from "vue-router";

import router from "./routes";

window.Vue = Vue;
Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    router,
});
