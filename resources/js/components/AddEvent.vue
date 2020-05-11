<template>
    <div class="row container">
        <div class="col s12">
            <p class="blue-text text-darken-4 create center-align">Create Event</p>
            <EventForm @addEvent="myAddEvent"/>
        </div>
    </div>
</template>
<script>
import EventForm from './EventForm.vue'

export default {
    name: 'AddEvent',
    components: {
        EventForm
    },
    // props: {
    //     num: Number
    // },
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
        myAddEvent: function(title, date, time, location, content){
            this.title= title;
            this.date= date;
            this.time= time;
            this.location= location;
            this.content= content;
            axios.post("/addEvent", {
                title: title,
                date: date,
                time: time,
                location: location,
                content: content
            })
            .then(
                response => {
                    console.log(response.data.message);
                    if (response.data.message == 'Successful-Event') {
                        window.location = "/main";
                        console.log("Event Success");
                    } else {
                        window.location = "/adminHome";
                        console.log("Event Fail");
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
.create {
    font-size: 30px;
}
@media screen and (max-width: 600px) {
    .create {
    font-size: 17px;
    }
}
@media screen and (min-width: 601px) and (max-width: 992px) {
    .create {
    font-size: 20px;
    }
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
    .create {
    font-size: 25px;
    }
}
</style>
