<template>
    <div class="row container">
        <div class="col s12">
            <h3 class="blue-text text-darken-4">Announcement Form</h3>
            <AnnouncementForm @addAnnouncement="myAddAnnouncement"/>
        </div>
    </div>
</template>
<script>
import AnnouncementForm from './AnnouncementForm.vue'

export default {
    name: 'AddAnnouncement',
    components: {
        AnnouncementForm
    },
    data: function() {
        return {
            title: '',
            date: '',
            time: '',
            location: '',
            content: '',
            id: ''
        }
    },
    methods: {
        myAddAnnouncement: function(title, date, time, location, content){
            this.title= title;
            this.date= date;
            this.time= time;
            this.location= location;
            this.content= content;
            axios.post("/addAnnouncement", {
                title: title,
                date: date,
                time: time,
                location: location,
                content: content
            })
            .then(
                response => {
                    console.log(response.data.message);
                    if (response.data.message == 'Successful') {
                        window.location = "/main";
                        console.log("Announcement Success");
                    } else {
                        window.location = "/adminHome";
                        console.log("Announcement Fail");
                    }
                })
            .catch( error => {
                    console.log(error.response);
                    window.location = "/adminHome";
                });
        }
    }
}
</script>
<style scoped>

</style>
