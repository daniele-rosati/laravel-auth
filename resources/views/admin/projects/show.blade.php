@extends('layouts.admin')

@section('content')

    <h2> {{ $project->name }} </h2>

    <div>
        <strong>ID: </strong> {{ $project->id }}
    </div>

    <div>
        <strong> Slug: </strong> {{ $project-> slug}} 
    </div>

    <!-- @if( $project-> client_name) -->

    <div style="display: flex; justify-content: space-between;">
       <div> <strong> Created at: </strong> {{ $project->created_at }} </div> 
       <div> <strong > The last update was at: </strong> {{ $project->updated_at }} </div>
    </div>

    <div>
        <strong> Client Name: </strong> {{ $project-> client_name ? $project-> client_name : "Sorry the Client Name doesn't exist or is not available"}} 
    </div>
    <!-- @endif -->

    <div class="mt-4">
        <strong> Summary </strong>

        <div>
            {{ $project->summary ? $project->summary : "The summary doesn't exist"  }}
        </div>

    </div>

    <div class="mt-4">
        <h4>Action: </h4>

        <div>
            <a class="btn btn-primary" href="{{ route ('admin.projects.edit', ['project'=> $project->id] ) }}"> Edit</a>
        </div>
    </div>

@endsection