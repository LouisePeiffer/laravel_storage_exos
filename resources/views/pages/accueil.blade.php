<h1>Bienvenue sur la page Accueil :P</h1>

@foreach ($allFiles as $file)
    @if (Str::after($file->src, '.') == 'png' || Str::after($file->src,'.')== 'jpg')
        <img src="{{asset('storage/img/' . $file->src)}}" alt="" width="200px">
        <p>{{$file->src}}</p>
    @else
        <p>PAS IMAGE</p>
        <p>{{$image->src}}</p>
    @endif
@endforeach
<a href="{{route('admin')}}" class="btn btn-warning">Retour à l'admin</a>