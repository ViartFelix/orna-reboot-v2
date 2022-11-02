<script>

import ElementComponent from "./elementComponent.vue";

export default {
  name: "singleCard",
  props: ['d'],
  methods: {
    assetMaterial(name) {
      return "/img/materials/"+name+".png";
    }
  },
  components: {
    ElementComponent
  },
}

</script>

<template>
  <div class="card">
    <div class="card-container">
      <div class="materials-element">
        <div class="materials" :class="d.element!=='none' ? 'no-elements' : ''">
          <img :src="assetMaterial('test')" alt=""/>
          <img :src="assetMaterial('test')" alt=""/>
          <img :src="assetMaterial('test')" alt=""/>
        </div>

        <div v-if="d.element!=='none'" :element="d.element" class="element">
          <ElementComponent :element="d.element"/>
        </div>
      </div>

      <div class="icon-infos">
        <div class="icon-container">
          <img :src="assetMaterial('test')" alt=""/>
        </div>

        <div class="infos-container">
          (stats): name, emplacements, 
        </div>
      </div>
    </div>
  </div>
</template>
