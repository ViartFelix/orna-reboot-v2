<script>

import ElementComponent from "./elementComponent.vue";
import {Icon} from "@iconify/vue";

export default {
  name: "singleCard",
  props: {
    d: Object,
  },
  methods: {
    assetMaterial(name) {
      return "/img/materials/"+name+".png";
    },
    assetStat(name) {
      return "/img/assets/equipements/"+name+".png";
    },
  },
  components: {
    ElementComponent,
    Icon,
  },
  data() {
    return {
      stats: undefined,
      stats_name_short: ["atk","mag","mana","crit","dex","def","res","ward","hp","fore"],
      stats_name: ["Attack","Magic","Mana","Critical rate","Dexterity","Defence","Resistance","Ward","HP","Foresight"]
    }
  },
  created() {
    this.stats=JSON.parse(this.d.stats)
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
          <v-tooltip text="Tier" location="top">
            <template v-slot:activator="{props}">
              <p v-bind="props" class="tier">{{d.tier}} <Icon icon="ant-design:star-filled"/></p>
            </template>
          </v-tooltip>
          
          <p class="name">{{d.name}}</p>

          <v-tooltip text="Adornements" location="top">
            <template v-slot:activator="{props}">
              <p v-bind="props" class="emplacements">{{d.emplacements}} <Icon icon="charm:gem"/></p>
            </template>
          </v-tooltip>
          
        </div>
      </div>

      <div class="stats-container">
        
        <div v-for="(s,index) in stats" :class="stats_name_short[index]+'-stat'" class="single-stat">
          <img class="stat-img" :src="assetStat(stats_name_short[index])">
          <p class="stat-val">{{s}}</p>
        </div>
      </div>
    </div>
  </div>
</template>
