<template>
    <div class="footer white-text center-align"><p>Copyright: 2010</p></div>
</template>

<script>
export default {
  name: 'Footer'
}
</script>

<style lang="scss">
    .footer {
        height : 15vh;
        font-size: 20px;
        padding-top: 50px;
        background-color: #0D47A1;
    }

@media screen and (max-width: 600px) {
    .footer {
        height : 15vh;
        font-size: 15px;
        padding-top: 40px;
        background-color: #0D47A1;
    }
}
@media screen and (min-width: 601px) and (max-width: 992px) {
    .footer {
        height : 15vh;
        font-size: 20px;
        padding-top: 55px;
        background-color: #0D47A1;
    }
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
    .footer {
        height : 15vh;
        font-size: 20px;
        padding-top: 55px;
        background-color: #0D47A1;
    }
}
</style>
