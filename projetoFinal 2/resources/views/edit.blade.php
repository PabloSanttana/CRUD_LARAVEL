@extends('layouts.app')
@section('title', 'cadastrar')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            
        <form action="{{ route('update', $registro->id) }}" method="POST" >
                        {{csrf_field() }}
                        @method('put')

                    <div class="container form-group" >
                        <h2>Atualizar Musica</h2>

                        <div class="form-group" >
                            <label  >Nome da Musica</label>
                            <input type="text" class="form-control" value="{{$registro->nome_musica}}" name="nome_musica"  placeholder="Nome da Musica" >
                        </div>

                        <div class="form-group">
                            <label >Nome do Artista</label>
                            <input type="text" class="form-control" value="{{$registro->nome_artista}}" name="nome_artista"  placeholder="Nome do Artista">
                        </div>

                        <div class="form-group">
                            <label >Rank da Musica</label>
                            <input type="number" class="form-control" value="{{$registro->rank}}" name="rank_musica"  placeholder="rank">
                        </div>
                            <button class="btn btn-dark" type="submit">
                            <img style="padding-bottom: 3px;" src="https://img.icons8.com/officel/20/000000/save-as.png">
                                Atualizar</button>
                    </div> 
        </form>
        
        
    
@endsection
    
