<template>
<div class="container location">
    <div id="toLocation">
        <span class="message">Where is it located?</span><a href="#toAnnouncement"><i class="small material-icons up">arrow_upward</i></a>
    </div>

    <div class="row">
        <div class="col s12 m6 image">
            <div class="card">
                <div class="card-image">
                    <img src="/image/templebuilding.jpg">
                </div>
                <div class="card-content address-text">
                    <p>1408 27 St SE, Calgary, AB T2A 0J9</p>
                    <p>Phone:  403-604-1111</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <iframe class="map responsive-img" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.6702986201735!2d-113.9975014491888!3d51.04070987946086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717ac334692d3b%3A0xdf753d2af56d5561!2s2804%2014%20Ave%20SE%2C%20Calgary%2C%20AB%20T2A%200J9!5e0!3m2!1sen!2sca!4v1588746169681!5m2!1sen!2sca" width="430" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

</div>
</template>
<script>
export default {

}
</script>
<style lang="scss">
@mixin position-setting($pos, $top, $left){
    position: $pos;
    top :$top;
    left: $left;
}
html {
  scroll-behavior: smooth;
}
.message{
    font-size: 30px;
    padding-top: 25px;
    margin-bottom: 30vw;
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
}
.up {
    font-size: 20px;
    padding: 25px 0;
    margin-left: 39vw;
}
.location{
    @include position-setting(relative, 120vh, null);
}
.image{
    width: 70vw;
    //height: 300;
    @include position-setting(relative, 15vh, null);
}
.map{
    @include position-setting(relative, 17vh, 3vw);
}
.address{
    @include position-setting(relative, 30vh, null);
}
.address-title{
    font-size: 30px;
    font-weight: 800;
    color: rgb(137, 20, 148);
    text-transform: uppercase;
    padding-top: 15px;
    padding-bottom: 30px;
}
.address-text{
    font-size: 22px;
    color: rgb(28, 44, 28);
    padding-bottom: 20px;
}
</style>
