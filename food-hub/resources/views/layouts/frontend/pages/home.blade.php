@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - Home')
@section('content')
<!-- Hero slider section -->
<div id="carouselExampleIndicators" class="carousel carousel-dark slide bg-light" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner container">
    <div class="carousel-item active">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-7 pr-2">
          <div class="slider-content">
            <h1 class="hero-heading text-responsive-slider-title">Crunchy Salad with Pita Chips</h1>
            <p class="text-responsive-content">The literal translation of Nasi Goreng is “fried rice” in
              Indonesian and Malaysian – and that’s exactly what it is! It’s mainly rice with just a
              little bit of meat and just onion for the vegetables. The thing that distinguishes it
              from other Fried Rice dishes is the sauce which is made with kecap manis, a sweet soy
              sauce that stains the rice dark brown and caramelises the rice when it cooks.</p>
            <a class="order-btn" href="#">Order Now <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-12 col-sm-5 order-sm-last order-first">
          <img class="img-fluid" src="frontend/assets/images/banner-img.png" alt="Banner image">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-7 pr-2">
          <div class="slider-content">
            <h1 class="hero-heading text-responsive-slider-title">Penne Funghi Chicken - A mighty meaty
              double pasta</h1>
            <p class="text-responsive-content">Penne Funghi Chicken is a delightful pasta dish that
              combines the earthy flavors of mushrooms, the succulence of chicken, and the satisfying
              texture of penne pasta. This mouthwatering creation is a perfect harmony of ingredients
              that come together to create a memorable and satisfying meal.</p>
            <a class="order-btn" href="#">Order Now <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-12 col-sm-5 order-sm-last order-first">
          <img class="img-fluid" src="frontend/assets/images/banner-img-3.webp" alt="Banner image">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-7 pr-2">
          <div class="slider-content">
            <h1 class="hero-heading text-responsive-slider-title">Chicken Hawaii - Naturally Brewed
              Cheese
            </h1>
            <p class="text-responsive-content">Although the legendary Double Burger really needs no
              introduction, please allow us… Tucked in between three soft buns are two all-beef
              patties, cheddar cheese, ketchup, onion, pickles and iceberg lettuce. Hesburger’s own
              paprika and cucumber mayonnaise add the crowning touch. Oh baby!</p>
            <a class="order-btn" href="#">Order Now <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="col-12 col-sm-5 order-sm-last order-first">
          <img class="img-fluid" src="frontend/assets/images/banner-3.webp" alt="Banner image">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Hero slider section -->
<div class="section-gap"></div>
<!-- Information box section -->
<div class="information-section" id="app-vue">
  <div class="container">
    <div class="row">
      <div class="offset-sm-1 col-12 col-sm-3">
        <div class="card mb-4">
          <div class="card-body text-center">
            <span><i class="fas fa-clock"></i></span>
            <h5 class="card-title">Monday - Sunday @{{message}}</h5>
            <p class="card-text">9am - 7pm</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-3">
        <div class="card mb-4">
          <div class="card-body text-center">
            <span><i class="fas fa-map"></i></span>
            <h5 class="card-title">115A Coldharbour Road</h5>
            <p class="card-text">Open Map</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-3">
        <div class="card mb-4">
          <div class="card-body text-center">
            <span><i class="fas fa-phone"></i></span>
            <h5 class="card-title">(44) 555-0122</h5>
            <p class="card-text">Give us a call</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Information box section -->
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
                <button class="btn add-to-cart-btn-plus" @click="addToCart">
                  <i class="fas fa-plus"></i>
                </button>
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

<!-- Best seller section -->
<section id="best-seller">
  <div class="container">
    <div class="title text-center">
      <h1 class="position-relative d-inline-block section-heading">Our Best Sellers</h1>
      <p>Checkout the best-selling dishes on our menu that our customer are going crazy over</p>
    </div>
    <div class="section-gap"></div>
    <div class="row align-items-center">
      <div class="offset-sm-1 col-sm-5 col-12">
        <img src="frontend/assets/images/b-seller-1.webp" alt="best selling food">
      </div>
      <div class="col-sm-5 col-12">
        <div class="slider-content">
          <h1 class="section-heading">CASUNZIEI</h1>
          <p>Classic marinara sauce, authentic old-world pepperoni, all-natural Italian sausage,
            slow-roasted ham, hardwood smoked bacon, seasoned pork and beef. Best an our Hand Tossed
            crust.</p>
          <p class="fs-3 fw-normal">£12.99</p>
          <div class="d-flex align-items-center">

            <button class="btn add-to-cart-btn-plus seller-icon"><i class="fas fa-plus"></i></button>
            <a class="order-btn" href="#">Order Now <i class="fa fa-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </div>
    <div class="section-gap"></div>
    <div class="row align-items-center">
      <div class="offset-sm-1 col-sm-5 col-12">
        <div class="slider-content">
          <h1 class="section-heading">LEMON ROASTED CHICKEN</h1>
          <p>Bring more flavor to the table with the rich, citrusy taste of lemon roasted chicken – good
            any day or night of the week. Goes great with traditional or garlic-roasted potatoes, or
            make it skinny with a wedge salad.</p>
          <p class="fs-3 fw-normal">£12.00</p>
          <div class="d-flex align-items-center">

            <button class="btn add-to-cart-btn-plus seller-icon"><i class="fas fa-plus"></i></button>
            <a class="order-btn" href="#">Order Now <i class="fa fa-arrow-right"></i></a>
          </div>

        </div>
      </div>
      <div class="col-sm-5 col-12">
        <img src="frontend/assets/images/b-seller-2.webp" alt="best selling food">
      </div>
    </div>
    <div class="section-gap"></div>
    <div class="row align-items-center">
      <div class="offset-sm-1 col-sm-5 col-12">
        <img src="frontend/assets/images/b-seller-3.webp" alt="best selling food">
      </div>
      <div class="col-sm-5 col-12">
        <div class="slider-content">
          <h1 class="section-heading">OVEN FRIED CHICKEN WINGS</h1>
          <p>Need a game day platter that is easy to make, but also tastes delicious? Try this recipe that
            uses simple pantry ingredients to create a yummy, fried taste in the oven!</p>
          <p class="fs-3 fw-normal">£10.00</p>
          <div class="d-flex align-items-center">

            <button class="btn add-to-cart-btn-plus seller-icon"><i class="fas fa-plus"></i></button>
            <a class="order-btn" href="#">Order Now <i class="fa fa-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>
<!-- End Best seller section -->
<div class="section-gap"></div>
<!-- how it works -->
<section id="how-it-works">
  <div class="container">
    <div class="title text-center">
      <h1 class="position-relative d-inline-block section-heading">How it Works</h1>
    </div>
    <div class="section-gap"></div>
    <div class="row">
      <div class="col-12 col-sm-3">
        <div class="card how-work-card mb-4">
          <div class="card-body text-center">
            <span><i class="far fa-calendar-check"></i></span>
            <h5 class="card-title">Choose a meal</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ipsam
              harum esse quia fugit facere</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-3">
        <div class="card how-work-card mb-4">
          <div class="card-body text-center">
            <span>
              <i class="far fa-money-bill-alt"></i>
            </span>
            <h5 class="card-title">Make Payment</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ipsam
              harum esse quia fugit facere</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-3">
        <div class="card how-work-card mb-4">
          <div class="card-body text-center">
            <span><i class="fas fa-truck"></i></span>
            <h5 class="card-title">Delivery</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ipsam
              harum esse quia fugit facere</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-3">
        <div class="card how-work-card mb-4">
          <div class="card-body text-center">
            <span><i class="fas fa-box"></i></span>
            <h5 class="card-title">Receive Package</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ipsam
              harum esse quia fugit facere</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End how it works -->
<div class="section-gap"></div>
<!-- customer reviews -->
<section id="customer-reivew">
  <div class="container">
    <div class="title text-center">
      <h1 class="position-relative d-inline-block section-heading">Customer Reviews</h1>
    </div>
    <div class="section-gap"></div>
    <div class="row">
      <div class="offset-sm-1 col-12 col-sm-5">
        <div class="card how-work-card review-card">
          <div class="card-body">
            <div class="customer-info d-flex align-items-center">
              <img src="frontend/assets/images/arif.png" width="80" height="80" alt="">
              <div>
                <h4>Arifur Rahman</h4>
                <small>UK, Birmingham</small>
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
              </div>
            </div>
            <p class="card-text">I recently had the pleasure of dining at Food Hub, Birmingham, and I
              must say it was an exceptional experience. From the moment I stepped inside, I was
              greeted with warm hospitality and a cozy atmosphere. The staff was friendly and
              attentive, making sure I felt comfortable throughout the meal.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-5">
        <div class="card how-work-card review-card">
          <div class="card-body">
            <div class="customer-info d-flex align-items-center">
              <img src="frontend/assets/images/user-2.png" width="80" height="80" alt="">
              <div>
                <h4>Joney Spark</h4>
                <small>Lekki, Nigeria</small>
                <div class="rating">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                </div>
              </div>
            </div>
            <p class="card-text">The menu boasted a fusion of Asian and Mexican flavors, which sounded
              intriguing. I decided to try their chicken teriyaki tacos, hoping for a unique twist on
              a classic dish. However, the execution was underwhelming. The chicken was dry, lacking
              flavor, and the teriyaki sauce tasted store-bought rather than freshly made</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- end customer reviews -->
<div class="section-gap"></div>

<!-- contact us -->
<section id="contact">
  <div class="container">
    <div class="title text-center">
      <h1 class="position-relative d-inline-block section-heading">Contact us</h1>
    </div>
    <div class="section-gap"></div>

    <div class="row" id="contact-form">
      <div class="offset-sm-1 col-12 col-sm-5">
        <form class="contact-form" @submit.prevent="checkForm">
          <div class="mb-3">
            <label for="exampleInputname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
              placeholder="Enter Your Full Name" v-model="name">
            <small class="text-danger" v-if="errors.name">
              @{{ errors.name }}
            </small>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter Your Email" v-model="email">
            <small class="text-danger" v-if="errors.email">
              @{{ errors.email }}
            </small>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Message</label>
            <textarea cols="30" rows="8" class="form-control" id="validationTextarea" placeholder="Write here..."
              v-model="message"></textarea>
            <small class="text-danger" v-if="errors.message">
              @{{ errors.message }}
            </small>
          </div>
          <button type="submit" class="btn submit-btn">Submit message</button>
        </form>
      </div>
      <div class="offset-sm-1 col-12 col-sm-5">
        <div class="contact-info">
          <h5>Phone Number</h5>
          <p>(44) 555-0122</p>
          <p>(44) 555-0122</p>
        </div>
        <div class="contact-info">
          <h5>Email</h5>
          <p>customerservice@email.com</p>
        </div>

        <div class="contact-info">
          <h5>Address</h5>
          <p>First Floor Flat, 115A Coldharbour Road, Birmingham, B11AB</p>
          <img src="frontend/assets/images/b-map.png" alt="map-img">
        </div>

      </div>
    </div>
  </div>
</section>
<!-- end contact us -->
<div class="section-gap"></div>

<!-- newsletter section -->
<section id="newsletter">
  <div class="container">
    <div class="title text-center">
      <h1 class="position-relative d-inline-block section-heading">Subscribe To Our Newsletter</h1>
      <p>Be the first to get notified about our amazing services and offers</p>

      <form class="contact-form">
        <div class="row">
          <div class="offset-sm-3 col-12 col-sm-6">
            <div class="subscribe-form d-sm-flex">
              <input type="email" class="form-control" id="exampleInputname" aria-describedby="nameHelp"
                placeholder="Enter Your email address">
              <button type="submit" class="btn subscribe-btn">Subscribe</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- end newsletter section -->
<div class="section-gap"></div>
@endsection