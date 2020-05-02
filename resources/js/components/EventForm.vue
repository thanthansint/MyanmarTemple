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
            <span><div v-on:click="addEventClick" class="blue darken-4 white-text btn-small">Add</div></span>
            <span><div v-on:click="backClick" class="blue darken-4 white-text btn-small">Back</div></span>
        </form>
    </div>
</template>
<script>
export default {
    name: 'EventForm',
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
        addEventClick: function() {
            this.$emit('addEvent', this.title, this.date, this.time, this.location, this.content);
        },
        backClick: function() {
            window.location = "/adminHome";
        }
    }
}
</script>
<style scoped>

</style>
