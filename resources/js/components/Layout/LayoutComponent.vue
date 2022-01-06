<template>
    <div>
        <header-compoent />
        <div class="mt-3 ml-3">
            <side-bar-compoent />
        </div>
        <main class="h-[128rem] w-full">
            <router-view />
        </main>
        <footer-component />
    </div>
</template>

<script>
import HeaderCompoent from "./HeaderComponent.vue";
import FooterComponent from "./FooterComponent.vue";
import SideBarCompoent from "./SideBarCompoent.vue";
export default {
    components: {
        HeaderCompoent,
        FooterComponent,
        SideBarCompoent,
    },
};
</script>
