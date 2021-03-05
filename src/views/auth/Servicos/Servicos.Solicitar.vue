<template>
    <section>
        <div class="row d-flex align-items-center p-3">
            <div class="col-sm-12 col-md-7 text-end">
                <h2>Serviços</h2>
                <p>Temos um conjunto muito variado de serviços que podem ser utilizados pela comunidade acadêmica. Precisa de algo? Nós podemos ajudar!</p>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ServiceModal">Solicitar Serviço</button>
            </div>
            <div class="col-sm-12 col-md-5">
                <img class="img-service" :src="img" alt="Imagem ilustratia de uma garota adicionando um serço">
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
      img:require('@/assets/img/undraw.co/User_flow.png'),
    }
  },
})
export default class Solicitar extends Vue {}
</script>
<style scoped>
.img-service{
    width: 400px;
}
</style>