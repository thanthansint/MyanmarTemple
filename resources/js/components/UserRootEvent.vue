<template>
    <div>
        <Header />
        <About />
        <UserPanelEvent/>
        <Footer/>
    </div>
</template>

<script>
import Header from './Header.vue'
import About from './About.vue'
import Footer from './Footer.vue'
import UserPanelEvent from './UserPanelEvent.vue'

    export default {
        name: 'UserRootEvent',
        components: {
            Header,
            About,
            UserPanelEvent,
            Footer
        }
    }
</script>
<style scoped>

</style>
