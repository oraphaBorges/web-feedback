<template>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Central de Serviços e Ideias</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Uma ponte entre você e a construção de uma universidade melhor</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <router-link to="/servicos/solicitar" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Solicitar serviço</span>
                  <i class="bi bi-arrow-right-circle"></i>
              </router-link>
              <router-link to="/ideias" class="btn-get-outline scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Ideias</span>
                  <i class="bi bi-lightbulb"></i>
              </router-link>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img :src="img" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component({
  components: {
  },
  data(){
    return {
      img:require('@/assets/img/hero-img.png'),
    }
  },
})
export default class NavMenu extends Vue {}
</script>

<style>

</style>