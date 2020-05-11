<template>
    <div>
        <Header />
        <About />
        <AdminPanelEvent />
        <Footer/>
    </div>
</template>

<script>
import Header from './Header.vue'
import About from './About.vue'
import Footer from './Footer.vue'
import AdminPanelEvent from './AdminPanelEvent.vue'

    export default {
        name: 'EventRoot',
        components: {
            Header,
            About,
            AdminPanelEvent,
            Footer
        }
    }
</script>
<style scoped>

</style>
