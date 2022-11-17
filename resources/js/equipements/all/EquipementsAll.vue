<script>
import axios from "axios";

import HeaderComponent from "../../header/Header.vue";
import singleCard from "./card.vue";

export default {
  data() {
    return {
      dt: undefined,
    }
  },
  components: {
    HeaderComponent,
    singleCard,
  },
  created() {
    let url_request;
    url_request="http://localhost:8000/api/equipements"
    axios.get(url_request).then((r) => {
      this.dt=r.data;
      console.log(r.data);
    }).catch((e) => {
      
    });

  },
}
</script>

<template>
  <HeaderComponent/>
  <main>
    <div class="container">
      <div class="card-deck">
        <singleCard v-for="(d,index) in this.dt" :key="index" :d="d"/>
      </div>

      
    </div>
  </main>
</template>