<template>
    <div class="container" id="frame-size">
        <div id="toEvent" class="row">
            <span  class="green-text text-darken-4 pre">Previous Avtivities</span>
            <a href="#toAbout"><i class="small material-icons up">arrow_upward</i></a>
            <a href="#toAnnouncement"><i class="small material-icons down">arrow_downward</i></a>
        </div>
        <div v-for="event in events" :key="event.id" class="card-panel event-frame">
            <div class="row center-align">
                <div class="col s8 m8 l8 xl8">
                    <p class="heading">{{event.title}}</p>
                </div>
                <div class="col s2 m2 l2 xl2 but-setting">
                    <button v-on:click="editing(event.id)" class="blue darken-4 white-text btn-small butt-corner">Edit</button>

                    <button v-on:click="deleting(event.id)" class="blue darken-4 white-text btn-small butt-corner">Delete</button>
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
            <div class="content">
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
    name: 'AdminPanel',
    data: function() {
        return {
            events: []
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
                    window.location = "/adminHome";
                });
        },
        editing: function(id) {
            window.location='/editingEvent/'+ id;
        },
        deleting: function(id) {
            window.location = '/deletingEvent/'+id;
        }
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
html {
  scroll-behavior: smooth;
}
.event-item {
    @include position-setting(absolute, 100vh, null);
}
#frame-size {
    width: 90vw;
    @include position-setting(relative, 110vh, 1vw);
}
.event-frame{
    border: 2px solid red;
    border-radius: 8px;
}
.heading{
    font-size: 30px;
    padding: 25px;
    padding-left: 25px;
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
    margin-top: 25px;
    padding: 25px 0;
    text-decoration: none;
    text-transform: uppercase;
}
.up{
    margin-top: 25px;
    font-size: 20px;
    padding: 25px 0;
    margin-left: 20vw;
}
.down {
    margin-top: 25px;
    font-size: 20px;
    padding: 35px 0;
    //margin-left: 1vw;
}
</style>
