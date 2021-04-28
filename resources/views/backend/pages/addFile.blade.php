@extends('layouts.index')

@section('content')
    <form action="{{route('store.file')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <h2>Add File youhou</h2>
        <div class="mt-4 form-group">
            <label for="img">Votre file</label>
            <input type="file" name="img" class="form-control-file" id="img">
        </div>
        <button class="btn btn-primary mt-4" type="submit">Upload</button>
    </form>
@endsection
