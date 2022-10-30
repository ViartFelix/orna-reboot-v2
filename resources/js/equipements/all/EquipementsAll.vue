<script>
import axios from "axios";
import swal from "sweetalert2";

import HeaderComponent from "../../header/Header.vue";
import singleCard from "./card.vue";

let data;
await axios.get("http://localhost:8000/api/equipements").then((r) => {
  data=r.data;
  console.log(data);
}).catch((e) => {
  swal.fire({
    icon: "error",
    title: "ERROR",
    text: "Data is unreachable, please try again later !"
  })
  console.error(e);
});

export default {
  data() {
    return {
      data,
    }
  },
  components: {
    HeaderComponent,
    singleCard,
  }
}
</script>

<template>
  <HeaderComponent/>
  <main>
    <div class="container">
      <div class="card-deck">
        <singleCard v-for="(d,index) in data" :key="index"
          :name="d.name"
        />
      </div>
    </div>
  </main>
</template>