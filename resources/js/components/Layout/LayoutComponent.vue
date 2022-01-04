<template>
    <div>
        <header-compoent />
        <main>
            <router-view />
        </main>
        <footer-component />
    </div>
</template>

<script>
import HeaderCompoent from "./HeaderComponent.vue";
import FooterComponent from "./FooterComponent.vue";
export default {
    components: {
        HeaderCompoent,
        FooterComponent,
    },
};
</script>
