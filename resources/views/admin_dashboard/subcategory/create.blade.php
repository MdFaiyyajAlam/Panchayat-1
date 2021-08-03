@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            {{-- add subcategory --}}
            <div class="col-12 d-flex">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <div class="fs-5 fw-bold text-dark">Add Subcategory</div>
                    </x-slot>
                    <x-slot name="controls">
                        <a href="{{ route('admin.subcategory.view') }}" role="button" class="btn btn-primary btn-sm d-flex align-items-center">
                            <i class='bx bx-folder-open me-1'></i>
                            Subcategories
                        </a>
                    </x-slot>
                    <x-slot name="content">
                        <hr>
                        {{-- validation --}}
                        <x-jet-validation-errors class="mb-2 text-danger" />
                        <form action="{{ route('admin.subcategory.store') }}" method="POST" class="row fw-bold">
                            @csrf
                            {{-- name --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Subcategory Name</label>
                                <input type="text" name="name" class="form-control" onkeyup="createSlug(this)" placeholder="Category Name" required>
                            </div>
                            {{-- slug --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Slug
                                    <small>
                                        (If you leave it blank, it will be generated automatically.)
                                    </small>
                                </label>
                                <input type="text" class="form-control" name="slug" data-slug="slug" placeholder="Slug">
                            </div>
                            {{-- description --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Description (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="description" placeholder="Description (Meta Tag)">
                            </div>
                            {{-- keywords --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Keywords (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords (Meta Tag)">
                            </div>
                            {{-- parent category --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Parent Category</label>
                                <select name="parent_id" class="form-select">
                                    <option value="" selected>None</option>
                                    @if (isset($categories))
                                        @foreach ($categories as $list)
                                            <option value="{{$list->id}}">
                                                {{ucwords($list->name)}}
                                            </option>       
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            {{-- show on menu --}}
                            <div class="col-12 mt-3">
                                <div class="row g-sm-2 d-flex align-items-center">
                                    <div class="col-xl-2 col-md-3 col-sm-12">
                                        <label class="fw-bold">Show on Menu</label>
                                    </div>
                                    <div class="col-xl-1 col-md-2 col-sm-12">
                                        <input type="radio" name="menu_status" value="1" class="polaris" checked>
                                        <label class="cursor-pointer">Yes</label>
                                    </div>
                                    <div class="col-xl-1 col-md-2 col-sm-12">
                                        <input type="radio" name="menu_status" value="0" class="polaris">
                                        <label class="cursor-pointer">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary btn-sm">Add Subcategory</button>
                            </div>
                        </form>
                    </x-slot>
                </x-bootstrap.card>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection
