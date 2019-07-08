<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Details</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>{{ contact.name }}</td>
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
        props : ['contact']
    }
</script>
