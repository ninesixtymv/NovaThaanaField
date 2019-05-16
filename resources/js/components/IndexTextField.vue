<template>
  <span class="dhivehi">{{ field.value }}</span>
</template>

<script>
export default {
  props: ["resourceName", "field"]
};
</script>

<style scoped>
.dhivehi {
  text-align: right;
  direction: rtl;
}
</style>
