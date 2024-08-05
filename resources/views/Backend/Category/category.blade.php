@extends('Backend.master_page')
@section('menu-contents')

    <h1 class="text-dark fs-3 mt-3">Category</h1>
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa fa-plus" aria-hidden="true" ></i>  Add category
    </button>

    <div class="d-flex flex-wrap">
        <div class="col-3 p-2 category-item ">
            <div class="w-100 h-100 bg-info">

            </div>
        </div>
    </div>
    @include('backend.category.modal.add_category')
@endsection