@extends('layouts.app')
@section('title', 'Index')

@section('content')
    <div class="container">
        <table class="table table-striped table-dark">
            <h1 style="text-align: center;" >Músicas</h1>
            <thead>
                <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">Musica</th>
                    <th  scope="col">Artista/Banda</th>
                    <th  scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($musicas as $musica)
                    
                    <tr>
                    <td scope="row">{{ $musica->rank }}</td>
                    <td scope="row">{{ $musica->nome_musica }}</td>
                    <td scope="row">{{ $musica->nome_artista }}</td>
                    <td scope="row"><a href="{{route('edit', $musica->id)}}"><img src="https://img.icons8.com/color/29/000000/edit-property.png"></a>
                        <a href="{{route('destroy', $musica->id)}}"><img src="https://img.icons8.com/ultraviolet/25/000000/trash.png"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{route('cadastrar')}} " class="btn btn-dark" role="button"> 
    <img src="https://img.icons8.com/ultraviolet/18/000000/music.png">
    Cadastrar</a>

   
    </div>
@endsection