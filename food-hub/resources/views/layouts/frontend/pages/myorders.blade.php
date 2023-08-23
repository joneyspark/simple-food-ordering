@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - About us')
@section('content')
  <div class="section-gap"></div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb justify-content-center text-center">
          <h3 class="text-center login-title">My Orders</h3>
        </div>
      </div>
      
    </div>
    <div class="card">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Customer Name</th>
  
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order Status
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order Date
                </th>
  
                
  
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs pl-2">{{ $order->id }}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs pl-2">{{ $order->user->name }}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs pl-2">
                          <span class="badge bg-secondary">{{ $order->status }}</span>
                        </h6>
                      </div>
                    </div>
                  </td>

                  <td>
                    <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-xs pl-2">{{ $order->created_at->diffForHumans() }}</h6>
                        </div>
                      </div>
                  </td>
    
                  <td class="align-middle">
                    <a href="{{ url('view-customer-order', $order->id) }}"
                      class="btn btn-success text-white font-weight-bold text-xs px-2 custom-edit-icon-style" data-toggle="tooltip"
                      data-original-title="view order">
                      View order
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <hr class="horizontal dark mt-0">
          <div class="col-12 d-flex justify-content-center">
            {{ $orders->links() }}
          </div>
  
        </div>
      </div>
  </div>

  <div class="section-gap"></div>
@endsection
