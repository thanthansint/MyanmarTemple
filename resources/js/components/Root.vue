<template>
    <div>
        <Header />
        <About />
        <AdminPanelEvent />
        <AdminPanelAnnouncement />
        <Footer/>
    </div>
</template>

<script>
import Header from './Header.vue'
import About from './About.vue'
import Footer from './Footer.vue'
import AdminPanelEvent from './AdminPanelEvent.vue'
import AdminPanelAnnouncement from './AdminPanelAnnouncement.vue'

    export default {
        name: 'Root',
        components: {
            Header,
            About,
            AdminPanelEvent,
            AdminPanelAnnouncement,
            Footer
        }
    }
</script>
<style scoped>

</style>
