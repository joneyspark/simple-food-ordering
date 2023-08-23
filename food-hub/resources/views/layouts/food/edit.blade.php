@extends('layouts.master')
@section('pagetitle', 'Add New Food')
@section('content')
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
        <a href="{{ url('foods') }}" class="mb-1 font-weight-bolder">
          <i class="fas fa-arrow-left"></i> Go Back
        </a>
      </div>
    </div>
  </div>

  <form method="POST" action="/foods/{{ $food->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-12">
        <div class="card mt-4" id="basic-info">
          <div class="card-header">
            <h5>Edit food</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-sm-6 col-12">
                <label class="form-label">Food Name</label>
                <div class="input-group">
                  <input id="food_name" name="name" class="form-control" type="text" placeholder="Pizza"
                    onfocus="focused(this)" onfocusout="defocused(this)" value="{{ $food->name }}">
                </div>
                @error('name')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-sm-6 col-12">
                <label class="form-label">Price</label>
                <div class="input-group">
                  <span class="input-group-text">£</span>
                  <input id="price" name="price" class="form-control" type="text" placeholder="14.99"
                    onfocus="focused(this)" onfocusout="defocused(this)" value="{{ $food->price }}">

                </div>
                @error('price')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>


              <div class="col-sm-4 col-12">
                <label class="form-label">Category</label>
                <div class="form-group mb-0">
                  <select class="form-control" id="categories_id" name="categories_id">
                    <option value="">Select Food Category</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" @if($category->id === $food->categories_id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                @error('categories_id')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-sm-2 col-12">
                <label class="form-label">Rating</label>
                <div class="input-group">
                  <input id="rating" name="rating" class="form-control" type="text" placeholder="4.9"
                    onfocus="focused(this)" onfocusout="defocused(this)" value="{{ $food->rating }}">
                </div>
                @error('rating')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-sm-4 col-12">
                <label class="form-label">Photo</label>
                <div class="input-group">
                  <input id="photo" name="photo" class="form-control" type="file">
                </div>
                @error('photo')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-sm-2 col-12">

                <label class="form-label">Previous Photo</label>
                <div class="">
                  @if ($food->photo)
                    <img height="60" src="{{ asset('assets/images/foods/' . $food->photo) }}" alt="">
                  @else
                    <img height="60" src="{{ asset('assets/images/no-image.png') }}" alt="">
                  @endif
                </div>

              </div>

              <div class="col-sm-6 col-12">
                <label class="form-label">Ingredients</label>
                <div class="input-group">
                  <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"
                    placeholder="Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese">{{ $food->ingredients }}</textarea>

                </div>
                @error('ingredients')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-sm-6 col-12">
                <label class="form-label">Description</label>
                <div class="input-group">
                  <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                    placeholder="The literal translation of Nasi Goreng is “fried rice” in Indonesian and Malaysian – and that’s exactly what it is! It’s mainly rice with just a little bit of meat and just onion for the vegetables.">{{ $food->description }}</textarea>
                </div>
                @error('description')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-body d-sm-flex">
            <div class="d-flex align-items-center mb-sm-0 mb-4">
            </div>
            <a href="{{ url('foods') }}" class="btn btn-outline-danger mb-0 ms-auto" type="button"
              name="button">Cancel</a>
            <button class="btn bg-gradient-info mb-0 ms-2" type="submit" name="button">Create</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
