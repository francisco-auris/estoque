<template>
<div>
     <div class="d-block float-right">
        <div class="input-group input-group-sm">
            <input type="text" aria-label="First name" class="form-control" v-model="filter.valor">
            <select class="form-control" v-model="filter.campo">
                <option>Marca</option>
                <option>Litragem</option>
                <option>Quantidade</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-addon2" @click="getFilter()">
                    <i class="material-icons float-left icon-sm mr-2">filter_list</i> Filtrar
                </button>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios'

export default {
    
    data() {
        return {
            filter: {}
        }
    },

    methods: {
        
        getFilter: function(){
            axios.post('/filtro', this.filter).then(response => {
                console.log(response);
            }).
            catch(function(error){
                console.log(error);
            });
        }

    },

}
</script>