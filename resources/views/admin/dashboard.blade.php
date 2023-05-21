@extends('layouts/admin')

@section('content')

<h1>Pagina di amministrazione</h1>

<hr>

<ul>
    <li><a href="{{route('admin.projects.index')}}">Mostra Progetti</a></li>
</ul>
    
@endsection