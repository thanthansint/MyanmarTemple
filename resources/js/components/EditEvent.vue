<template>
    <div class="row container">
        <div class="col s12">
            <h3 class="blue-text text-darken-4">Create Event</h3>
            <EditForm @editingEvent="myEditEvent" />
        </div>
    </div>
</template>
<script>
import EditForm from './EditForm.vue'

export default {
    name: 'EditEvent',
    components: {
        EditForm
    },
    data: function() {
        return {
            id: '',
            title: '',
            date: '',
            time: '',
            location: '',
            content: ''
        }
    },
    methods: {
        myEditEvent: function(id, title, date, time, location, content){

            this.id= id;
            this.title= title;
            this.date= date;
            this.time= time;
            this.location= location;
            this.content= content;

        }
    }
}
</script>
<style scoped>

</style>
