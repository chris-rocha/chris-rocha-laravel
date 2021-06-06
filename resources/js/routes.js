import Vue from 'vue'
import Router from 'vue-router'
import About from './pages/About.vue'
import Design from './pages/Design.vue'
import Code from './pages/Code.vue'
import NotFound from './pages/NotFound.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'About',
      component: About
    },
    {
      path: '/design',
      name: 'Design',
      component: Design
    },
    {
      path: '/code',
      name: 'Code',
      component: Code
    },
    {
      path: '*',
      name: 'NotFound',
      component: NotFound
    }
  ]
})
