<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Models\Categoria;

class UserController extends Controller
{
    public function dash(){
        $jogos = Jogo::with('categoria','formato_midia')->get();
        return view("user.dash", ['jogos' => $jogos]);
    }
}
