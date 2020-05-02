<template>
    <div class="container">
        <form @submit="checkForm" >
            <p v-if="errors.length">
                <b>Please correct the following error(s):</b>
                <ul>
                    <li v-for="error in errors" :key="error">{{ error }}</li>
                </ul>
            </p>
            <input v-model="newtitle">
            <input v-model="newdate">
            <input v-model="newtime">
            <input v-model="newlocation">
            <textarea v-model="newcontent"></textarea>
            <span><div v-on:click="edit" class="blue darken-4 white-text btn-small butt-corner">Edit</div></span>
            <span><div v-on:click="back" class="blue darken-4 white-text btn-small butt-corner">Back</div></span>
        </form>
    </div>
</template>
<script>
export default {
    name: 'EditForm',
    props: {
        id: String,
        title: String,
        date: String,
        time: String,
        location: String,
        content: String
    },
    data: function() {
        return {
        newid: this.id,
        newtitle: this.title,
        newdate: this.date,
        newtime: this.time,
        newlocation: this.location,
        newcontent: this.content,
        errors: []
        }
    },
    mounted: function() {
        // this.$root.$on('edit',this.myEdit);
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
        edit: function() {
            axios.post("/editEvent", {
                id: this.newid,
                title: this.newtitle,
                date: this.newdate,
                time: this.newtime,
                location: this.newlocation,
                content: this.newcontent
            })
            .then(
                response => {
                    console.log(response.data.message);
                    if (response.data.message == 'Edit Success') {
                        window.location = "/main";
                        console.log("Edit Success");
                    } else {
                        window.location = "/main";
                        console.log("Edit Fail");
                    }
                })
            .catch( error => {
                    console.log(error.response);
                    window.location = "/main";
                });
            console.log("Id="+this.newid);
            console.log("Title="+this.newtitle);
        },
        back: function() {
            window.location = "/adminHome";
        }
    }
}
</script>
<style lang="scss">
.butt-corner {
    border: 1px solid red;
    border-radius: 8px;
}
</style>
