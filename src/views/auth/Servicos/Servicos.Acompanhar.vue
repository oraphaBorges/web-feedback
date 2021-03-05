<template>
    <section>
        <div class="row d-flex align-items-center p-3">
            <div class="col-sm-12 col-md-7 text-end">
                <h2>Serviços</h2>
                <p>Acompanhe aqui seus serviços solicitados</p>
            </div>
            <div class="col-sm-12 col-md-5">
                <img class="img-service" :src="img" alt="Imagem ilustrativa de acompanhamento de serviços">
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
        img:require('@/assets/img/undraw.co/acompanhar.png'),
    }
  },
})
export default class Acompanhar extends Vue {}
</script>

<style scoped>
.img-service{
    width: 400px;
}
</style>