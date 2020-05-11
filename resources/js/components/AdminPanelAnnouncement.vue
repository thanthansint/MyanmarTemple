<template>
    <div class="container" >
        <div id="toAnnouncement" class="row">
            <span class="green-text text-darken-4 prev">Upcoming Avtivities</span>
            <a href="#toEvent"><i class="small material-icons upward">arrow_upward</i></a>
            <a href="#toLocation"><i class="small material-icons downward">arrow_downward</i></a>
        </div>
        <div class="card announcement-frame" v-if="!announcements.length">
            <p class="heading center-align">No Announcement !!!</p>
        </div>
        <div v-for="announcement in announcements" :key="announcement.id" class="card-panel announcement-frame">

            <div class="row center-align">
                <div class="col s8 m8 l8 xl8">
                    <p class="headingA">{{announcement.title}}</p>
                </div>
                <div class="col s2 m2 l2 xl2 button-setting">
                    <button v-on:click="editing(announcement.id)" class="pink darken-4 white-text btn-small button-corner">Edit</button>
                    <button v-on:click="deleting(announcement.id)" class="pink darken-4 white-text btn-small button-corner">Delete</button>
                </div>
            </div>
            <div class="timeA">
                <span class="spaceA">Time:</span><span>{{announcement.announcement_time}}</span>
            </div>
            <div class="timeA">
                <span class="spaceA">Date:</span><span>{{announcement.announcement_date}}</span>
            </div>
            <div class="timeA">
                <span class="spaceA">Loation:</span><span>{{announcement.location}}</span>
            </div>
            <div class="contentA text-justification">
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
.announcement-frame{
    border: 2px solid blue;
    border-radius: 8px;
    background-color: #b9f6ca;
}
.headingA{
    font-size: 25px;
    padding: 25px;
    padding-left: 30px;
    font-weight: 800;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
.button-setting {
    margin-top: 30px;
    font-size: 25px;
}
.button-corner {
    border: 1px solid red;
    border-radius: 8px;
}
.timeA{
    color: blue;
    font-size: 20px;
    padding: 10px 25px;
}
.spaceA{
    padding: 0 25px;
}
.text-justification {
    text-align: justify;
    text-justify: inter-word;
}
.contentA{
    font-size: 20px;
    padding-left: 25px;
    padding-top: 30px;
    padding-bottom: 30px;
}
.setting{
    padding-top: 20px;
}
.prev {
    margin-top: 30px;
    font-size: 30px;
    font-weight: 1000;
    padding: 35px 0;
    text-decoration: none;
    text-transform: uppercase;
}
.upward{
    margin-top: 25px;
    font-size: 20px;
    padding: 35px 0;
    margin-left: 34vw;
}
.downward {
    margin-top: 25px;
    font-size: 20px;
    padding: 35px 0;
}
@media screen and (max-width: 600px) {
.headingA{
    font-size: 20px;
}
.prev {
    margin-top: 25px;
    font-size: 20px;
}
.timeA{
    color: blue;
    font-size: 18px;
    padding: 10px 25px;
}
.spaceA{
    padding: 0 25px;
}
.contentA{
    font-size: 18px;
    padding-left: 25px;
    padding-top: 30px;
    padding-bottom: 30px;
}
}
@media screen and (min-width: 601px) and (max-width: 992px) {
.headingA{
    font-size: 23px;
}
.prev {
    margin-top: 23px;
    font-size: 20px;
}
.timeA{
    color: blue;
    font-size: 20px;
    padding: 10px 25px;
}
.spaceA{
    padding: 0 25px;
}
.contentA{
    font-size: 20px;
    padding-left: 25px;
    padding-top: 30px;
    padding-bottom: 30px;
}
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
}
</style>
