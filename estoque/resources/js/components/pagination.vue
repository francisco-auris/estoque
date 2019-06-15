<script>
import { range } from 'lodash'

export default {

    props: ['source'],

    data() {
        return {
            pages: [],
            total: 1,
            current: 1
        }
    },

    methods: {
        
        navigate( ev, page ){
            ev.preventDefault();
            this.current = page;
            this.$emit('navigate', page);
        }

    },

    watch: {
        
        source(){

            this.pages = range(1, this.source.last_page+1)
            this.total = this.source.last_page;
            window.console.log(this.pages);

        }

    },

}
</script>
<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item" :class="{ disabled: source.current_page == 1 }">
                <a class="page-link" href="#" @click="navigate($event, current-1)" tabindex="-1" >Anterior</a>
            </li>

                <li v-for="page in pages" class="page-item" :class="{ active: source.current_page == page }">
                    <a class="page-link" href="#" @click="navigate($event, page)">{{ page }}</a>
                </li>

            <li class="page-item" :class="{ disabled: source.current_page == total }">
                <a class="page-link" href="#" @click="navigate($event, current+1)">Próximo</a>
            </li>
        </ul>
    </nav>
</template>