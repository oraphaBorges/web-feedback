<template>
    <section>
    <div class="row d-flex align-items-center">
        <div class="col-sm-12 col-md-8 text-end">
            <h2>Tem algo para compartilhar? </h2>
            <p>Caso você tenha alguma ideia, crítica ou sugestão para melhorar o nosso trabalho, compartilhe conosco (e com toda a comunidade).</p>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#FeedbackModal">Escrever</button>
        </div>
        <div class="col-sm-12 col-md-4">
            <img class="img-feedback" :src="img" alt="">
        </div>
    </div>
    <hr>
    <FeedbackList />
    <FeedbackModal :user="user" :token="token" />
    </section>
</template>

<script>
import Auth from './../service/Auth';
import FeedbackList from '../components/feedbacks/FeedbackList';
import FeedbackModal from '../components/feedbacks/FeedbackModal';

export default {
    name:"feedbacks",
    components:{
        FeedbackList,
        FeedbackModal,
    },
    props:['user','token'],
    data(){
        return {
            img:'/img/undraw.co/Collaboration.png',
        }
    },
    mounted(){
      Auth.check(this.token);
    },
}
</script>

<style scoped>
.img-feedback{
    width: 350px;
}
</style>