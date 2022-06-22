@extends('layouts.main')

@section('container')
  <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
  <div class="row">
    <div class="col-lg-6 col-md-8 mb-3">
      <form action="{{ '/products/add' }}">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="e.g. Meja TV Minimalis Kekinian Ishana">
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" class="form-control" name="slug" id="slug" placeholder="e.g. meja-tv-minimalis-kekinian-ishana">
        </div>
        <div class="form-group">
          <label for="image_url">Image URL</label>
          <input type="text" class="form-control" name="image_url" id="image_url" placeholder="e.g. https://decorunic.id/wp-content/uploads/2021/10/2-7-scaled.jpg">
        </div>
        <div class="form-group">
          <label for="file">3D File</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="file" id="file" accept=".glb">
            <small id="fileHelp" class="form-text text-muted">Hanya menerima format file .glb</small>
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
        <a href="{{ '/products/list' }}" class="btn btn-secondary">&larr; Back</a>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
      <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
          fetch('/products/checkSlug?name=' + name.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
        });
      </script>
    </div>
  </div>
@endsection