@extends('dashboard.layouts.main')

@section('container')
    <div class="card mt-3 col-md-6">
        <h5 class="card-header">Detail Category</h5>
        <div class="card-body">
            <div class="row">
                <div class="">
                    <div class="mb-4">
                        <div class="card bg-dark text-white border-0">
                            @if ($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" class="card-img">
                            @else
                                <img src="https://source.unsplash.com/1200x600?empty" class="card-img-top">
                            @endif
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-2" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                                </div>
                          </div>
                        </a>
                    </div>

                    <a href="/dashboard/categories" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span> Back to all My Category</a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection