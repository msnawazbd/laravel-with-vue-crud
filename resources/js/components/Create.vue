<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Create</div>

                    <div class="card-body">
                        <div v-if="response.success">
                            <div class="alert alert-success">{{ response.msg }}</div>
                        </div>

                        <form @submit.prevent="addPost">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" v-model="input.name" class="form-control" id="name" placeholder="Enter full name">
                                <small class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" v-model="input.email" class="form-control" id="email" placeholder="Enter email address">
                                <small class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" v-model="input.contact" class="form-control" id="contact" placeholder="Enter contact number">
                                <small class="form-text text-muted"></small>
                            </div>

                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                input: {},
                response: {},
            }
        },
        mounted() {
            console.log("Hello World!");
            console.log(baseURL);
        },
        methods: {
            addPost() {
                // let uri = baseURL + '/api/contact/create';

                axios.post(baseURL + '/api/contact/create', this.input)
                    .then(response => {
                        this.response = response.data;
                        console.log(response.data);
                    })
                    .catch(errors => console.log(errors));
            }
        }
    }
</script>
