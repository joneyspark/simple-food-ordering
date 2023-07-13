@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - Home')
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
                          class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a>
                    </h5>
                    <hr>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div>
                        <p class="mb-1">Shopping cart</p>
                        <p class="mb-0">You have 4 items in your cart</p>
                      </div>
                    </div>

                    <div class="card cart-item-card mb-3">
                      <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                          <div class="col-12 col-sm-6">
                            <div class="d-flex align-items-center">
                              <div>
                                <img src="frontend/assets/images/food-img-1.png" class="img-fluid rounded-3" alt="Shopping item"
                                  style="width: 65px;">
                              </div>
                              <div class="ms-3">
                                <h5>Swiss Chard Pasta</h5>
                                <p class="small mb-0">Stirfry pasta, chicken wings</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-6">
                            <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between">
                              <h5 class="mb-0">£10.50 x </h5>
                              <div class="d-flex justify-content-between align-items-center counter-input ">
                                <button class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                  <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value="1" type="number"
                                  class="form-control text-center " />

                                <button class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </div>
                              <div>
                                <h5 class="mb-0"> = £10.50</h5>
                              </div>
                              <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                </div>
                <div class="col-sm-5">

                  <div class="card bank-card text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Card details</h5>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" class="img-fluid rounded-3"
                          style="width: 45px;" alt="Avatar">
                      </div>

                      <p class="small mb-2">Card type</p>
                      <a href="#!" type="submit" class="text-white"><i
                          class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                      <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                      <form class="mt-4">
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                            placeholder="Cardholder's Name" />
                          <label class="form-label" for="typeName">Cardholder's Name</label>
                        </div>

                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                            placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                          <label class="form-label" for="typeText">Card Number</label>
                        </div>

                        <div class="row mb-4">
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="text" id="typeExp" class="form-control form-control-lg"
                                placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                              <label class="form-label" for="typeExp">Expiration</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="password" id="typeText" class="form-control form-control-lg"
                                placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                              <label class="form-label" for="typeText">Cvv</label>
                            </div>
                          </div>
                        </div>

                      </form>

                      <hr class="my-4">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2">$4798.00</p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Shipping</p>
                        <p class="mb-2">$20.00</p>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total(Incl. taxes)</p>
                        <p class="mb-2">$4818.00</p>
                      </div>

                      <button type="button" class="btn btn-info btn-block btn-lg checkout-btn">
                        <div class="d-flex justify-content-between">
                          <span>$4818.00</span>
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