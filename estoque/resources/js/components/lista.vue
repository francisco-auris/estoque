<script>
import axios from 'axios';
import pagination from './pagination.vue';

export default {

    components: { pagination },

    data() {
        return {
            refrigerantes: [],
            paginas: [],
            filter: {},
            alerta: '',
            filtrado: ''
        }
    },
    created: function() {
        this.getLista();
    },

    methods: {

        navigate( page ){
            this.getLista( page );
            //console.log(page);
        },

        getFilter: function(){

            this.alerta = '';

            //verifica o preenchimento dos filtros
            if( this.filter.campo || this.filter.valor ){
                axios.post('/filtro', this.filter).then(response => {
                    console.log(response);
                    this.filtrado = this.filter.campo+' / '+this.filter.valor;
                    this.refrigerantes = response.data.data;
                    this.paginas = response.data;
                }).
                catch(function(error){
                    console.log(error);
                });
            }
            else {
                this.alerta = 'Favor verificar campos de filtro';
            }

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

        },

        closeFiltro: function(){
            this.getLista();
            this.filtrado = '';
        }
    }

}
</script>

<template>
<div>
    <div class="d-block">
        <div class="row">
            <div class="col-md-5 col-12">
                <p v-if="alerta != ''">{{alerta}}</p>
                <button class="btn btn-sm btn-primary" v-if="filtrado != ''">
                    {{filtrado}}
                    <button type="button" class="close ml-2" aria-label="Close" @click="closeFiltro()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </button>
            </div>
            <div class="col-md-7 col-12">
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
       

    </div>
    <br><br>
    <div class="d-block bg-white rounded border p-3">
        <table class="table">
            <thead>
                <td>Marca</td>
                <td>Tipo</td>
                <td>Sabor</td>
                <td>Litragem</td>
                <td>Valor (R$)</td>
                <td>Em Qestoque</td>
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
                <td>{{item.quantidade}}</td>
                <td><a :href="'/edita/' + item.id"><i class="material-icons icon-sm float-left">edit</i> Editar</a></td>
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
