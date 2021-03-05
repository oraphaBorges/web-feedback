<template>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container d-flex justify-content-around">
    
    <div class="navbar-brand ">
      <a href="index" class="logo">
        <img src="" alt="logo practice">
        <span>Mural</span>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link class="nav-link" to="/">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/ideias">ideias</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/servicos/acompanhar">Acompanhar serviços</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/servicos/solicitar">Solicitar serviço</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/admin">Admin</router-link>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="px-2">username</span>
            <i class="bi bi-chevron-down"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
                <ul>
                    <a class="dropdown-item" href="logout">Sair<i class="bi bi-box-arrow-right"></i></a>
                </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000?service=mural">Entrar <i class="bi bi-box-arrow-in-right"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</template>

<script>
export default {

}
</script>

<style>

</style>