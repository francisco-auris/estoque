<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;

class ProdutoController extends Controller
{
    //
    public function getLista(){
        $lista = Produto::paginate(10)->toArray();
        return $lista;
    }

    public function actionUpdate( Request $request ){

        try {

            $request->validate([
                'marca' => 'required|string',
                'sabor' => 'required|string'
            ]);
            
            $action = DB::table('produtos')->where('id', $request->input('id'))->update( $request->input() );

            return response()->json($action);
            
        }
        catch( Exception $e ){
            report($e);
            return false;
        }


    }

    public function actionCreate( Request $request ){

        try {

            $request->validate([
                'marca' => 'required|string',
                'sabor' => 'required|string'
            ]);

            if( $this->vefProduto( $request->input('marca'), $request->input('litragem') ) ){
                return "exist";
            }
            else {
                $model = new Produto();
                //joga valores para modelagem no banco
                $model->marca = strtoupper($request->input('marca'));
                $model->sabor = $request->input('sabor');
                $model->litragem = $request->input('litragem');
                $model->valor = $request->input('valor');
                $model->quantidade = $request->input('quantidade');
                $model->tipo = $request->input('tipo');

                $action = $model->save();

                return response()->json($action);
            }

        }
        catch( Exception $e ){
            report($e);
            return false;
        }

    }

    private function vefProduto( $marca, $litro ){
        $marca = strtoupper( $marca );
        $teste = DB::table('produtos')->where(['marca'=>$marca,'litragem'=>$litro])->count();
        if( $teste > 0 ){
            return true;
        }
        else {
            return false;
        }
    }



}
