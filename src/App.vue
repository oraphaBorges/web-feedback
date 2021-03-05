<template>
  <div id="app">
    <nav-menu />
    <router-view/>
  </div>
</template>

<script type="ts">
import { Component, Vue } from 'vue-property-decorator';
import NavMenu from './components/shared/NavMenu';

@Component({
  components: {
    'nav-menu':NavMenu,
  },
})
export default class Home extends Vue {}
</script>

<style lang="scss">

</style>
