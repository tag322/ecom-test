import { createStore } from 'vuex'

export default createStore({
  session_id: '',
  

  
  state: {
    message: '',

    cart_items_count: 0,
    cart: [],

    user: {}
  },
  getters: {
    getMessage(state) {
      const msg = state.message
      state.message = ''
      return msg
    }
  },
  mutations: {
    setMessage(state,message) {
      state.message = message
    }
    

  },
  actions: {

  },
  modules: {

  }
})
