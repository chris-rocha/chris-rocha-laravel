<template>
<div class="inset">
    <ul class="two">
      <li v-for="(c, i) in code" :key="i">
      <a target="_blank" :href="c.link" :title="c.title">
        <img loading="lazy" width="300" height="240" :alt="c.title" class="scale-with-grid" :src="c.thumb" />
      <div class="caption">
      <h4>{{ c.title }}</h4>
      <div class="details">{{ c.details}}</div>
      </div>
      </a>
      </li>
    </ul>
</div>
</template>

<script>
import axios from 'axios';

export default {
    name: "Code",
    data: function() {
        return {
            code: []
        }
    },
    mounted() {
        this.fetchCode();
    },
    methods: {
        async fetchCode() {
            try {
                const code = await axios.get('/api/code');
                this.code = code.data;
            }
            catch (e) {
                console.log(e);
            }
            finally {
                console.log(this.code);
            }
        },
    }
};
</script>
