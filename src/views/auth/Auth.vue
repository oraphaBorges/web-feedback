<template>
    <div></div>
</template>

<script>
export default {
    mounted(){
        localStorage.token=this.$route.query.token;
        this.$router.push({ path: '/' })
    }
}
</script>

<style>

</style>