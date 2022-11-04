<script>

import ElementComponent from "./elementComponent.vue";
import {Icon} from "@iconify/vue";


export default {
  name: "singleCard",
  props: ['d'],
  methods: {
    assetMaterial(name) {
      return "/img/materials/"+name+".png";
    }
  },
  components: {
    ElementComponent,
    Icon,
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
          <img class="icon" :src="assetMaterial('test')" alt=""/>
        </div>


        <div class="infos-container">
          <v-tooltip bottom>
            <template >
              Tier
            </template>
            <p class="tier">{{d.tier}} <Icon icon="ant-design:star-filled"/></p>
            
          </v-tooltip>
          
          <p class="name">{{d.name}}</p>
          <p class="emplacements">{{d.emplacements}} <Icon icon="charm:gem"/></p>
        </div>
      </div>
    </div>
  </div>
</template>
