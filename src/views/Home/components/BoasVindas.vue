<template>
     <section id="about" class="about">

      <div class="container">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos-delay="200">
            <div class="content">
              <h3>Boas-vindas!</h3>
              <h2>Central de solicitação de serviços do PRACTICE e um local de discussão de ideias</h2>
              <p>
                Essa é a plataforma oficial do programa onde a comunidade acadêmica pode solicitar e acompanhar serviços. Além disso, você pode dar sugestões de melhorias e ideias, fazendo parte do crescimento do programa e inovação da <a href="https://www.uffs.edu.br/"><strong>UFFS</strong></a>.
              </p>
              <div class="text-center text-lg-start">
                <a href="https://practice.uffs.cc" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Conheça o PRACTICE</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img :src="img" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component({
  components: {
  },
  data(){
    return {
      img:require('@/assets/img/estudio-practice.jpg'),
    }
  },
})
export default class NavMenu extends Vue {}
</script>

<style>

</style>