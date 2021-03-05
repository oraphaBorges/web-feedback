<template>
  <section>
    <div class="row d-flex align-items-center p-3">
        <div class="col-sm-12 col-md-8 text-end ">
            <h2>Tem algo para compartilhar? </h2>
            <p>Caso você tenha alguma idéia, crítica ou sugestão para melhorar e educação na UFFS? Compartile conosco (e com toda a comunidade)</p>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#FeedbackModal">Escrever</button>
        </div>
        <div class="col-sm-12 col-md-4">
            <img class="img-feedback" :src="img" alt="imagem ilustrativa de feedback">
        </div>
    </div>
    <hr>
  </section>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component({
  components: {
  },
  data(){
    return {
        img:require('@/assets/img/undraw.co/Collaboration.png'),
    }
  },
})
export default class Feedback extends Vue {}
</script>

<style scoped>
.img-feedback{
    width: 350px;
}
</style>