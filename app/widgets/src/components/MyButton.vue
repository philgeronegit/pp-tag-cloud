<template>
  <button :class="['btn', variant]">{{ label }}</button>
</template>
<script setup>
const props = defineProps({
  label: String,
  variant: { type: String, default: "primary" }
});
</script>
<style scoped>
.btn {
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  font-weight: bold;
  cursor: pointer;
}
.primary {
  background: royalblue;
  color: white;
}
.secondary {
  background: lightgray;
  color: black;
}
</style>
