<script>
import { range } from 'lodash'

export default {

    props: ['source'],

    data() {
        return {
            pages: []
        }
    },

    methods: {
        
        navigate( ev, page ){
            ev.preventDefault();
            this.$emit('navigate', page);
        }

    },

    watch: {
        
        source(){

            this.pages = range(1, this.source.last_page+1)
            window.console.log(this.pages);

        }

    },

}
</script>
<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <!--<li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">-->
                <li v-for="page in pages" class="page-item" :class="{ active: source.current_page == page }">
                    <a class="page-link" href="#" @click="navigate($event, page)">{{ page }}</a>
                </li>
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</template>