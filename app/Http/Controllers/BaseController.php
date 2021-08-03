<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Exception;

class BaseController extends Controller
{
    protected $current_user;
    protected $current_module;
    protected $current_role;
    protected $current_template;

    protected $modulo;
    protected $fields;
    protected $fieldsForm;
    protected $fieldsFormDinamyc;
    protected $fks;
    protected $lastInserId;

    public function __construct()
    {
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function returnJSON($object, $code = 200){
        $response = ['status' => true, 'message' => 'Operação realizada com sucesso!'];
        if(!is_array($object)){
            $object = ['result' => $object];
        }
        $response = array_merge($response, $object);
        return response()->json($response, $code);
    }

    /**
    * tipo => [Padrao, Validacao, Excecao, Autenticacao)]
    */
    public function returnException($Exception){
        try {

            $result   = json_decode($Exception->getMessage());
            $tipo     = isset($result->tipo) ? $result->tipo : 'Padrao';
            $campo    = isset($result->campo) ? $result->campo : '';
            $mensagem = isset($result->mensagem) ? $result->mensagem : $Exception->getMessage();

            $code     = 200;
            $response = [
                'status' => false,
                'erro' => [
                    'tipo'     => $tipo,
                    'campo'    => $campo,
                    'mensagem' => $mensagem,
                ]
            ];

        } catch (Exception $e) {
            $code     = 500;
            $response = [
                'erro' => [
                    'tipo'     => 'Exception',
                    'campo'    => '',
                    'mensagem' => 'FALHA AO REALIZAR OPERAÇÃO',
                ]
            ];
        }

        return response()->json($response, $code);

    }

}
