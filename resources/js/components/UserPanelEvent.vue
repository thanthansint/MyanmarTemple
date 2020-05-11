<template>
    <div class="container" id="frame-size">
        <div class="row">
            <span class="green-text text-darken-4 pre">Past Avtivities</span>
            <a href="#toAbout"><i class="small material-icons up">arrow_upward</i></a>
        </div>
        <div class="card event-frame" v-if="!events.length">
            <p class="heading center-align">No Events !!!</p>
        </div>
        <div v-for="event in events" :key="event.id" class="card-panel event-frame">
            <div class="row center-align">
                <div class="col s8 m8 l8 xl8">
                    <p class="heading">{{event.title}}</p>
                </div>
            </div>
            <div class="time">
                <span class="space">Time:</span><span>{{event.event_time}}</span>
            </div>
            <div class="time">
                <span class="space">Date:</span><span>{{event.event_date}}</span>
            </div>
            <div class="time">
                <span class="space">Loation:</span><span>{{event.location}}</span>
            </div>
            <div class="section flow-text content">
                <p>{{event.content}}</p>
            </div>
        </div>
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
#frame-size {
    width: 90vw;
    height: auto;
    @include position-setting(relative, 110vh, 1vw);
}
.event-frame{
    border: 2px solid red;
    border-radius: 8px;
}
.heading{
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
.time{
    color: blue;
    font-size: 20px;
    padding: 10px 25px;
}
.space{
    padding: 0 25px;
}
.content{
    font-size: 20px;
    padding-left: 25px;
}
.pre {
    font-size: 30px;
    font-weight: 1000;
    text-decoration: none;
    text-transform: uppercase;
}
.up{
    font-size: 20px;
    padding: 35px 0;
    margin-left: 34vw;
}

</style>
