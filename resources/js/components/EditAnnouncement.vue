<template>
    <div class="row container">
        <div class="col s12">
            <h3 class="blue-text text-darken-4">Create Announcement</h3>
            <EditAnnouncementForm />
            <!-- <EditAnnouncementForm @editingAnnouncement="myEditAnnouncement" /> -->
        </div>
    </div>
</template>
<script>
import EditAnnouncementForm from './EditAnnouncementForm.vue'

export default {
    name: 'EditAnnouncement',
    components: {
        EditAnnouncementForm
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
    }
    // methods: {
    //     myEditAnnouncement: function(id, title, date, time, location, content){

    //         this.id= id;
    //         this.title= title;
    //         this.date= date;
    //         this.time= time;
    //         this.location= location;
    //         this.content= content;

    //     }
    //}
}
</script>
<style scoped>

</style>
