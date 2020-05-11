<template>
    <div>
        <div id="banner1">
            <div class="row" id="banner2">
                <div >
                    <img class="responsive-img" id="flag" src="/image/flag.png" alt="buddhist flag">
                </div>
                <div class="center-align title-size">
                    <p class="title">MYANMAR BUDDHIST TEMPLE</p>
                </div>
                <div >
                    <img class="responsive-img" id="logo" src="/image/logo.jpg" alt="Myanmar Buddhist Temple Logo">
                </div>
            </div>
        </div>
        <div class="row col s12 m12 l12 xl12">
            <img class="responsive-img" id="background-image" src="/image/shwedagon_night.jpg" alt="shwedagon pagoda">
        </div>
    </div>
</template>
<script>
export default {

}
</script>
<style lang="scss">
@mixin frame-setting($pos, $top, $left) {
    position: $pos;
    top: $top;
    left: $left;
}
@mixin widthHeight($w, $h){
    width: $w;
    height: $h;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.menu-color {
    color: yellow;
}
#banner1 {
    border: 10px double red;
    border-radius: 8px;
    @include frame-setting(absolute, 15vh, 5vw);
    @include widthHeight(90vw, 28.5vh);
}
#banner2 {
    border: 10px double blue;
    border-radius: 8px;
    @include widthHeight(92vw, 25vh);
    @include frame-setting(relative, null, -4vh);
    background-color: #FFFFFF;
}
#flag {
    padding-top: 25px;
    float: left;
    @include widthHeight(10vw, auto);
}
.title-size{
    @include widthHeight(70vw, null);
}
#logo {
    padding-top: 7px;
    float: right;
    @include widthHeight(10vw, auto);
}
.title {
    letter-spacing: .1rem;
    color: #1b5e20;
    padding: 25px 25px;
    font-size: 45px;
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
}
#background-image{
    @include widthHeight(92vw, 63vh);
    @include frame-setting(absolute, 33vh, 3vw);
    object-fit: fill;
    padding-left: 30px;
    padding-top: 5px;
}
.menuBar {
    @include frame-setting(absolute, 107vh, 5vw);
    @include widthHeight(90vw, null);
    border: 3px solid red;
    border-radius: 5px;
}
@media screen and (max-width: 600px) {
#banner1 {
    border: 5px double red;
    border-radius: 8px;
    @include frame-setting(absolute, 10vh, 5vw);
    @include widthHeight(90vw, 16.5vh);
}
#banner2 {
    border: 5px double blue;
    border-radius: 8px;
    @include widthHeight(88vw, 15vh);
    @include frame-setting(relative, 0.1vh, 0.1vw);
    background-color: #FFFFFF;
}
#flag {
    padding-top: 35px;
    float: left;
    @include widthHeight(10vw, auto);

}
#logo {
    padding-top: 7px;
    float: right;
    @include widthHeight(10vw, auto);
    @include frame-setting(relative, 3vh, 3vw);
}
.title-size{
    @include widthHeight(60vw, null);
}
.title {
    letter-spacing: .1rem;
    color: #1b5e20;
    padding: 5px 5px;
    font-size: 17px;
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
    @include frame-setting(relative, 2vh, 2vw);
}
#background-image{
    @include widthHeight(95vw, 20vh);
    @include frame-setting(absolute, 19vh, 0);
    object-fit: fill;
    padding-left: 20px;
    padding-top: 5px;
}
}
@media screen and (min-width: 601px) and (max-width: 992px) {
#banner1 {
    border: 10px double red;
    border-radius: 8px;
    @include frame-setting(absolute, 10vh, 5vw);
    @include widthHeight(90vw, 18vh);
}
#banner2 {
    border: 10px double blue;
    border-radius: 8px;
    @include widthHeight(87vw, 15vh);
    @include frame-setting(relative, 0.5vh, 0);
    background-color: #FFFFFF;
}
#flag {
    padding-top: 50px;
    float: left;
    @include widthHeight(8vw, auto);
}
#logo {
    padding-top: 7px;
    float: right;
    @include widthHeight(8vw, auto);
    @include frame-setting(relative, 3vh, 2vw);
}
.title-size{
    @include widthHeight(65vw, null);
}
.title {
    letter-spacing: .1rem;
    color: #1b5e20;
    padding: 5px 5px;
    font-size: 30px;
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
    @include frame-setting(relative, 4vh, 2vw);
}
#background-image{
    @include widthHeight(94vw, 23vh);
    @include frame-setting(absolute, 22vh, 1vw);
    object-fit: fill;
    padding-left: 30px;
    padding-top: 5px;
}
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
#banner1 {
    border: 10px double red;
    border-radius: 8px;
    @include frame-setting(absolute, 5vh, 5vw);
    @include widthHeight(90vw, 18vh);
}
#banner2 {
    border: 10px double blue;
    border-radius: 8px;
    @include widthHeight(88vw, 15vh);
    @include frame-setting(relative, 0.5vh, 0);
    background-color: #FFFFFF;
}
#flag {
    padding-top: 25px;
    float: left;
    @include widthHeight(10vw, auto);
    @include frame-setting(rlative, 1vh, null);
}
#logo {
    padding-top: 7px;
    float: right;
    @include widthHeight(10vw, auto);
    @include frame-setting(relative, 1vh, 1vw);
}
.title-size{
    @include widthHeight(65vw, null);
}
.title {
    letter-spacing: .1rem;
    color: #1b5e20;
    padding: 5px 5px;
    font-size: 35px;
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
    @include frame-setting(relative, 4vh, 0);
}
#background-image{
    @include widthHeight(94vw, 23vh);
    @include frame-setting(absolute, 22vh, 1vw);
    object-fit: fill;
    padding-left: 30px;
    padding-top: 5px;
}
}

</style>
