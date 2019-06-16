<script>
import axios from 'axios'

export default {

    props: ['source','csrf'],

    data() {
        return {
            field: {},
            info: '', success: ''
        }
    },

    created() {
        
        //console.log(this.source);
        this.pushDados();

    },

    watch: {
        source(){

            window.console.log(this.source);

        }
    },

    methods: {
        
        pushDados: function(){

            axios.post('/produto/'+this.source).then(response => {
                this.insertValues( response.data );
            })
            .catch(function( error ){ console.log(error); });

        },
        insertValues: function( valores ){
            this.field = valores;
        },
        submit(){

            this.errors = {}; //reseta mensagens 
            this.info = '';
            this.success = '';
            //console.log(this.field.id);
            axios.post('/atualiza', this.field).then(response => {

                console.log(response);
                if( response.data == true ){
                    this.success = 'Produto atualizado com sucess.';

                }
                else {
                    this.info = response.data;
                }

            }).catch(error => {
                console.log(error);
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            });

        }

    },

}
</script>
<template >
 <div>
    <form @submit.prevent="submit">
        <div class="row">
            <input name="_token" v-bind:value="csrf" hidden>
            <div class="col-md-12 col-12">
                <label>Marca</label>
                <input type="text" name="marca" v-model="field.marca" class="form-control" maxlength="50" required>
            </div>
            <div class="col-md-4 col-6">
                <label>Sabor</label>
                <input type="text" name="sabor" v-model="field.sabor" class="form-control" maxlength="30">
            </div>
            <div class="col-md-4 col-6">
                <label>Tipo</label>
                <select class="form-control" v-model="field.tipo">
                    <option value="Lata">Lata</option>
                    <option value="Pet">Pet</option>
                    <option value="Garrafa">Garrafa</option>
                </select>
            </div>
            <div class="col-md-4 col-6">
                <label>Litragem (mL)</label>
                <input type="number" name="litragem" v-model="field.litragem" class="form-control" min="0" step="10">
            </div>
            <div class="col-md-4 col-6">
                <label>Quantidade</label>
                <input type="number" name="quantidade" v-model="field.quantidade" class="form-control" min="0" step="1">
            </div>
            <div class="col-md-4 col-6">
                <label>Valor (R$)</label>
                <input type="number" name="valor" v-model="field.valor" class="form-control" min="0" step="0.05" value="0">
            </div>
            <div class="col-12">
                <button class="btn btn-primary mt-3" type="submit">Salvar</button>
            </div>
            <div class="col-12">

                <div class="alert alert-success" v-if="success != ''">
                    <span >{{ success }} <br></span>
                </div>
                <div class="alert alert-info" v-if="info != ''">
                    <span >{{ info }} <br></span>
                </div>
            </div>
        </div>
    </form>
</div>
</template>