<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'cod_categoria');
    }

    public function formato_midia(){
        return $this->belongsTo(Formato_midia::class, 'id_formato');
    }

}
