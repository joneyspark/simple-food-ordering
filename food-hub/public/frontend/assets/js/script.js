// vue.js script

createApp({
  data() {
    return {
      foods: [],
      cartItems: [],
      localStorageItems: [],
      count: 0,
      shippingCost: 5,
      taxRate: 0.1, // 10%
      shippingAddress: {
        name: '',
        address: '',
        email: '',
      },

      cartDetails: {
        cHolderName: '',
        cNumber: '',
        expire: '',
        cvc: ''
      },
      user: userData,
      errors: {}
    }
  },
  methods: {

    addToCart(foodId, name, price, photo) {
      const newItems = {
        id: foodId,
        name,
        price,
        photo,
        qty: 1
      }

      const existingItem = this.cartItems.find(item => item.id === foodId)
      if (existingItem) {
        existingItem.qty++
        this.updateCartItemCount();
      } else {
        this.cartItems.push(newItems)
        this.updateCartItemCount();
      }

    },
    updateCartItemCount() {
      localStorage.setItem('cartItems', JSON.stringify(this.cartItems));
    },
    increaseQuantity(cartItem) {
      cartItem.qty++;
      this.updateCartItemCount();
    },
    decreaseQuantity(cartItem) {
      if (cartItem.qty > 1) {
        cartItem.qty--;
        this.updateCartItemCount();
      }
    },
    getTotalPrice(item) {
      return item.price * item.qty;
    },
    removeFromCart(id) {
      this.cartItems.splice(id, 1);
      this.updateCartItemCount();

    },
    // checkout fn
    processCheckout() {
      const data = {
        cartItems: this.cartItems,
        shippingAddress: this.shippingAddress,
        paymentInfo: this.cartDetails,
        userId: this.user ? this.user.id : null
      }
      
      axios.post('/api/checkout', data)
        .then(response => {
          // Handle success, show a success message, etc.
          this.errors = {}
          console.log("response", response.data);
        })
        .catch(error => {
          // Handle error, show an error message, etc.
          if (error.response && error.response.status === 422) {
            this.errors = error.response.data.errors
            console.log(this.errors && this.errors.shippingAddress["address"][0]);
          } else {
            // Handle other errors, e.g., network issues
            console.error(error);
          }

        });

    },
    hasError(fieldName) {
      return fieldName in this.errors;
    },
    getError(fieldName) {
      return this.errors[fieldName][0];
    },
  },
  computed: {
    totalQuantity() {
      // Calculate the total quantity of all items in the cart
      const cartItemsFromLocalStorage = JSON.parse(localStorage.getItem("cartItems"));
      if (cartItemsFromLocalStorage) {
        return this.cartItems.reduce((total, item) => total + item.qty, 0);
      }
    },

    totalPrice() {
      // Calculate the total price of all items in the cart
      return this.cartItems.reduce((total, item) => total + item.price * item.qty, 0);
    },
    taxAmount() {
      return this.totalPrice * this.taxRate;
    },
    cartGrandTotal() {
      return this.totalPrice + this.shippingCost + this.taxAmount;
    },
  },

  mounted() {
    axios.get("/api/foods")
      .then((response) => {
        this.foods = response.data
      })
      .catch((error) => {
        console.log(error)
      })
    const localStorageData = JSON.parse(localStorage.getItem("cartItems"));
    // const cartItemsFromLocalStorage = JSON.parse(localStorage.getItem("cartItems"));
    if (localStorageData) {
      this.count = localStorageData.length
      this.localStorageItems = localStorageData
      this.cartItems = localStorageData
    }
  }
}).mount('#v-app')

setTimeout(() => {
  // init Isotope
  var $grid = $('.collection-list').isotope({
    // options
  });
  // filter items on button click
  $('.filter-button-group').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    resetFilterBtns();
    $(this).addClass('active-filter-btn');
    $grid.isotope({
      filter: filterValue
    });
  });

  var filterBtns = $('.filter-button-group').find('button');

  function resetFilterBtns() {
    filterBtns.each(function () {
      $(this).removeClass('active-filter-btn');
    });
  }

}, 4000);
