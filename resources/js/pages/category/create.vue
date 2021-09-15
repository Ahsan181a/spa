<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-item center">
                        <h5 class="mb-0">Create category</h5>
                        <router-link  :to="{name:'create-category'}" class="btn btn-primary">Category List</router-link>
                    </div>
                    <div class="card-body">
                       <div class="row">
                           <div class="col-md-6 offset-md-2">
                                <form @submit.prevent="CategoryCreate">
                               <div class="form-group">
                                   <label for="">Enter Category Name</label>
                                   <input type="text" class="form-control" v-model="categoryForm.name" placeholder="category name" name="name" :class="{'is-invalid':categoryForm.errors.has('name')}"> 

                                   <has-error :form="categoryForm" field="name"></has-error>
                               </div>
                               <div class="form-group">
                                   <button type="submit" class="btn btn-success">Create Category</button>
                               </div>
                             </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Form from 'vform'

    export default {
        data(){
            return{
                categoryForm: new Form({
                  name: '',
                  slug: ''
                }),
                
            }
        },
        methods:{
            CategoryCreate(){
                 this.categoryForm.post('/api/category').than(({data})=>{
                    console.log(data)
                })
            }
        }
    }
</script>
