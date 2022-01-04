<template>
    <div class="container">
        <div>
            <header-compoent />
        </div>
        <main>
            <router-view />
        </main>
        <div>
            <footer-component />
        </div>
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
