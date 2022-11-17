<script>

import ElementComponent from "./elementComponent.vue";
import {Icon} from "@iconify/vue";
import axios from "axios";

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
    assetMonster(tier,name) {
      return "/img/monsters/"+tier+"/"+name+".png";
    },
    assetEffect(type,name) {
      return "/img/status-effects/"+type+"/"+name+".png";
    },
    assetClass(name) {
      return "/img/assets/equipements/"+name+".png";
    }
  },
  components: {
    ElementComponent,
    Icon,
  },
  data() {
    return {
      stats: undefined,
      stats_name_short: ["atk","mag","mana","crit","dex","def","res","ward","hp","fore"],
      stats_name: ["Attack","Magic","Mana","Critical rate","Dexterity","Defence","Resistance","Ward","HP","Foresight"],
      equipable: undefined,
    }
  },
  created() {
    this.stats=JSON.parse(this.d.stats)
    this.equipable=JSON.parse(this.d.equipable_by)
    console.log(this.equipable);
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
          <v-tooltip :text="stats_name[index]" location="bottom">
            <template v-slot:activator="{props}">
              <img v-bind="props" class="stat-img" :src="assetStat(stats_name_short[index])"/>
            </template>
          </v-tooltip>
          
          <p class="stat-val">{{s}}</p>
        </div>
      </div>

      <div class="equipable">
        <p class="equipable-title">Equipable by</p>
        <div class="equipable-container">
          <img :src="assetClass('warior')" :class="equipable[0]==1 ? 'equipable' : 'unequipable'" class="single-equipable-class"/>
          <img :src="assetClass('mage')" :class="equipable[1]==1 ? 'equipable' : 'unequipable'" class="single-equipable-class"/>
          <img :src="assetClass('thief')" :class="equipable[2]==1 ? 'equipable' : 'unequipable'" class="single-equipable-class"/>
        </div>
      </div>

      <div class="other-stats">
        <div class="monsters-drop">
          <p class="other-title">Dropped by</p>

          <div class="other-stats-container">
            <div class="single-monster">
              <img :src="assetMonster(9,'ancient_jinn')" class="monster-image other-image"/>
            </div>
            <div class="single-monster">
              <img :src="assetMonster(9,'ancient_jinn')" class="monster-image other-image"/>
            </div>
            <div class="single-monster">
              <img :src="assetMonster(9,'ancient_jinn')" class="monster-image other-image"/>
            </div>
            <div class="single-monster">
              <img :src="assetMonster(9,'ancient_jinn')" class="monster-image other-image"/>
            </div>
            <div class="single-monster">
              <img :src="assetMonster(9,'ancient_jinn')" class="monster-image other-image"/>
            </div>
            <div class="single-monster">
              <img :src="assetMonster(9,'ancient_jinn')" class="monster-image other-image"/>
            </div>
          </div>
        </div>

        <div class="immunities">
          <p class="other-title">Immunities</p>

          <div class="other-stats-container quad-rows">
            <div class="single-immunity">
              <img :src="assetEffect('elements','star-struck')" class="status-image other-image"/>
            </div>
            <div class="single-immunity">
              <img :src="assetEffect('elements','star-struck')" class="status-image other-image"/>
            </div>
            <div class="single-immunity">
              <img :src="assetEffect('elements','star-struck')" class="status-image other-image"/>
            </div>
            <div class="single-immunity">
              <img :src="assetEffect('elements','star-struck')" class="status-image other-image"/>
            </div>
            <div class="single-immunity">
              <img :src="assetEffect('elements','star-struck')" class="status-image other-image"/>
            </div>
          </div>
        </div>

        <div class="causes">
          <p class="other-title">Causes</p>

          <div class="other-stats-container quad-rows">
            <div class="single-effect">
              <img :src="assetEffect('elements','bleed')" class="status-effect other-image"/>
            </div>
            <div class="single-effect">
              <img :src="assetEffect('elements','bleed')" class="status-effect other-image"/>
            </div>
            <div class="single-effect">
              <img :src="assetEffect('elements','bleed')" class="status-effect other-image"/>
            </div>
            <div class="single-effect">
              <img :src="assetEffect('elements','bleed')" class="status-effect other-image"/>
            </div>
            <div class="single-effect">
              <img :src="assetEffect('elements','bleed')" class="status-effect other-image"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
