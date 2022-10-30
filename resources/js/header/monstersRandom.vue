<script>

const max=10;
let res_rand=Math.floor(Math.random()*max+1);

export default {
  data() {
    return {
      res_rand,
    }
  },
  methods: {
    get_img() {
      return "/img/assets/header/monsters/"+res_rand+".png";
    }
  },
}
</script>

<template>
  <div>
    <img :src="get_img()">
  </div>
</template>