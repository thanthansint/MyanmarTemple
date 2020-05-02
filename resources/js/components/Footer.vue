<template>
    <div class="footer white-text"><p class="vertical">Copyright: 2010</p></div>
</template>

<script>
export default {
  name: 'Footer'
}
</script>

<style scoped>
    .footer {
        position: relative;
        top: 200vh;
        left: 5vw;
        width: 90vw;
        height : 15vh;
        font-size: 20px;
        background-color: #0D47A1;
        /* margin-top: 2vh; */
    }
    .vertical{
        position: absolute;
        top: 5vh;
        left: 35vw;
    }
</style>
