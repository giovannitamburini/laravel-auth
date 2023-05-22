@extends('layouts.admin')

@section('content')

<div class="container">
    
    <table class="table table-striped mb-5">
        <thead>
            <th>
                Titolo
            </th>
            <th>
                Contenuto
            </th>
        <th>
            Slug
        </th>
        <th>
            Comandi
        </th>
    </thead>
    
    <tbody>
        
        {{-- ciclo per ogni project --}}
        @foreach ($projects as $project)
            
        <tr>
            <td>{{$project->title}}</td>
            <td>{{$project->content}}</td>
            <td>{{$project->slug}}</td>
            <td>
                <a href="{{route('admin.projects.show', $project->slug)}}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </td>
        </tr>
        
        @endforeach

    </tbody>
</table>

<div class="d-flex justify-content-around mb-5">
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">
        Aggiungi un progetto
    </a>
</div>

</div>

@endsection