<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
// referenciar as musicas 
{
    protected $table = 'musicas'; 
    
    protected $fillable =[ 
        'nome_musica', 'nome_artista', 'rank'
    ];

}
