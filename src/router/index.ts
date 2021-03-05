import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'

import Home from '../views/Home/Home.vue'
import Error404 from '../views/NotFund.vue'

import Auth from '../views/auth/Auth.vue'
import Admin from '../views/auth/Admin/Admin.vue'
import Feedback from '../views/auth/Feedback/Feedback.vue'
import Acompanhar from '../views/auth/Servicos/Servicos.Acompanhar.vue'
import Solicitar from '../views/auth/Servicos/Servicos.Solicitar.vue'

Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/ideias',
    name: 'Ideias',
    component: Feedback
  },
  {
    path: '/servicos/acompanhar',
    name: 'Acompanhar',
    component: Acompanhar
  },
  {
    path: '/servicos/solicitar',
    name: 'Solicitar',
    component: Solicitar
  },
  {
    path: '/admin',
    name: 'Admin',
    component: Admin
  },
  {
    path: '/auth',
    name: 'Auth',
    component: Auth
  },
  {
    path: '*',
    name: 'Error404',
    component: Error404
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
