@extends('layouts.master')
@section('pagetitle', 'Orders')
@section('content')

  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-10">
          <div class="card" style="border-radius: 10px;">
            <div class="card-header px-4 py-5">
              <h5 class="text-muted mb-0">Thanks for your Order, <span
                  style="color: #a8729a;">{{ auth()->user()->name }}</span>!</h5>
            </div>
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                <p class="small text-muted mb-0">Receipt Voucher : {{ $order->id }}</p>
              </div>
              @php
                $grandTotal = 0;
              @endphp
              @foreach ($order->carts as $cart)
                @php
                  $cartTotal = $cart->price * $cart->qty;
                  $grandTotal += $cartTotal;
                  
                @endphp

                <div class="card shadow-0 border mb-4">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-2">
                        <img src="{{ asset('assets/images/foods/' . $cart->food->photo) }}" class="img-fluid"
                          alt="Phone">
                      </div>
                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0">{{ $cart->food->name }}</p>
                      </div>

                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">Qty: {{ $cart->qty }} X £{{ $cart->price }}</p>
                      </div>

                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">=</p>
                      </div>

                      <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">£{{ $cart->qty * $cart->price }}</p>
                      </div>
                    </div>
                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                    <div class="row d-flex align-items-center">
                      <div class="col-md-2">
                        <p class="text-muted mb-0 small">Track Order</p>
                      </div>
                      <div class="col-md-10">
                        <div class="progress" style="height: 6px; border-radius: 16px;">
                          <div class="progress-bar" role="progressbar"
                            style="width: 20%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-around mb-1">
                          <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                          <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach

              <div class="d-flex justify-content-between pt-2">
                <p class="fw-bold mb-0">Order Details</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> £{{ $grandTotal }}</p>
              </div>

              <div class="d-flex justify-content-between pt-2">
                <p class="text-muted mb-0">Invoice Number : {{ $order->id }}</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">TAX (0.1%)</span> £{{ ($grandTotal * 0.1) / 100 }}
                </p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="text-muted mb-0">Invoice Date : {{ $order->created_at->diffForHumans() }}</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> £5</p>
              </div>


            </div>
            <div class="card-footer border-0 px-4 py-5"
              style="background-image: linear-gradient(310deg,#7928ca,#ff0080); border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
              <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Grand Total: <span class="h2 mb-0 ms-2 text-white">£{{ $grandTotal + ($grandTotal * 0.1) / 100 + 5 }}</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
