import LK from "../pages/LK"
import LKPersonal from "../pages/LK/LKPersonal"
import LKOrders from "../pages/LK/LKOrders"



export default [
    {
        path: '/lk',
        component: LK
    },
    {
        path: '/lk-personal',
        component: LKPersonal  
    },
    {
        path: '/lk/orders',
        component: LKOrders  
    }
]