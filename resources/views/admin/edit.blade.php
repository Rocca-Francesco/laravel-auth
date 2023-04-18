@extends('layouts.app')

@section('content')

<div class="container">
  <div class="d-flex justify-content-between align-items-center mt-4">
    <h2 class="fs-4 text-secondary">
    Edit Project {{$project->title}}
    </h2>
    <div>
      <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista</a>
    </div>
  </div>

  <form action="{{route('admin.projects.update', $project)}}" method="POST">
    <div class="mb-3">
      @method('PUT')
      @csrf

      <label for="title" class="form-label">Project Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
    </div>

    <div class="row row-cols-2">
      <div class="mb-3">
        <label for="lenguages" class="form-label">Types of lenguages</label>
        <input type="text" class="form-control" id="lenguages" name="lenguages" value="{{ $project->lenguages }}">
      </div>
      <div class="mb-3">
        <label for="link" class="form-label">Link to the project</label>
        <input type="url" class="form-control" id="link" name="link" value="{{ $project->link }}">
      </div>
    </div>
    <input type="submit" class="btn btn-success" value="Save">
  </form>
</div>
	
@endsection