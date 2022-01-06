import Router from "vue-router";
import Home from "./components/ExampleComponent.vue";
import About from "./components/AboutComponent.vue";
import Layout from "./components/Layout/LayoutComponent.vue";
export default new Router({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "layout",
            component: Layout,
            children: [
                {
                    path: "/",
                    name: "main",
                    component: Home,
                },
                {
                    path: "/about",
                    name: "about",
                    component: About,
                },
            ],
        },
    ],
});
