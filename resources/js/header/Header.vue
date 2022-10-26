<script>
import mainLogo from "./mainLogo.vue";

let state_link;

if(window.location.pathname==="/") {state_link=1;} else {state_link=0;}

export default {
  components: {
    mainLogo,
  },
  data() {
    return {
      state_link,
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
        <a class="link-to" href="/"><p class="link-name"><mainLogo v-bind:class="state_link ? 'current-page':'inactive-page'"/><br/>Home</p></a>
      </nav>
    </div>
  </header>
</template>