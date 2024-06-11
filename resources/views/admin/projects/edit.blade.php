@extends('layouts.admin')

@section ('content')

<h2>modifica il post: {{ $project->name }}</h2>

<form action="{{ route('admin.projects.update', ['project' => $project -> slug]) }}" method="POST">
    @csrf
    @method('PUT')

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
  </div>

  <div class="mb-3">
    <label for="client_name" class="form-label">Client Name</label>
    <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name', $project->client_name) }}">
  </div>

  <div class="mb-3">
  <label for="summary" class="form-label">Content</label>
  <textarea class="form-control" id="summary" rows="10" name="summary" >
    {{ old('summary', $project->summary) }}
  </textarea>
</div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection 