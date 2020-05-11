<template>
    <div class="row container">
        <div class="col s12">
            <p class="blue-text text-darken-4 center-align createAn">Create Announcement</p>
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
}
</script>
<style lang="scss">
.createAn {
    font-size: 30px;
}
@media screen and (max-width: 600px) {
.createAn {
    font-size: 17px;
}
}
@media screen and (min-width: 601px) and (max-width: 992px) {
.createAn {
    font-size: 20px;
}
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
.createAn {
    font-size: 25px;
}
}
</style>
