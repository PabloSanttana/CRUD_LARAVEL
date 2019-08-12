@extends('layouts.app')
@section('title', 'cadastrar')
@section('content')

            
        <form action="{{route('salvar')}}" method="POST" class="needs-validation ">
            {{csrf_field() }}

                    <div class="container form-group" >
                    @if (isset($errors) && count($errors) >0)
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                   <p>{{ $error }}</p>
                                    @endforeach
                            </ul>
                        </div>
                    @endif
                    <h2>Cadastrar Musica</h2>
        
                        <div class="form-group" >
                        <label  >Nome da Musica</label>
                        <input type="text" class="form-control"  name="nome_musica"  placeholder="Nome da Musica" value="{{ old('nome_musica') }}">
                               
                        </div>
                        <div class="form-group">
                        <label >Nome do Artista</label>
                        <input type="text" class="form-control" name="nome_artista"  placeholder="Nome do Artista" value="{{ old('nome_artista') }}">
                       
                        </div>
                        <div class="form-group">
                         <label >Rank da Musica</label>
                        <input type="number" class="form-control" name="rank_musica"  placeholder="rank" value="{{ old('ank_musica') }}" required>
                               
                        </div>
                            <button class="btn btn-dark" type="submit">
                            <img style="padding-bottom: 3px;" src="https://img.icons8.com/officel/20/000000/save-as.png">
                                Salvar</button>
                
                        </div> 

                  

        </form>
        
        
    
@endsection
    
