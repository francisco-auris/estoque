<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Refrigerante;

class RefrigeranteController extends Controller {

    public function getLista(){
        /**/
        /*$ref = new Refrigerante();
        return $ref->listAll();*/
        $lista = Refrigerante::paginate(10)->toArray();
        return $lista;
    }

    public function actionCreate( Request $request ){



    }

    public function teste(){
        $lista = Refrigerante::paginate(2)->toArray();
        dd($lista);
        return view('teste');
    }
    
}