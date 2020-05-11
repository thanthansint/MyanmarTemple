<template>
    <div>
        <Header/>
        <About/>
        <UserPanelAnnouncement/>
        <Footer/>
    </div>
</template>

<script>
import Header from './Header.vue'
import About from './About.vue'
import UserPanelAnnouncement from './UserPanelAnnouncement.vue'
import Footer from './Footer.vue'


    export default {
        name: 'UserRootAnnouncement',
        components: {
            Header,
            About,
            UserPanelAnnouncement,
            Footer
        }
    }
</script>
<style scoped>

</style>
