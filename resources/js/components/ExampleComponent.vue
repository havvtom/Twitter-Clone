<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        {{user}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        data () {
            return {
                user: null
            }
        },
        methods: {
            getUser () {
                axios.get('/api/user')
                .then(response=>{
                    this.user = response.data;
                })
            }
        },
        mounted() {
            this.getUser();
            // console.log('Component mounted.')
        }
    }
</script>
