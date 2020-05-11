<template>
    <div class="row container">
        <div class="col s12">
            <p class="blue-text text-darken-4 center-align createE">Create Event</p>
            <EditForm />
            <!-- <EditForm @editingEvent="myEditEvent" /> -->
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
}
</script>
<style lang="scss">
.createE {
    font-size: 30px;
}
@media screen and (max-width: 600px) {
.createE {
    font-size: 17px;
}
}
@media screen and (min-width: 601px) and (max-width: 992px) {
.createE {
    font-size: 20px;
}
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
.createE {
    font-size: 25px;
}
}
</style>
