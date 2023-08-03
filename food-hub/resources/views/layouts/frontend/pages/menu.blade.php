@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - Menu')
@section('content')
  <div class="section-gap"></div>

  <!-- Men collection -->
  <section id="collection" class="py-5">
    <div class="container">
      <div class="title text-center">
        <h1 class="position-relative d-inline-block section-heading">Food Menu</h1>
      </div>

      <div class="row g-0">
        <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
          <button type="button" class="btn m-2 active-filter-btn" data-filter="*">All</button>
          <button type="button" class="btn m-2" data-filter=".burger">Burger</button>
          <button type="button" class="btn m-2" data-filter=".pasta">Pasta</button>
          <button type="button" class="btn m-2" data-filter=".pizza">Pizza</button>

          <button type="button" class="btn m-2" data-filter=".cold-drinks">Cold Drinks</button>

          <button type="button" class="btn m-2" data-filter=".hot-drinks">Hot Drinks</button>
        </div>

        <div class="collection-list mt-4 row gx-0 gy-3">
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 burger">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/burger-1.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Bacon Burger</p>
                <small>Bean Burger, Focaccia bun, Balsamic Vinaigrette, Pesto</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£10.95</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 burger">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/burger-2.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Cheese Butter</p>
                <small>Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£15.00</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 burger">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/burger-3.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">
                  Chicken Burger</p>
                <small>Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese wings</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£16.75</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 burger">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/burger-4.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Country Burger
                </p>
                <small>Dr. Praeger’s Black Bean Burger, Focaccia bun, Balsamic Vinaigrette</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£25.00</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pasta">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pasta-1.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">BBQ chicken breast</p>
                <small>Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese, Stirfry pasta, chicken
                  wings</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£25.00</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pasta">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pasta-2.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Bolognese Pasta</p>
                <small>Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese, Stirfry pasta, chicken
                  wings</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£9.00</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pasta">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pasta-3.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Molto Tagliatelle</p>
                <small>Pesto, Tomato, Swiss Cheese, beef patties, cheddar cheese, ketchup, onion,
                  pickles</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£14.99</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pasta">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pasta-4.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Penne Funghi Chicken</p>
                <small>Pesto, Tomato, Swiss Cheese, beef patties, cheddar cheese, ketchup, onion,
                  pickles</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£16.99</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pizza">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pizza-1.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Apricot Chicken</p>
                <small>Crispy bacon, tasty ham, pineapple, onion and stretchy mozzarella, green olives,
                  black olives, fresh tomatoes</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£18.99</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pizza">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pizza-2.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Chicken Hawaii</p>
                <small>Extra-virgin olive oil, mozzarella cheese, thinly-sliced steak meat, garlic,
                  green peppers</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£14.49</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pizza">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pizza-3.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Hawaii Vegetarian Pizza</p>
                <small>Mouth watering pepperoni, cabanossi, mushroom, capsicum, black olives and
                  stretchy mozzarella</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£14.49</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 pizza">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/pizza-4.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Pepperoni Pizza</p>
                <small>Extra-virgin olive oil, garlic, mozzarella cheese, onions, mushrooms, green
                  olives, black olives, fresh tomatoes</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£19.49</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 cold-drinks">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/cold-drinks-1.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Blueberry Shake</p>
                <small>Iced coffee is a type of coffee beverage served chilled, brewed variously</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£15.00</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 cold-drinks">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/cold-drinks-2.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Fresh Lime</p>
                <small>Browse unique Coca-Cola products, clothing, & accessories, or customize
                  Coke</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£16.99</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 p-2 hot-drinks">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/hot-drinks-1.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Black Coffee</p>
                <small>Browse unique Coca-Cola coffee is a type of coffee beverage served
                  chilled</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£5.00</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 p-2 hot-drinks">
            <div class="card menu-card">
              <div class="collection-img position-relative">
                <img src="frontend/assets/images/hot-drinks-2.webp" class="w-100">

              </div>
              <div class="px-3 py-3">
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1">Hot Cappuccino</p>
                <small>coffee is a type of coffee beverage served chilled, brewed variously</small>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-normal">£5.00</span>
                  <button class="btn add-to-cart-btn-plus"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of Men collection -->

  <div class="section-gap"></div>
@endsection
