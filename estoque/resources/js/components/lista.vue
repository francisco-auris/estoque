<script>
import axios from 'axios';
import pagination from './pagination.vue';

export default {

    components: { pagination },

    data() {
        return {
            refrigerantes: [],
            paginas: []
        }
    },
    created: function() {
        this.getLista();
    },
    methods: {

        navigate( page ){
            this.getLista( page );
            console.log(page);
        },

        getLista: function( page=null ){
            //alert('Teste');
            var pagina = (page == null) ? '' : page;
            var url = 'lista?page='+pagina;

            axios.get(url).then(response => {
                this.refrigerantes = response.data.data;
                console.log(response.data);
                this.paginas = response.data;
            })
            .catch(function( error ){ console.log(error); });

        }
    }

}
</script>

<template>
<div>
    <div class="d-block bg-white rounded border p-3">
        <table class="table">
            <thead>
                <td>Marca</td>
                <td>Tipo</td>
                <td>Sabor</td>
                <td>Litragem</td>
                <td>Valor (R$)</td>
                <td colspan="2"></td>
            </thead>
            <tbody>
            <tr v-for="item in refrigerantes">
                <td>{{item.marca}}</td>
                <td>{{item.tipo}}</td>
                <td>{{item.sabor}}</td>
                <td v-if="item.litragem < 1000">{{item.litragem}} ml</td>
                <td v-else>{{item.litragem / 1000}} L</td>
                <td>{{item.valor}}</td>
                <td><a href="#"><i class="material-icons icon-sm float-left">edit</i> Editar</a></td>
                <td><a href="#"><i class="material-icons icon-sm float-left">delete</i> Excluir</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="d-block mt-2 mb-1">

    <pagination :source="paginas" @navigate="navigate"></pagination>

    </div>

</div>
</template>
