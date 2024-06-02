@extends('layouts.admin')

@section('content')

    <h2>Progetti</h2>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Client Name</th>
      <!-- <th scope="col">Summary</th> -->
      <th scope="col">Create at</th>
      <th scope="col">Update at</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)

    <tr>

      <td> {{ $project->id }}  </td>
      <td> {{ $project->name }} </td>
      <td> {{ $project->client_name }} </td>
      <!-- <td> {{ $project->summary }} </td> -->
      <td> {{ $project-> created_at}} </td>
      <td> {{ $project->updated_at }} </td>
      <td> 
        <div>
            <a href="{{ route ('admin.projects.show', ['project'=> $project->id] ) }}">View more</a>
        </div>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection