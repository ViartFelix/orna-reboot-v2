<script>
import axios from "axios";
import HeaderComponent from "../header/Header.vue";

/*
let data;

await axios.get("http://localhost:8000/api/equipements").then((r) => {
  data=r.data;
  //console.log(data);
}).catch((e) => {
  console.error(e);
});
*/

export default {
  data() {
    return {
      //data,
    }
  },
  components: {
    HeaderComponent,
  }
}
</script>

<template>
  <HeaderComponent/>
  <div class="container">
    <ul>
      <!--<li v-for="yo in data">{{yo.name}}</li>-->
    </ul>
  </div>
</template>