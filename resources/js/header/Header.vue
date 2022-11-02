<script lang="js">
import mainLogo from "./mainLogo.vue";
import equipementRandom from "./equipementRandom.vue";
import bossRandom from "./bossRandom.vue";
import monstersRandom from "./monstersRandom.vue";
import materialsRandom from "./materialsRandom.vue";
import petsRandom from "./petsRandom.vue";
import consumablesRandom from "./consumablesRandom.vue";
import potionsRandom from "./potionsRandom.vue";

let state_link=window.location.pathname;

let icon_change=0;
if(window.location.pathname==="/") {icon_change=1}

export default {
  components: {
    mainLogo,
    equipementRandom,
    bossRandom,
    monstersRandom,
    materialsRandom,
    petsRandom,
    consumablesRandom,
    potionsRandom,
  },
  data() {
    return {
      state_link,
      icon_change,
    }
  },
  methods: {
    asset(path) {
      var base_path = window._asset || '';
      return base_path + path;
    }
  }
}
</script>

<template>
  <header class="header">
    <div class="header_wrapper">
      <nav class="header_nav">
        <a :class="state_link==='/' ? 'current-page':'inactive-page'" class="link-to" href="/"><p class="link-name"><mainLogo :state="icon_change"/><br/>Home</p></a>
        <a :class="state_link==='/equipements' ? 'current-page':'inactive-page'" class="link-to" href="/equipements"><p class="link-name"><equipementRandom/>Equipements</p></a>
        <a :class="state_link==='/bosses' ? 'current-page':'inactive-page'" class="link-to" href="/bosses"><p class="link-name"><bossRandom/>Bosses/Raids</p></a>
        <a :class="state_link==='/monsters' ? 'current-page':'inactive-page'" class="link-to" href="/monsters"><p class="link-name"><monstersRandom/>Monsters</p></a>
        <a :class="state_link==='/materials' ? 'current-page':'inactive-page'" class="link-to" href="/materials"><p class="link-name"><materialsRandom/>Materials</p></a>
        <a :class="state_link==='/pets' ? 'current-page':'inactive-page'" class="link-to" href="/materials"><p class="link-name"><petsRandom/>Pets</p></a>
        <a :class="state_link==='/consumables' ? 'current-page':'inactive-page'" class="link-to" href="/consumables"><p class="link-name"><consumablesRandom/>Consumables</p></a>
        <a :class="state_link==='/potions' ? 'current-page':'inactive-page'" class="link-to" href="/consumables"><p class="link-name"><potionsRandom/>Potions</p></a>
      </nav>
    </div>
  </header>
</template>