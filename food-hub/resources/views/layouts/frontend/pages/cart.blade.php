@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - Cart')
@section('content')
  <div class="section-gap"></div>
  <!-- cart section -->
  <section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-sm-10">
          <div class="card">
            <div class="card-body p-4">
              <div class="row">
                <div class="col-sm-7">
                  <div class="item-card">
                    <h5 class="mb-3"><a href="#!" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Continue Food Ordering</a>
                    </h5>
                    <hr>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div>
                        <p class="mb-1">Food cart</p>
                        <p class="mb-0">You have @{{ localStorageItems.length }} food items in your cart</p>
                      </div>
                    </div>

                    <div class="card cart-item-card mb-3" v-for="(cartItem, index) in localStorageItems"
                      :key="cartItem.id">
                      <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                          <div class="col-12 col-sm-6">
                            <div class="d-flex align-items-center">
                              <div>
                                <img src="frontend/assets/images/food-img-1.png" class="img-fluid rounded-3"
                                  alt="Shopping item" style="width: 65px;">
                              </div>
                              <div class="ms-3">
                                <h5>@{{ cartItem.name }}</h5>
                                <p class="small mb-0">Stirfry pasta, chicken wings</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-6">
                            <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between">
                              <h5 class="mb-0">£@{{ cartItem.price }} x </h5>
                              <div class="d-flex justify-content-between align-items-center counter-input ">
                                <button class="btn btn-link px-2" @click="decreaseQuantity(cartItem)">
                                  <i class="fas fa-minus"></i>
                                </button>
                                <span>@{{ cartItem.qty }}</span>

                                <button class="btn btn-link px-2" @click="increaseQuantity(cartItem)">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </div>
                              <div>
                                <h5 class="mb-0"> = £ @{{ getTotalPrice(cartItem) }}</h5>
                              </div>
                              <a href="#!" style="color: #ff1717;" @click="removeFromCart(cartItem.id)"><i
                                  class="fas fa-trash-alt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h1 class="text-danger" v-if="hasError('cartItems')">@{{ getError('cartItems') }}</h1>
                  </div>

                </div>
                <div class="col-sm-5">
                  <div class="card bank-card text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">

                        <h5 class="mb-0">Shipping Address</h5>

                      </div>

                      <div class="form-outline form-white mb-2">
                        <span class="text-danger" v-if="hasError('shippingAddress.name')">@{{ getError('shippingAddress.name') }}</span>
                        <input type="text" id="fullname" class="form-control form-control-lg" size="17"
                          placeholder="Full Name" v-model="shippingAddress.name" />
                        <label class="form-label" for="fullname">Full Name</label>
                      </div>

                      <div class="form-outline form-white mb-2">
                        <span class="text-danger" v-if="hasError('shippingAddress.email')">@{{ getError('shippingAddress.email') }}</span>
                        <input type="email" id="email" class="form-control form-control-lg"
                          placeholder="example@email.com" v-model="shippingAddress.email" />
                        <label class="form-label" for="email">Email</label>
                      </div>

                      <div class="form-outline form-white mb-2">
                        <span class="text-danger" v-if="hasError('shippingAddress.address')">@{{ getError('shippingAddress.address') }}</span>
                        <textarea name="address" id="address" cols="30" rows="3" class="form-control"
                          placeholder="Write your Address..." v-model="shippingAddress.address"></textarea>
                        <label class="form-label" for="address">Address</label>
                      </div>

                      <hr class="my-4">
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Card details</h5>
                      </div>

                      <p class="small mb-4">Card type</p>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>


                      <div class="form-outline form-white my-4">
                        <span class="text-danger" v-if="hasError('cartDetails.card_name')">@{{ getError('cartDetails.card_name') }}</span>
                        <input type="text" id="typeName" class="form-control form-control-lg"
                          v-model="cartDetails.card_name" placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <span class="text-danger"
                          v-if="hasError('cartDetails.card_number')">@{{ getError('cartDetails.card_number') }}</span>
                        <input type="text" id="cardnumber" class="form-control form-control-lg"
                          v-model="cartDetails.card_number" placeholder="1234 5678 9012 3457" />
                        <label class="form-label" for="cardnumber">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <span class="text-danger"
                              v-if="hasError('cartDetails.expire')">@{{ getError('cartDetails.expire') }}</span>
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              v-model="cartDetails.expire" placeholder="MM/YYYY" size="7" id="exp"
                              minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <span class="text-danger" v-if="hasError('cartDetails.cvc')">@{{ getError('cartDetails.cvc') }}</span>
                            <input type="password" id="cvv" class="form-control form-control-lg"
                              v-model="cartDetails.cvc" placeholder="&#9679;&#9679;&#9679;" size="1"
                              minlength="3" maxlength="3" />
                            <label class="form-label" for="cvv">Cvv</label>
                          </div>
                        </div>
                      </div>

                      <hr class="my-4">
                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">£ @{{ totalPrice.toFixed(2) }}</p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Shipping</p>
                        <p class="mb-2">£ @{{ shippingCost.toFixed(2) }}</p>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">TAX(Incl. 10%)</p>
                        <p class="mb-2">£ @{{ taxAmount.toFixed(2) }}</p>
                      </div>

                      <button type="button" class="btn btn-info btn-block btn-lg checkout-btn"
                        @click="processCheckout">
                        <div class="d-flex justify-content-between">
                          <span>£ @{{ cartGrandTotal.toFixed(2) }}</span>
                          <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end cart section -->
  <div class="section-gap"></div>
@endsection

{{-- @section('body-scripts')
<script src="{{ asset('frontend/assets/js/cart.js') }}"></script>
@endsection --}}
