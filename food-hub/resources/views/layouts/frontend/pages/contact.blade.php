@extends('layouts.frontend.master')
@section('pagetitle', 'Food Hub - Home')
@section('content')
  <div class="section-gap"></div>

  <!-- contact us -->
  <section id="contact">
    <div class="container">
      <div class="title text-center">
        <h1 class="position-relative d-inline-block section-heading">Contact us </h1>
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
                @{{ errors . name }}
              </small>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Your Email" v-model="email">
              <small class="text-danger" v-if="errors.email">
                @{{ errors . email }}
              </small>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Message</label>
              <textarea cols="30" rows="8" class="form-control" id="validationTextarea" placeholder="Write here..."
                v-model="message"></textarea>
              <small class="text-danger" v-if="errors.message">
                @{{ errors . message }}
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
@endsection
