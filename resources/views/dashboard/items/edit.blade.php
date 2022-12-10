@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Item</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/items/{{ $item->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama Barang</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $item->name) }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $item->slug) }}">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Harga</label>
              <input type="text" class="form-control @error('price', $item->price) is-invalid @enderror" id="price" name="price" required value="{{ old('price', $item->price) }}">
              @error('price')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="stock" class="form-label">Stok</label>
              <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" required value="{{ old('stock', $item->stock) }}">
              @error('stock')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                @if (old('category_id', $item->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label @error('image') is-invalid @enderror">Item Image</label>
              <input type="hidden" name="oldImage" value="{{ $item->image }}">
              @if ($item->image)
              <img src="{{ asset('storage/' . $item->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
              @else
              <img src="img-preview img-fluid mb-3 col-sm-5">
              @endif
              <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="desc" class="form-label">Deskripsi</label>
              @error('desc')
              <p class="text-danger">
                {{ $message }}
              </p>
              @enderror
              <input id="desc" type="hidden" name="desc" value="{{ old('desc', $item->desc) }}">
              <trix-editor input="desc"></trix-editor>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Item</button>
          </form>
    </div>

    <script>
        const name = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        name.addEventListener("change", function() {
            let preslug = name.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
          e.preventDefault();
        })

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