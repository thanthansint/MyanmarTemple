<template>
    <div class="container">
        <form @submit="checkForm" >
            <p v-if="errors.length">
                <b>Please correct the following error(s):</b>
                <ul>
                    <li v-for="error in errors" :key="error">{{ error }}</li>
                </ul>
            </p>
            <input v-model="title" placeholder="Title">
            <input v-model="date" placeholder="Date">
            <input v-model="time" placeholder="Time">
            <input v-model="location" placeholder="Location">
            <textarea v-model="content" placeholder="Content" rows="10"></textarea>

            <!-- <picture-input @change="onChange()" width="300" height="300" margin="16" accept="image/jpeg,image/png">
            </picture-input> -->

            <span><div v-on:click="addAnnouncement" class="blue darken-4 white-text btn-small">Add</div></span>
            <span><div v-on:click="back" class="blue darken-4 white-text btn-small">Back</div></span>
        </form>
    </div>
</template>
<script>
import PictureInput from 'vue-picture-input'
export default {
    name: 'AnnouncementForm',
    // components: {
    //   PictureInput
    // },
    data: function() {
        return {
            title: '',
            date: '',
            time: '',
            location: '',
            content: '',
            errors: []
        }
    },
    methods: {
    //     onChange () {
    //     console.log("Picture changed!")
    //   },
        checkForm: function (e) {
            if (this.title && this.date && this.time && this.location && this.content) {
                return true;
            }

            this.errors = [];

            if (!this.title) {
                this.errors.push('Title required.');
            }
            if (!this.date) {
                this.errors.push('Date required.');
            }
            if (!this.time) {
                this.errors.push('Time required.');
            }
            if (!this.location) {
                this.errors.push('Location required.');
            }
            if (!this.content) {
                this.errors.push('Content required.');
            }

            e.preventDefault();
        },
        addAnnouncement: function() {
            this.$emit('addAnnouncement', this.title, this.date, this.time, this.location, this.content);
        },
        back: function() {
            window.location = "/adminHome";
        }
    }
}
</script>
<style scoped>

</style>
