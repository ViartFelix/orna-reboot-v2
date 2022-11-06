<script lang="js">
export default {
  props: {
    element: String
  },
  data() {
    return {
      elementColor: "#fff",
    }
  },
  created() {
    switch (this.element) {
      case "water":
        this.elementColor="#428eff";
        break;

      case "fire":
        this.elementColor="#eb3225"
        break;

      case "earth":
        this.elementColor="#108605";
        break;

      case "lighting":
        this.elementColor="#e9d416";
        break;
      
      case "holy":
        this.elementColor="#fff8f1";
        break;
      
      case "dark":
        this.elementColor="#1d0424;";
        break;
      
      case "dragon":
        this.elementColor="#eb7506";
        break;

      case "arcane":
        this.elementColor="#510f8f";
        break;
    
      default: this.elementColor="#fff";
        break;
    }

    
  },
}

</script>

<template>
  <div :style="{backgroundColor: elementColor}" class="single-element">
    <p class="element-name" :style="[this.element==='dark' || this.element==='arcane' ? {'color':'#00'}:'']">{{element}}</p>
  </div>
</template>