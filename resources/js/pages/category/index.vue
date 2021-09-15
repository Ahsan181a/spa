<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-item center">
                        <h5 class="mb-0">Product category</h5>
                        <router-link  :to="{name:'create-category'}" class="btn btn-primary">Create category</router-link>
                    </div>
                    <div class="card-body">
                       <table class="table">
                           <thead>
                               <tr>
                                  <th>id</th>
                                  <th>Name</th>
                                  <th>Slug</th>
                                  <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>i</td>
                                   <td>Fashion</td>
                                   <td>fashion</td>
                                   <td>
                                       <a href="" class="btn btn-primary btn sm">Edit</a>
                                       <router-link to="{name:create-category}" class="btn btn-danger btn sm">Delete</router-link>
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
