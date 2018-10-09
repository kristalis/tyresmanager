<template>
    <div class='row'>
        <h1>Tyres width</h1>
       
        <form action="#" @submit.prevent="createTwidth()">
            <div class="input-group">
                <input v-model="twidth.width" type="text" name="width" class="form-control" autofocus>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">New Tyre Width</button>
                </span>
            </div>
        </form>
        <h4>width in stock</h4>
        <ul class="list-group">
            <li v-if='list.length === 0'>There are no tyre widths yet!</li>
            <li class="list-group-item" v-for="(twidth, index) in list">
                 {{ twidth.width}}
                 <button @click="deleteTwidth(twidth.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                list: [],
                twidth: {
                    id: '',
                    width: ''
                }
            };
        },
        
        created() {
            this.fetchTwidthList();
        },
        
        methods: {
            fetchTwidthList() {
                axios.get('api/twidths').then((res) => {
                    this.list = res.data;
                });
            },
 
            createTwidth() {
                axios.post('api/twidths', this.twidth)
                    .then((res) => {
                        this.twidth.width = '';
                        this.edit = false;
                        this.fetchTwidthList();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteTwidth(id) {
                axios.delete('api/twidths/' + id)
                    .then((res) => {
                        this.fetchTwidthList()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>
