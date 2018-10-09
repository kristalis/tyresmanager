<template>
    <div class='row'>
        <h1>Tyres Brand</h1>
       
        <form action="#" @submit.prevent="createTbrand()">
            <div class="input-group">
                <input v-model="tbrand.brand" type="text" name="brand" class="form-control" autofocus>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">New Tyre Brand</button>
                </span>
            </div>
        </form>
        <h4>Brand in stock</h4>
        <ul class="list-group">
            <li v-if='list.length === 0'>There are no tyre brands yet!</li>
            <li class="list-group-item" v-for="(tbrand, index) in list">
                 {{ tbrand.brand }}
                 <button @click="deleteTbrand(tbrand.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                list: [],
                tbrand: {
                    id: '',
                    brand: ''
                }
            };
        },
        
        created() {
            this.fetchTbrandList();
        },
        
        methods: {
            fetchTbrandList() {
                axios.get('api/tbrands').then((res) => {
                    this.list = res.data;
                });
            },
 
            createTbrand() {
                axios.post('api/tbrands', this.tbrand)
                    .then((res) => {
                        this.tbrand.brand = '';
                        this.edit = false;
                        this.fetchTbrandList();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteTbrand(id) {
                axios.delete('api/tbrands/' + id)
                    .then((res) => {
                        this.fetchTbrandList()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>
