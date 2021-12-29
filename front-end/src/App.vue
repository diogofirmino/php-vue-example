<template>
  <div id="app" class="bg-gradient-to-r from-red-300 to-blue-300 pb-8 min-h-screen">
    <navigation />
    <div class="pt-8">
      <router-view/>
    </div>
  </div>
</template>

<script>
import Navigation from '@/components/Navigation.vue'

export default {
  name: 'App',
  components: {
    Navigation
  }
}
</script>

<style>
#nav a.router-link-exact-active {
  border-bottom: 2px red solid;
}
</style>
