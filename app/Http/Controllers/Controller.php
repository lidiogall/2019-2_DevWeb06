<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage(){
    	$variavel = "Mundo Nippon - Bem vindo ao site que tem tudo sobre o seu mundo nippon";

    	return view('welcome', ['title' => $variavel]);
    }

        public function fazerlogin(){
    	echo "Tela de login";
    }

        public function cultura(){
    	echo "Tela de cultura";
    }
}
