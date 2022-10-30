<script>
export default {
  name: "singleCard",
  props: {
    name,
  }
}
</script>

<template>
  <div class="card">
    <p>{{name}}</p>
  </div>
</template>
