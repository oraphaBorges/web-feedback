<template>
      <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container">
  
          <header class="section-header">
            <h2>Nossos valores</h2>
            <p>Pilares que nos norteiam</p>
          </header>
  
          <div class="row">
  
            <div class="col-lg-4">
              <div class="box" data-aos-delay="200">
                <img :src="img[0]" class="img-fluid" alt="">
                <h3>Tecnologia</h3>
                <p>Buscamos criar soluções tecnológicas para aprimorar o ambiente acadêmico de ensino e aprendizagem.</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos-delay="400">
                <img :src="img[1]" class="img-fluid" alt="">
                <h3>Comunidade</h3>
                <p>Não estamos sós, focamos na habilidade pedagógica e tecnológica tanto de servidores quanto estudantes.</p>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos-delay="600">
                <img :src="img[2]" class="img-fluid" alt="">
                <h3>Independência</h3>
                <p>Nossa missão é empoderar tecnologicamente pessoas para que a tecnologia seja ajuda, não barreira.</p>
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- End Values Section -->
  
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component({
  components: {
  },
  data(){
    return {
      img:[
        require('@/assets/img/values-1.png'),
        require('@/assets/img/values-2.png'),
        require('@/assets/img/values-3.png'),
      ]
    }
  },
})
export default class Valores extends Vue {}
</script>

<style>

</style>