<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musica;
use App\Http\Requests\MusicaRequest;

class MusicaController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){

        $musicas = Musica::orderBy('rank', 'desc')->paginate(10);
        return view('musicas', compact('musicas'));
    }
    public function create(){

       $musica = Musica::all();

       return view('cadastrar', compact('musica'));
    }
    public function store(MusicaRequest $request){

        $musica = $request->all();
        Musica::create(['nome_musica' =>$musica['nome_musica'],
                       'nome_artista' => $musica['nome_artista'],
                       'rank'=> $musica['rank_musica']]);

        return redirect()->route('musicas');
    }
    public function edit($id){
        $musica = new Musica();
        $registro = $musica->find($id);
        // dd($registro);
        return view('edit', compact('registro'));
    }
    public function update(Request $request, $id){

        $musica = new Musica();
        $registro = $musica->find($id);

        $registro->nome_musica = $request->get('nome_musica');
        $registro->nome_artista = $request->get('nome_artista');
        $registro->rank = $request->get('rank_musica');
        $registro->save();

        //dd('Cheguei');
        return redirect()->route('musicas');
    }
    public function destroy($id){

        $this->middleware('auth');

        $musica = new Musica();
        $registro = $musica->find($id);
        $registro->delete();

        return redirect()->route('musicas');
    }
    public function search(Request $riquest){
      
        $musicas = new Musica();
        $search = $riquest->get('search');
        $musicas = Musica::where('nome_musica','like', "%{$search}%")->get();
        if(array_key_exists("musica", $musicas))
        {
            return 'deu certoß';
        }
        dd($musicas);
        return view('musicas', compact('musicas'));
    }

}
