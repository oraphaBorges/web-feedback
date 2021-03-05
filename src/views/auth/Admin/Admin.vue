<template>
<section>
    <div class="row d-flex align-items-center p-3">
        <div class="col-sm-12 col-md-7 text-end">
            <h1>Gerenciamento de Serviços Solicitados</h1>
            <p>Acompanhe aqui os serviços solicitados pelo clientes do PRACTICE</p>
        </div>
        <div class="col-sm-12 col-md-5">
            <img class="img-service" :src="img" alt="">
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
      img: require('@/assets/img/undraw.co/admin.png'),
    }
  }
})
export default class Admin extends Vue {}
</script>
<style scoped>
.img-service{
    width: 400px;
}
</style>