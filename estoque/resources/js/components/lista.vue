<template>
<table class="table">
        <thead>
            <td>Marca</td>
            <td>Tipo</td>
            <td>Sabor</td>
            <td>Litragem (mL/L)</td>
            <td>Valor (R$)</td>
        </thead>
        <tbody>
           <tr v-for="item in refrigerantes">
                <td>{{item.marca}}</td>
                <td>{{item.tipo}}</td>
                <td>{{item.sabor}}</td>
                <td>{{item.litragem}}</td>
                <td>{{item.valor}}</td>
           </tr>
        </tbody>
    </table>
</template>
<script>
import axios from 'axios'

export default {

    data() {
        return {
            refrigerantes: [],
        }
    },
    created: function() {
        this.getLista();
    },
    methods: {
        getLista: function(){
            //alert('Teste');
            var url = 'lista';

            axios.get(url).then(response => {
                this.refrigerantes = response.data
            }).catch(function( error ){ console.log(error); });

        }
    }

}
</script>