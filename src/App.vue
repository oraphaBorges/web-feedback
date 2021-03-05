<template>
  <div id="app">
    <NavMenu />
    <router-view/>
    <Footer />
  </div>
</template>

<script type="ts">
import { Component, Vue } from 'vue-property-decorator';
import NavMenu from './components/shared/NavMenu';
import Footer from './components/shared/Footer';

@Component({
  components: {
    NavMenu,
    Footer,
  },
})
export default class Home extends Vue {}
</script>

<style lang="scss">

</style>
