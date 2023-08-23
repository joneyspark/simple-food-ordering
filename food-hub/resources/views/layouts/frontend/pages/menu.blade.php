@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - Menu')
@section('content')
  <div class="section-gap"></div>

  <!-- Men collection -->
  <section id="collection" class="py-5">
    <div class="container" id="add-to-cart">
      <div class="title text-center">
        <h1 class="position-relative d-inline-block section-heading">Food Menu</h1>
      </div>

      <div class="row g-0">
        <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
          <button type="button" class="btn m-2 active-filter-btn" data-filter="*">All</button>
          @foreach ($categories as $category)
            <button type="button" class="btn m-2" data-filter=".{{ $category->slug }}">{{ $category->name }}</button>
          @endforeach

        </div>

        <div class="collection-list mt-4 row gx-0 gy-3">
        
          <template v-for="food in foods" :key="food.id">

            <div class="col-md-6 col-lg-4 col-xl-3 p-2" :class="food.category.slug">
              <div class="card menu-card">
                <div class="collection-img position-relative">
                  <img :src="'/assets/images/foods/' + food.photo" class="w-100">

                </div>
                <div class="px-3 py-3">
                  <div class="rating">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <p class="text-capitalize my-1">£ @{{ food.name }}</p>
                  <small>@{{ food.ingredients }}</small>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-normal">@{{ food.price }}</span>
                    <button class="btn add-to-cart-btn-plus"
                      @click="addToCart(food.id, food.name, food.price, food.photo)">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </template>
        </div>
      </div>
    </div>
  </section>
  <!-- end of Men collection -->

  <div class="section-gap"></div>
@endsection
