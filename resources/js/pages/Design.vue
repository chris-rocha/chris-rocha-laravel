<template>
<div class="inset">
    <p>Some thumbnails of the work I've done over the years.</p>
    <hr />

<transition-group tag="ul" class="two gd" name="bounce">
  <li v-for="(design, index) in gd" :key="`loop-${index}`">
    <img loading="lazy" width="174" height="140" class="scale-with-grid" :src="design.thumb" :alt="design.type" />
    <div class="caption">
    <h4>{{ design.type }}</h4>
    </div>
  </li>
</transition-group>

</div>
</template>

<script>
export default {
    name: "Design",
    data: function() {
        return { gd: [] }
    },
    mounted() {
        this.fetchDesign();
    },
    methods: {
        async fetchDesign() {
            try {
                const gd = await axios.get('/api/design');
                this.gd = gd.data;
            }
            catch (e) {
                console.log(e);
            }
            finally {
                console.log(this.gd);
            }
        },
    }
};
</script>
