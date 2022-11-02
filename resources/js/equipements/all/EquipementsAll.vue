<script>
import axios from "axios";
import swal from "sweetalert2";

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
    axios.get("http://localhost:8000/api/equipements").then((r) => {
      this.dt=r.data;
      //console.log(r);
    }).catch((e) => {
      swal.fire({
        icon: "error",
        title: "ERROR",
        text: "Data is unreachable, please try again later !"
      });
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