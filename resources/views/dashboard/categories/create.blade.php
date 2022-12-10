@extends('dashboard.layouts.main')

@section('container')
<div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
    <h1 class="h2">Create New Categories</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Category Image</label>
            <img class="mb-3 img-preview img-fluid col-sm-5">
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Create Category</button>
      </form>
</div>

<script>
    // const name = document.querySelector('#name');
    // const slug = document.querySelector('#slug');

    // name.addEventListener('change' function() {
    //     fetch('/dashboard/categories/checkSlug?name=' + name.value)
    //     .then(response => response.json())
    //     .then(data => slug.value = data.slug)
    // });

    const name = document.querySelector("#name");
    const slug = document.querySelector("#slug");

    name.addEventListener("change", function() {
        let preslug = name.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    function previewImage() {
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
          }
        }

</script>

@endsection