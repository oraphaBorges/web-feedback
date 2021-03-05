<template>
  <div>
    <BannerHome />
    <BoasVindas />
    <Valores />
    <Contador />
    <ServicosHome />
    <Testemunho />
    <Newsletter />
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import BannerHome from './components/BannerHome.vue'
import BoasVindas from './components/BoasVindas.vue'
import Valores from './components/Valores.vue'
import Contador from './components/Contador.vue'
import ServicosHome from './components/ServicosHome.vue'
import Testemunho from './components/Testemunho.vue'
import Newsletter from './components/Newsletter.vue'

@Component({
  components: {
    BannerHome,
    BoasVindas,
    Valores,
    Contador,
    ServicosHome,
    Testemunho,
    Newsletter,
  },
})
export default class Home extends Vue {}
</script>
