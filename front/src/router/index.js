import { createRouter, createWebHistory } from 'vue-router'

import Catalog from "../pages/Catalog"
import ProductCard from '@/components/ProductCard.vue'
import ProductCardDetailed from "../pages/ProductCardDetailed"
import OrdersPage from "../pages/admin/OrdersPage"
import CartPage from "../pages/ProductActions/CartPage"
import RegisterPage from "../pages/Auth/RegisterPage"
import LoginPage from "../pages/Auth/LoginPage"
import Forgot from "../pages/Auth/Forgot"
import ResetPassword from "../pages/Auth/ResetPassword"
import LK from "../pages/LK"
import PageNotFound from "../pages/PageNotFound"
import ChangePassword from '@/pages/Auth/ChangePassword.vue'

import LKRoutes from './lk'
// import HomeView from '../views/HomeView.vue'

const BaseRoutes = [

  
  {
    path: '/catalog',
    component: Catalog
  },
  {
    path: '/product/:slug',
    component: ProductCardDetailed
  },
  {
    path: '/cart',
    component: CartPage
  },
  {
    path: '/register',
    component: RegisterPage
  },
  {
    path: '/login',
    component: LoginPage
  },
  {
    path: '/forgot-password',
    component: Forgot
  },
  {
    path: '/reset-password',
    component: ResetPassword
  },
  {
    path: '/reset-password-authenticated',
    component: ChangePassword
  },

  

  {
    path: '/admin/orders',
    component: OrdersPage
  }

]


const routes = BaseRoutes.concat(LKRoutes);

routes.push({
    path: '/:notFound',
    component: PageNotFound
})

const router = createRouter({
  history: createWebHistory(),
  routes
})



export default router
