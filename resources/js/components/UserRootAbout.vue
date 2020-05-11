<template>
    <div>
        <Header />
        <About />
        <Footer/>
    </div>
</template>

<script>
import Header from './Header.vue'
import About from './About.vue'
import Footer from './Footer.vue'


    export default {
        name: 'UserRootAbout',
        components: {
            Header,
            About,
            Footer
        }
    }
</script>
<style scoped>

</style>
