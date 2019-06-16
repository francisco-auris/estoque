<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
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

        try {

            $request->validate([
                'marca' => 'required|string',
                'sabor' => 'required|string'
            ]);

            $model = new Refrigerante();
            //joga valores para modelagem no banco
            $model->marca = $request->input('marca');
            $model->sabor = $request->input('sabor');
            $model->litragem = $request->input('litragem');
            $model->valor = $request->input('valor');
            $model->quantidade = $request->input('quantidade');
            $model->tipo = $request->input('tipo');

            $model->save();

            return response()->json($request->input());

        }
        catch( Exception $e ){
            report($e);
            return false;
        }

    }

    public function teste(){
        $lista = Refrigerante::paginate(2)->toArray();
        dd($lista);
        return view('teste');
    }
    
}