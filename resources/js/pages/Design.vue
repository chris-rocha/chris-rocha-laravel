<template>
<div class="inset">
    <p>Some thumbnails of the work I've done over the years.</p>
    <hr />

<transition-group tag="ul" class="two gd" name="bounce">
  <!-- <li v-for="(design, index) in gd" :key="`key-${index}`">
    <img loading="lazy" width="174" height="140" class="scale-with-grid" :src="design.file" :alt="design.type" />
    <div class="caption">
    <h4>{{ design.type }}</h4>
    </div>
  </li> -->
</transition-group>

</div>
</template>

<script>
export default {
    name: "Design",
    // data: function() {
    //     // return { gd: Settings.design }
    // }
};
</script>
