const { createApp } = Vue

// Contact form Validation
createApp({
    data() {
        return {
            name: null,
            email: null,
            message: null,
            password: null,
            errors: {
                name: null,
                email: null,
                message: null,
                password: null,
            }
        }
    },
    methods: {
        checkForm() {
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
        },
        loginForm() {
            if (this.email && this.password) {
                return true
            }

            if (!this.email) {
                this.errors.email = "Email Required"
            }

            if (!this.password) {
                this.errors.password = "Password Required"
            }
        }


    },
}).mount('#contact-form')
// Contact form Validation


// Login Form Validation
createApp({
    data() {
        return {
            email: null,
            password: null,
            errors: {
                email: null,
                password: null,
            }
        }
    },
    methods: {
        loginForm() {
            if (this.email && this.password) {
                return true
            }

            if (!this.email) {
                this.errors.email = "Email Required"
            }

            if (!this.password) {
                this.errors.password = "Password Required"
            }
        }
    },
}).mount('#login-form')


// Registration Form Validation
createApp({
    data() {
        return {
            name: null,
            email: null,
            password: null,
            errors: {
                email: null,
                password: null,
            }
        }
    },
    methods: {
        registrationForm() {
            if (this.email && this.password) {
                return true
            }

            if (!this.name) {
                this.errors.name = "Name Required"
            }
            if (!this.email) {
                this.errors.email = "Email Required"
            }

            if (!this.password) {
                this.errors.password = "Password Required"
            }
        }
    },
}).mount('#registration-form')

// vue.js code


createApp({
    data() {
        return {
            message: 'Message'
        }
    },
    methods: {
        addToCart() {
            console.log('Add to cart')
        }
    },
  }).mount('#food-menu')
  