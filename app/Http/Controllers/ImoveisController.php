<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class ImoveisController extends Controller
{
    public function index(){

        $imoveis = Imovel::all();

        return view('welcome', ['imoveis' => $imoveis]);

    }

    public function create(){
        
        return view('imoveis.create');
    }
}
