<template>
  <router-view :searchResults="searchResults"></router-view>
</template>

<script>
export default {
    name: 'Main',
    props: {
      'searchResults': Array
    }

}
</script>

<style>

</style>