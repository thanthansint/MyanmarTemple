<template>
        <div class="row " id="toAbout">
            <div class="sidebar center-align">
                <div class="sidebar-item"><a href="#overview" class="sidebar-item-color">Overview</a></div><div class="divider"></div>
                <div class="sidebar-item"><a href="#history" class="sidebar-item-color">History</a></div><div class="divider"></div>
                <div class="sidebar-item"><a href="#objective" class="sidebar-item-color">Objective</a></div><div class="divider"></div>
                <div class="sidebar-item"><a href="#activities" class="sidebar-item-color">Activities</a></div><div class="divider"></div>
                <div class="sidebar-item"><a href="#bod" class="sidebar-item-color">Board of Directors</a></div>

                <div id="toLocation" class="message-set">
                    Where is it located?
                </div>
                <div class="image">
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
                <div class="map col s12 m12 l12">
                    <iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.6702986201735!2d-113.9975014491888!3d51.04070987946086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717ac334692d3b%3A0xdf753d2af56d5561!2s2804%2014%20Ave%20SE%2C%20Calgary%2C%20AB%20T2A%200J9!5e0!3m2!1sen!2sca!4v1588746169681!5m2!1sen!2sca" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="display" >
                <div id="overview" class="center-align margin-setting"><span class="overview">Overview</span></div>
                <div class="text-justification">
                    <p class="text">Myanmar Buddhist Temple is the religious society for Myanmar people, which is located in Calgary. It was officially formed and incorporated under the Alberta Religious Society Land Act on November 27, 2000. Subsequently, with effect from 1st January 2003, the activities of temple were recognized as a charitable organization by the Canada Revenue Agency.</p>
                </div>
                <div class="divider"></div>
                <div id="history" class="center-align margin-setting"><span class="overview">History</span></div>
                <div>
                    <div class="col s6 m6 l6">
                        <img class="responsive-img" src="/image/temple.jpg" alt="buddhist statue">
                    </div>
                    <div class="text-justification">
                        <p class="text">The temple was established in the Theravada tradition of Buddhism and it is funded entirely donations in the way of Buddhist monasteries that have been developed traditionally since many years ago. With material support from devotees around Canada and other regions, the temple (society) can devote itself to the cultivation of a wholesome life and the realization of the truth.</p>
                        <p class="text">Venerable Shwe Pyi Aye Sayadaw arrived in our monastery on 18th May 2005. Since then, he has been fulfilling disseminations of Theravada Buddhism through dhamma talks, meditation, charitable giving and traditional ceremonies.</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div id="objective" class="center-align margin-setting"><span class="overview">Objective</span></div>
                <div class="text-justification">
                    <p class="obj">Buddhist Activities</p>
                    <ul>
                        <li class="text">* To link up with the growing worldwide culture of people committed to the Buddha's teachings and lifestyle</li>
                        <li class="text">* To offer its services to all Buddhist traditions and Non-Buddhist traditions</li>
                        <li class="text">* To conduct the regular meditation practice and Dhamma talk to every walk of life</li>
                        <li class="text">* To continue to conduct religious celebrations on notable religious festival days as per Myanmar calendar so as to maintain the cultural heritage</li>
                    </ul>

                    <p class="obj">Community Services</p>
                    <ul>
                        <li class="text">* To develop opportunities for diversity-focused organizations and individuals to share their experiences and findings</li>
                        <li class="text">* To provide human assistance and to conserve the traditional culture</li>
                        <li class="text">* To collaborate with other communities and vulnerable groups to provide social needs and assist the reform of social protection by creating models of targeting and service provision</li>
                        <li class="text">* To participate in Calgary Multicultural Center for the fulfillment for the strengths of Canada's cultural diversity</li>
                    </ul>
                </div>
                <div class="divider"></div>
                <div id="activities" class="center-align margin-setting"><span class="overview">Activities</span></div>
                <div class="text-justification">
                    <p class="obj">Vipassana Meditation</p>
                    <p class="text">The “Vipassana Meditation” is the effort to obtain the realization of three characteristics so-called Impermanent, Suffering and Impersonal. By doing so, the meditator can destroy all mental hindrances or defilements such as greed, lust, craving, attachment, desire, ill will, ignorance, conceit, jealousy and so on. </p>
                    <p class="text">In the technique of Vipassana Meditation there is no room for analyzing, thinking about, criticizing, intellectual reasoning, logical thinking and preconception. Just observe it as it is. Just be mindful of it as it really occurs, without getting involved in it, without reaction, without attachment and without judgment. Watch it as it is. Watch any mental state or physical process as it really occurs, that's all. </p>
                    <p class="text">Be mindful of it as it really occurs. Then when your mindfulness becomes gradually constant, continuous and powerful, your mind would be concentrated to a certain extent you begin to realize the true nature of the mental state or physical process, which is observed as it, is. So this meditation is known as Mindfulness Meditation or Insight Meditation or Vipassana Meditation.</p>
                    <div v-bind:style="GridStyle" class="grid-setting">
                        <div><img id="item" class="responsive-img" src="/image/meditation.jpg" alt="meditation of people"></div>
                        <div><img id="item" class="responsive-img" src="/image/meditation1.jpg" alt="meditation of people"></div>
                        <div><img id="item" class="responsive-img" src="/image/meditation2.jpg" alt="meditation of people"></div>
                        <div><img id="item" class="responsive-img" src="/image/meditation3.jpg" alt="meditation of people"></div>
                        <div><img id="item" class="responsive-img" src="/image/meditation4.jpg" alt="meditation of people"></div>
                    </div>
                    <div class="text-justification">
                        <p class="text">There are many resources to learn mediation : video and books.</p>
                        <a href="https://www.burmalibrary.org/en/category/burmese-and-general-buddhist-teaching-meditation-links-resources-directories" class="btn-floating btn-large pink pulse center-align book">Books</a>
                        <a href="http://www.dhammadownload.com/" class="btn-floating btn-large blue pulse center-align video">Videos</a>
                    </div>
                    <div class="divider"></div>
                </div>
                <div id="bod" class="center-align margin-setting"><span class="overview">Board of Directors</span></div>
                <div class="margin-setting text-justification">
                    <p class="obj">President- Daw Than Than Oo</p>
                    <p class="obj">Vice President - U Win Myint</p>
                    <p class="obj">Secretary - U Aung Naing Myint</p>
                    <p class="obj">Treasurer - U Kan Tun</p>
                    <p class="obj">Administrator - U Win Naing Myint</p>
                    <p class="obj">Member - Daw Ei Ei Khin</p>
                    <p class="obj">Member - Daw Khine Zar Thwe</p>
                </div>
            </div>
        </div>
</template>
<script>

export default {
    data: function() {
        return {
            GridStyle: {
                'display': 'grid',
                'grid-template-columns': 'repeat(auto-fill,minmax(18vw, 1fr))',
                'grid-template-rows': '1fr',
                'column-gap': '10px',
                'row-gap': '10px',
                'justify-items': 'center',
                'align-items': 'center'
            }
        }
    }
}
</script>
<style lang="scss">
@mixin position-setting($pos, $top, $left){
    position: $pos;
    top :$top;
    left: $left;
}
@mixin display-setting($w, $p, $s, $c, $ml, $mb) {
    width: $w;
    border: $p $s $c;
    margin-left: $ml;
    margin-bottom: $mb;
}
@mixin font-setting($fs, $color, $a, $b, $c, $d) {
    font-size: $fs;
    color: $color;
    padding: $a $b $c $d;
}
html {
  scroll-behavior: smooth;
}
#toAbout {
    padding-top: 60vh;
}
.sidebar {
    @include display-setting(20vw, 2px, solid, red, 6vw, 10vh);
    height: 100%;
}
.sidebar-item {
    padding: 20px 0;
    font-size: 20px;
    background-color:#0d47a1;
}
.sidebar-item-color {
    color: yellow;
}
.display {
    @include display-setting(67vw, 2px, solid, red, 1vw, 0);
    border: 2px solid red;
}
.down {
    margin-top: 25px;
    font-size: 20px;
    padding: 35px 0;
}
.overview {
    @include font-setting(25px, #0d47a1, 0, 0, 0, 0);
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: .1rem;
}
.obj {
    @include font-setting(22px, black, 0, 0, 0, 30px);
    margin-left: 20px;
    margin-bottom: 40px;
}
.margin-setting{
    margin: 60px 0;
}
.text-justification {
    text-align: justify;
    text-justify: inter-word;
}
.text {
    @include font-setting(20px, grey, 0, 30px, 30px, 30px);
}
.grid-setting {
    margin-left: 20px;
    margin-right: 40px;
    margin-bottom: 30px;
}
#item {
    margin: 10px;
    border-radius: 0.75rem;
    background-color: white;
    box-shadow: 10px 10px 20px grey;
    object-fit: cover;
    opacity: 100%;
}
.book {
    margin-left: 25vw;
    margin-bottom: 10vh;
}
.video {
    margin-left: 5vw;
    margin-bottom: 10vh;
}
.message-set{
    font-size: 20px;
    font-weight: 1000;
    padding-top: 50px;
    margin-bottom: 30px;
    text-transform: uppercase;
    text-decoration: none;
}
.image{
    width: 100%;
    @include position-setting(relative, 1vh, 0);
}
.map{
    width: 19vw;
    @include position-setting(relative, 5vh, 0);
    margin-bottom: 60px;
}
.map-size {
    width: 100%;
}
.address-text{
    font-size: 15px;
    color: rgb(28, 44, 28);
    padding-bottom: 20px;
}
@media screen and (max-width: 600px) {
#toAbout {
    padding-top: 37vh;
}
.sidebar {
    @include display-setting(25vw, 2px, solid, red, 4vw, 10vh);
    height: 100%;
}
.sidebar-item {
    padding: 20px 0;
    font-size: 13px;
    background-color:#0d47a1;
}
.display {
    @include display-setting(65vw, 2px, solid, red, 1vw, 0);
    border: 2px solid red;
}
.down {
    margin-top: 25px;
    font-size: 20px;
    padding: 35px 0;
}
.overview {
    @include font-setting(17px, #0d47a1, 10px, 0, 10px, 0);
    font-weight: 1000;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: .1rem;
}
.obj {
    @include font-setting(15px, black, 0, 0, 0, 5px);
    margin-left: 5px;
    margin-bottom: 10px;
}
.margin-setting{
    margin: 30px 0;
}
.text-justification {
    text-align: justify;
    text-justify: inter-word;
}
.text {
    @include font-setting(14px, grey, 0, 10px, 30px, 10px);
}
.message-set{
    font-size: 13px;
    font-weight: 1000;
    padding-top: 50px;
    margin-bottom: 30px;
    text-transform: uppercase;
    text-decoration: none;
}
.image{
    width: 100%;
    @include position-setting(relative, 1vh, 0);
}
.map{
    width: 19vw;
    @include position-setting(relative, 5vh, 0);
    margin-bottom: 60px;
}
.map-size {
    width: 100%;
    height: 70px;
}
.address-text{
    font-size: 11px;
    color: rgb(28, 44, 28);
    padding-bottom: 20px;
}
#item {
    margin: 10px;
    border-radius: 8px;
    background-color: white;
    box-shadow: 10px 10px 20px grey;
    object-fit: cover;
    opacity: 100%;
}
.book {
    margin-left: 10vw;
    margin-bottom: 6vh;
}
.video {
    margin-left: 5vw;
    margin-bottom: 6vh;
}

}
@media screen and (min-width: 601px) and (max-width: 992px) {
#toAbout {
    padding-top: 44vh;
}
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
#toAbout {
    padding-top: 45vh;
}
}
</style>
