<template>
    <div>
        <Header/>
        <AdminPanel/>
        <Footer/>
    </div>
</template>

<script>
import Header from './Header.vue'
import Footer from './Footer.vue'
import AdminPanel from './AdminPanel.vue'
    export default {
        name: 'Root',
        components: {
            Header,
            Footer,
            AdminPanel
        }
    }
</script>
<style scoped>

</style>
