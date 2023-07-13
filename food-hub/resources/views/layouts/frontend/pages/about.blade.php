@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - Home')
@section('content')
  <div class="section-gap"></div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb justify-content-center text-center">
          <h3 class="text-center login-title">About us</h3>
        </div>
      </div>
      <div class="section-gap"></div>
      <div class="offset-sm-1 col-12 col-sm-4">
        <img src="frontend/assets/images/about01.jpg" alt="about image">
      </div>
      <div class="col-12 col-sm-5">
        <div class="about-content-1 mt-4">
          <h3 class="login-title">Food Hub Serving food since 1990 with best quality</h3>
          <p>The story of Food Hub begins with a shared passion for food and a vision to create a hub of culinary
            excellence. Founded in [year], Food Hub emerged as an online platform dedicated to celebrating the art of
            cooking, exploring diverse cuisines, and connecting food enthusiasts from around the globe.</p>
        </div>
      </div>
      <div class="offset-sm-1 col-12 col-sm-4 mt-4">
        <img src="frontend/assets/images/about02.jpg" alt="about image">
      </div>
      <div class="col-12 col-sm-4 mt-4">
        <img src="frontend/assets/images/about03.jpg" alt="about image">
      </div>
    </div>
  </div>
  <div class="section-gap"></div>

  <!-- Our history -->
  <section id="customer-review">
    <div class="container">
      <div class="section-gap"></div>
      <div class="row align-items-center">
        <div class="offset-sm-1 col-12 col-sm-4">
          <img src="frontend/assets/images/history.jpeg" alt="about image">
        </div>
        <div class="col-12 col-sm-5">
          <div class="about-content-1 mt-4">
            <h3 class="login-title">Food Hub History</h3>
            <p>The story of Food Hub begins with a shared passion for food and a vision to create a hub of culinary
              excellence. Founded in [year], Food Hub emerged as an online platform dedicated to celebrating the art of
              cooking, exploring diverse cuisines, and connecting food enthusiasts from around the globe.</p>

            <p>The founders of Food Hub, seasoned food lovers and industry professionals, recognized the need for a
              centralized platform that could serve as a comprehensive resource for all things food-related. They wanted
              to create a space where people could find inspiration, learn new skills, and share their culinary
              adventures.</p>

            <h3 class="login-title">Our Mission </h3>
            <p>At Food Hub, our mission is to inspire, educate, and empower individuals to explore the world of food,
              cultivate their culinary skills, and foster a global community of passionate food enthusiasts. We strive to
              be a trusted resource that celebrates the art of cooking, promotes diverse culinary experiences, and
              encourages sustainable and ethical food practices.</p>
            <h3 class="login-title">Our Vision </h3>
            <p>Our vision is to create a vibrant and inclusive online hub where individuals can discover, create, and
              share culinary delights from every corner of the world. We envision Food Hub as a platform that connects
              people through their shared love for food, bridging cultures, and fostering a deeper appreciation for the
              role of food in our lives.</p>


          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our history -->
  <div class="section-gap"></div>

  <!-- Customer review -->
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
              <p class="card-text">I recently had the pleasure of dining at Food Hub, Birmingham, and I must say it was an
                exceptional experience. From the moment I stepped inside, I was greeted with warm hospitality and a cozy
                atmosphere. The staff was friendly and attentive, making sure I felt comfortable throughout the meal.</p>
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
              <p class="card-text">The menu boasted a fusion of Asian and Mexican flavors, which sounded intriguing. I
                decided to try their chicken teriyaki tacos, hoping for a unique twist on a classic dish. However, the
                execution was underwhelming. The chicken was dry, lacking flavor, and the teriyaki sauce tasted
                store-bought rather than freshly made</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Customer revew -->
  <div class="section-gap"></div>

  <div class="section-gap"></div>
@endsection
