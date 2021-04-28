@extends('layouts.index')

@section('content')
    <h1>Bienvenue sur la page Admin</h1>
    @foreach ($allFiles as $file)
        <img src={{asset('storage/img/' . $file->src)}} alt="" width="200px">
        <p>{{$file->src}}</p>
        <form action="{{route('destroy.file', $file->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    @endforeach
    <a href="{{route('create.file')}}" class="btn btn-primary">Ajouter un fichier</a>
@endsection