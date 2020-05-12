<template>
   <div class="container" >
        <div id="toEvent" class="row">
            <span  class="green-text text-darken-4 preE col s6 m6 l6">Previous Avtivities</span>
            <a href="#toAbout"><i class="small material-icons upE col s6 m6 l6">arrow_upward</i></a>
            <a href="#toAnnouncement"><i class="small material-icons downE col s6 m6 l6">arrow_downward</i></a>
        </div>
        <div v-for="event in events" :key="event.id" class="card-panel event-frame">
            <div class="row center-align">
                <div class="col s8 m8 l8 xl8">
                    <p class="headingE">{{event.title}}</p>
                </div>
            </div>
            <div class="timeE">
                <span class="spaceE">Time:</span><span>{{event.event_time}}</span>
            </div>
            <div class="timeE">
                <span class="spaceE">Date:</span><span>{{event.event_date}}</span>
            </div>
            <div class="timeE">
                <span class="spaceE">Loation:</span><span>{{event.location}}</span>
            </div>
            <div class="contentE text-justification">
                <p>{{event.content}}</p>
            </div>
        </div>
        <!-- <div>
            {{events.links()}}
        </div> -->
    </div>
</template>

<script>

export default {
    name: 'UserPanelEvent',
    data: function() {
        return {
            events: [],
            interested: 0,
            gone: 0,
        }
    },
    methods: {
        myDisplayEvent: function(){

            axios.post("/retrieveEvent")
            .then(
                response => {
                    this.events = response.data.events;
                })
            .catch( error => {
                    console.log(error.response);
                    window.location = "/home";
                });
        },
    },
    mounted(){
        this.myDisplayEvent();
    }
}
</script>

<style lang="scss">
@mixin position-setting($pos, $top, $left){
    position: $pos;
    top :$top;
    left: $left;
}
.event-item {
    @include position-setting(absolute, 100vh, null);
}
.event-frame{
    border: 2px solid red;
    border-radius: 8px;
}
.headingE{
    font-size: 25px;
    padding: 25px;
    padding-left: 30px;
    font-weight: 800;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
.but-setting {
    margin-top: 30px;
    font-size: 25px;
}
.butt-corner {
    border: 1px solid red;
    border-radius: 8px;
}
.timeE{
    color: blue;
    font-size: 20px;
    padding: 10px 25px;
}
.spaceE{
    padding: 0 25px;
}
.contentE{
    font-size: 20px;
    padding-left: 15px;
    margin-top: 20px;
}
.preE {
    margin-top: 30px;
    font-size: 30px;
    font-weight: 1000;
    text-decoration: none;
    text-transform: uppercase;
}
.upE{
    font-size: 20px;
    padding: 35px 0;
    margin-left: 34vw;
}
@media screen and (max-width: 600px) {
.preE {
    font-size: 20px;
    margin: 50px 0;
}
.headingE{
    font-size: 17px;
}
.timeE{
    color: blue;
    font-size: 15px;
    padding: 10px 15px;
}
.spaceE{
    padding: 0 15px;
}
.contentE{
    font-size: 15px;
    padding-left: 5px;
}
.upE{
    margin-top: 50px;
    font-size: 15px;
    margin-left: 20vw;
}
.downE {
    margin-top: 50px;
    font-size: 15px;
}
}
@media screen and (min-width: 601px) and (max-width: 992px) {
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
}
</style>
