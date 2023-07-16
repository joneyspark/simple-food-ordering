@extends('layouts.master')
@section('pagetitle', 'Edit Category')
@section('content')
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
        <a href="{{ url('category') }}" class="mb-1 font-weight-bolder">
          <i class="fas fa-arrow-left"></i> Go Back
        </a>
      </div>
    </div>
  </div>

  <form method="POST" action="/category/{{ $category->id }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-12">
        <div class="card mt-4" id="basic-info">
          <div class="card-header">
            <h5>Edit Category</h5>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-sm-6 col-12">
                <label class="form-label">Category Name</label>
                <div class="input-group">
                  <input id="category_name" name="name" class="form-control" type="text" placeholder="Pasta"
                    onfocus="focused(this)" onfocusout="defocused(this)" value="{{ $category->name }}">
                </div>
                @error('name')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-sm-4 col-12">
                <label class="form-label">Photo</label>
                <div class="input-group">
                  <input id="photo" name="photo" class="form-control" type="file" onfocus="focused(this)"
                    onfocusout="defocused(this)" value="{{ old('photo') }}">
                </div>
                @error('photo')
                  <div class="text-danger text-sm">{{ $message }}</div>
                @enderror
              </div>


              <div class="col-sm-2 col-12">

                <label class="form-label">Previous Photo</label>
                <div class="">
                  @if ($category->photo)
                    <img height="60" src="{{ asset('assets/images/categories/' . $category->photo) }}" alt="">
                  @else
                    <img height="60" src="{{ asset('assets/images/no-image.png') }}" alt="">
                  @endif
                </div>

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
            <a href="{{ url('category') }}" class="btn btn-outline-danger mb-0 ms-auto" type="button"
              name="button">Cancel</a>
            <button class="btn bg-gradient-info mb-0 ms-2" type="submit" name="button">Create</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
