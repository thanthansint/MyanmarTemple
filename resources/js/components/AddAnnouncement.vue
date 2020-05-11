<template>
    <div class="row container">
        <div class="col s12">
            <p class="blue-text text-darken-4 center-align createA">Announcement Form</p>
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
<style lang="scss">
.createA {
     font-size: 30px;
}
@media screen and (max-width: 600px) {
    .createA {
        font-size: 17px;
    }
}
@media screen and (min-width: 601px) and (max-width: 992px) {
    .createA {
        font-size: 20px;
    }
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
    .createA {
        font-size: 25px;
    }
}
</style>
