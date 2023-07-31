console.log('CART ITEMs');

let cartItems = [];

function updateCartItemCount() {
  const cartItemCount = cartItems.reduce((count, item) => count + item.quantity, 0);
  document.getElementById('cartItemCount').textContent = cartItemCount;
}

function updateCartItemsList() {
  const cartItemsList = document.getElementById('cartItemsList');
  cartItemsList.innerHTML = '';

  cartItems.forEach((item, index) => {
    const listItem = document.createElement('li');
    listItem.textContent = `${item.name} - ${item.price} (Quantity: ${item.quantity})`;

    const decreaseButton = document.createElement('button');
    decreaseButton.textContent = '-';
    decreaseButton.onclick = () => decreaseQuantity(index);

    const increaseButton = document.createElement('button');
    increaseButton.textContent = '+';
    increaseButton.onclick = () => increaseQuantity(index);

    const removeButton = document.createElement('button');
    removeButton.textContent = 'Remove';
    removeButton.onclick = () => removeFromCart(index);

    listItem.appendChild(decreaseButton);
    listItem.appendChild(increaseButton);
    listItem.appendChild(removeButton);

    cartItemsList.appendChild(listItem);
  });
}

function addToCart(name, price) {
  const existingItem = cartItems.find(cartItem => cartItem.name === name);
  if (existingItem) {
    existingItem.quantity++;
  } else {
    cartItems.push({ name, price, quantity: 1 });
  }

  updateCartItemCount();
  updateCartItemsList();
  updateCartTotal();
}

function removeFromCart(index) {
  cartItems.splice(index, 1);
  updateCartItemCount();
  updateCartItemsList();
  updateCartTotal();
}

function increaseQuantity(index) {
  cartItems[index].quantity++;
  updateCartItemCount();
  updateCartItemsList();
  updateCartTotal();
}

function decreaseQuantity(index) {
  if (cartItems[index].quantity > 1) {
    cartItems[index].quantity--;
    updateCartItemCount();
    updateCartItemsList();
    updateCartTotal();
  }
}

function clearCart() {
  cartItems = [];
  updateCartItemCount();
  updateCartItemsList();
  updateCartTotal();
}

function updateCartTotal() {
  const cartTotal = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
  document.getElementById('cartTotal').textContent = cartTotal;
}

function loadCartFromLocalStorage() {
  const savedCart = localStorage.getItem('cartItems');
  cartItems = savedCart ? JSON.parse(savedCart) : [];
}

window.addEventListener('DOMContentLoaded', () => {
  if (!localStorage.getItem('cartItems')) {
    localStorage.setItem('cartItems', JSON.stringify([]));
  }

  loadCartFromLocalStorage();
  updateCartItemCount();
  updateCartItemsList();
  updateCartTotal();
});
