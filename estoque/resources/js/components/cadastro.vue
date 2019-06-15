<template>
    <div>
        <form @submit="checkForm">
            <div class="row">
                <div class="col-md-12 col-12">
                    <label>Marca</label>
                    <input type="text" name="marca" v-model="marca" class="form-control" maxlength="50">
                </div>
                <div class="col-md-4 col-6">
                    <label>Sabor</label>
                    <input type="text" class="form-control" maxlength="30">
                </div>
                <div class="col-md-4 col-6">
                    <label>Tipo</label>
                    <select class="form-control">
                        <option>Lata</option>
                        <option>Pet</option>
                        <option>Garrafa</option>
                    </select>
                </div>
                <div class="col-md-4 col-6">
                    <label>Litragem (mL)</label>
                    <input type="number" class="form-control" min="0" step="10">
                </div>
                <div class="col-md-4 col-6">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" min="0" step="1">
                </div>
                <div class="col-md-4 col-6">
                    <label>Valor (R$)</label>
                    <input type="number" class="form-control" min="0" step="0.05" value="0">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary mt-3" type="submit">Salvar</button>
                </div>
                <div class="col-12">
                    <p >
                        <div class="alert alert-danger" v-if="errors.length">
                            <span v-for="error in errors">{{ error }} <br></span>
                        </div>
                    </p>
                </div>
            </div>
        </form>
    </div>
</template>
<script>

import axios from 'axios'

export default {
    
    data() {
        return {
            errors: [],
            marca: null
        }
    },
    methods: {
        checkForm: function(e){

            this.errors = [];

            if( !this.marca ){
                this.errors.push("Campo marca e obrigatório");
            }

            if (!this.errors.length) {
                return true;
            }

            e.preventDefault();

        }
    },

}
</script>