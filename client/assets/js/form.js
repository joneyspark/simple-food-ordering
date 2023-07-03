const { createApp } = Vue

createApp({
  data() {
    return {
      name: null,
      email: null,
      message: null,
      errors: {
        name: null,
        email: null,
        message: null,
      }
    }
  },
  methods: {
    checkForm(){
        if (this.name && this.email && this.message) {
            return true
        }
        // this.errors = []
        if (!this.name) {
            this.errors.name = "Name Required"
        }
        
        if (!this.email) {
            this.errors.email = "Email Required"
        }
        
        if (!this.message) {
            this.errors.message = "Message Required"
        }

    }
  },
}).mount('#contact-form')