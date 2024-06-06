@extends('layouts.admin')

@section ('content')

<h2>crea un nuovo post</h2>

<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="mb-3">
    <label for="client_name" class="form-label">Client Name</label>
    <input type="text" class="form-control" id="client_name" name="client_name">
  </div>

  <div class="mb-3">
  <label for="summary" class="form-label">Content</label>
  <textarea class="form-control" id="summary" rows="10" name="summary"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection 