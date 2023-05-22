@extends('layouts.admin')

@section('content')

<h1>Modifica il progetto</h1>

<form action="{{route('admin.projects.update', $project)}}" method="POST">

    @csrf

    @method('PUT')

    <div class="mb-3">
        <label for="">Titolo</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title') ?? $project->title}}">
        @error('title')

        <div class="invalid-feedback">
            {{$message}}
        </div>
            
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Contenuto</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{old('content') ?? $project->content}}</textarea>

        @error('content')

        <div class="invalid-feedback">
            {{$message}}
        </div>
            
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Modifica</button>
</form>
    
@endsection