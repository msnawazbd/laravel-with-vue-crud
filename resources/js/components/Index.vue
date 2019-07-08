<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contacts</div>

                    <div class="card-body">
                        <div v-if="response.success">
                            <div class="alert alert-success">{{ response.msg }}</div>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="contact in contacts" :key="contact.id">
                                <th scope="row">{{ contact.id }}</th>
                                <td>{{ contact.name }}</td>
                                <td>{{ contact.email }}</td>
                                <td>{{ contact.contact }}</td>
                                <td>
                                    <a :href="baseURL + '/show/' + contact.id" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <button @click.prevent = "deleteContact(contact.id)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                contacts: [],
                response: {},
            }
        },
        mounted() {
            axios.get(baseURL + '/api/contacts')
                .then(response => {
                    this.contacts = response.data.data;
                    console.log(response.data.data);
                })
                .catch(errors => console.log(errors));
        },
        methods : {
            deleteContact(id){
                let uri = baseURL + '/api/contact/delete/' + id;
                axios.delete(uri)
                    .then(response => {
                        this.response = response.data;
                        this.contacts.splice(this.contacts.indexOf(id), 1);
                    })
                    .catch(errors => console.log(errors));
            }
        }
    }
</script>
