<template>
    <div>
        <div id="banner1">
            <div class="row" id="banner2">
                <div class="col s2 m3 l3">
                    <img class="responsive-img" id="flag" src="/image/flag.png" alt="buddhist flag">
                </div>
                <div class="center-align">
                    <p class="title">MYANMAR BUDDHIST TEMPLE</p>
                </div>
                <div class="col s2 m3 l3">
                    <img class="responsive-img" id="logo" src="/image/logo.jpg" alt="Myanmar Buddhist Temple Logo">
                </div>
            </div>
        </div>
        <div class="row col s12 m12 l12 xl12">
            <img class="responsive-img" id="background-image" src="/image/shwedagon_night.jpg" alt="shwedagon pagoda">
        </div>
        <!-- <div class="menuBar row center-align">
            <nav>
                <div class="nav-wrapper blue darken-4">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="lefft hide-on-med-and-down">
                    <li class="col m3 l3"><a href="#toAbout" class="menu-color">ABOUT</a></li>
                    <li class="col m3 l3"><a href="#toEvent" class="menu-color">EVENTS</a></li>
                    <li class="col m3 l3"><a href="#toAnnouncement" class="menu-color">ANNOUNCEMENTS</a></li>
                    <li class="col m3 l3"><a href="#toLocation" class="menu-color">LOCATION</a></li>
                </ul>
                </div>
            </nav>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">EVENTS</a></li>
                <li><a href="#">ANNOUNCEMENTS</a></li>
                <li><a href="#">LOCATION</a></li>
            </ul>
        </div> -->
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
    @include widthHeight(5vw, auto);
    @include frame-setting(relative, 2vh, null);
}
#logo {
    padding-top: 7px;
    float: right;
    @include widthHeight(5vw, auto);
    @include frame-setting(relative, 3vh, null);
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
    @include frame-setting(absolute, 32vh, 3vw);
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
}
@media screen and (min-width: 601px) and (max-width: 992px) {
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
}

</style>
