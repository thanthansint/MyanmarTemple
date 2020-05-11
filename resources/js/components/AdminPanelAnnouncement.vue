<template>
    <div class="container" id="frame-size">
        <div id="toAnnouncement" class="row">
            <span class="green-text text-darken-4 pre">Upcoming Avtivities</span>
            <a href="#toEvent"><i class="small material-icons up">arrow_upward</i></a>
            <a href="#toLocation"><i class="small material-icons down">arrow_downward</i></a>
        </div>
        <div class="card announcement-frame" v-if="!announcements.length">
            <p class="heading center-align">No Announcement !!!</p>
        </div>
        <div v-for="announcement in announcements" :key="announcement.id" class="card-panel announcement-frame">

            <div class="row center-align">
                <div class="col s8 m8 l8 xl8">
                    <p class="heading">{{announcement.title}}</p>
                </div>
                <div class="col s2 m2 l2 xl2 but-setting">
                    <button v-on:click="editing(announcement.id)" class="pink darken-4 white-text btn-small butt-corner">Edit</button>
                    <button v-on:click="deleting(announcement.id)" class="pink darken-4 white-text btn-small butt-corner">Delete</button>
                </div>
            </div>
            <div class="time">
                <span class="space">Time:</span><span>{{announcement.announcement_time}}</span>
            </div>
            <div class="time">
                <span class="space">Date:</span><span>{{announcement.announcement_date}}</span>
            </div>
            <div class="time">
                <span class="space">Loation:</span><span>{{announcement.location}}</span>
            </div>
            <div class="content">
                <p>{{announcement.content}}</p>
            </div>
            <!-- <div>
                {{ announcements.links() }}
            </div> -->
        </div>
    </div>
</template>

<script>

export default {
    name: 'AdminPanelAnnouncement',
    data: function() {
        return {
            announcements: [],
            interested: 0,
            gone: 0
        }
    },
     methods: {
        myDisplayAnnouncement: function(){
            axios.post("/retrieveAnnouncement")
            .then(
                response => {
                    this.announcements = response.data.announcements;
                    console.log(this.announcements);
                })
            .catch( error => {
                    console.log(error.response);
                    //window.location = "/adminHome";
                });
        },
        editing: function(id) {
            window.location='/editingAnnouncement/'+ id;
        },
        deleting: function(id) {
            window.location = '/deletingAnnouncement/'+id;
        }

    },
    mounted(){
        this.myDisplayAnnouncement();
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
#frame-size {
    width: 90vw;
    height: auto;
    @include position-setting(relative, 110vh, 1vw);
}
.announcement-frame{
    border: 2px solid blue;
    border-radius: 8px;
    background-color: #b9f6ca;
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
    padding-top: 30px;
    padding-bottom: 30px;
}
.setting{
    padding-top: 20px;
}
.pre {
    margin-top: 30px;
    font-size: 30px;
    font-weight: 1000;
    padding: 35px 0;
    text-decoration: none;
    text-transform: uppercase;
}
.up{
    margin-top: 25px;
    font-size: 20px;
    padding: 35px 0;
    margin-left: 34vw;
}
.down {
    margin-top: 25px;
    font-size: 20px;
    padding: 35px 0;
}
</style>
