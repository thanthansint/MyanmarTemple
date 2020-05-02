<template>
    <div class="container" id="frame-size">
        <!-- <EditForm/> -->
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
            <div class="section flow-text content">
                <p>{{event.content}}</p>
            </div>
        </div>
    </div>
</template>
<script>
//import EditForm from './EditForm.vue'
export default {
    name: 'AdminPanel',
    components: {
        //EditForm
    },
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
            window.location='/edit/'+ id;
        },
        deleting: function(id) {
            window.location = '/delete/'+id;
        }
    },
    mounted(){
        this.myDisplayEvent();
    },


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
    height: 100vh;
    @include position-setting(relative, 110vh, 1vw);
}
.event-frame{
    border: 2px solid red;
    border-radius: 8px;
}
.heading{
    font-size: 35px;
    padding: 25px;
    padding-left: 30px;
    font-weight: 1000;
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
</style>
