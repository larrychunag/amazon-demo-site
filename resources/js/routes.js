import Router from "vue-router";
import Home from "./components/ExampleComponent.vue";
import About from "./components/AboutComponent.vue";

export default new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },
    ],
});
