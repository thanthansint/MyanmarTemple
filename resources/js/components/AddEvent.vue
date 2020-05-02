<template>
    <div class="row container">
        <div class="col s12">
            <h3 class="blue-text text-darken-4">Create Event</h3>
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
<style scoped>

</style>
