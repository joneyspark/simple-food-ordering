@extends('layouts.master')
@section('pagetitle', 'Categories')
@section('content')
  <div class="row">

    <div class="col-12 pb-4" id="profile">
      @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
          <span class="alert-text"><strong>Success!</strong> {{ session()->get('message') }}</span>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <div class="row align-items-center ">
        <div class="col-sm-auto col-sm-8 col-12 my-auto">
          <div class="h-100 d-flex align-items-center">
            <a href="{{ url('category') }}" class="mb-1 font-weight-bolder">
              <i class="fas fa-arrow-left" aria-hidden="true"></i>
            </a>
            <div class="food-list-wrap">
              <h5 class="mb-1 font-weight-bolder px-3">
                Category List <span class="badge badge-pill bg-gradient-primary">
                  {{ $categories->total() }}
                </span>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
          <a href="{{ url('category/create') }}" class="mb-1 font-weight-bolder btn bg-gradient-info">
            <i class="fas fa-plus" aria-hidden="true"></i> Add New
          </a>

        </div>
      </div>

    </div>
    <div class="card">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Name</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Photo</th>

              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-xs pl-2">{{ $category->name }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  @if ($category->photo)
                  <img height="60" class="rounded" src="assets/images/categories/{{ $category->photo }}" alt="">                  
                      
                  @else
                  <img height="60" src="assets/images/no-image.png" alt="">                  
                  @endif
                </td>
                <td class="align-middle text-center">
                  <span
                    class="text-secondary text-xs font-weight-bold">{{ $category->created_at->diffForHumans() }}</span>
                </td>
                <td class="align-middle">
                  <a href="{{ url('category', $category->id) }}"
                    class="text-secondary font-weight-bold text-xs px-2 custom-edit-icon-style" data-toggle="tooltip"
                    data-original-title="Edit user">
                    <i class="fa-solid fa-pen"></i>
                  </a>

                  <a href="#" type="button"
                    class="text-secondary font-weight-bold text-xs custom-delete-icon-style" data-bs-toggle="modal"
                    data-bs-target="#modal-notification-{{ $category->id }}"><i class="fa-solid fa-trash"></i></a>
                  <div class="modal fade" id="modal-notification-{{ $category->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="modal-notification-{{ $category->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                      <div class="modal-content">
                        <form action="/category/{{ $category->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-notification">{{ $category->name }}
                            </h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>

                          <div class="modal-body">
                            <div class="py-3 text-center">
                              <h1 class="display-1">
                                <i class="fa-solid fa-trash"></i>
                              </h1>

                              <h4 class="text-gradient text-danger mt-4">Are you Want to Delete ?</h4>
                              <p>Make sure you delete the correct data & you will not get back.</p>
                              <p>It's delete also all items under this category </p>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="submit" class="btn bg-gradient-danger">Yes, Delete</button>
                            <button type="button" class="btn bg-gradient-secondary ml-auto"
                              data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <hr class="horizontal dark mt-0">
        <div class="col-12 d-flex justify-content-center">
          {{ $categories->links() }}
        </div>

      </div>
    </div>
  </div>
@endsection
