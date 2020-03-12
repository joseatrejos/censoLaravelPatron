<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioApiController extends Controller
{
    public function usuario(Request $request){
        return $request -> user();
    }

    public function suma(Request $request){
        $operando1 = $request -> input('operando_1');
        $operando2 = $request -> input('operando_2');

        // Declaración del Arreglo para regresar datos en JSON
        $respuesta = array();
        
        // Validación de los operandos
        if($operando1 == NULL && $operando2 == NULL) {
            $respuesta['exito'] = false;
            $respuesta['error'] = "Faltan 2 operadores";
            return $respuesta;
        }
        else if($operando1 == NULL || $operando2 == NULL) {
            $respuesta['exito'] = false;
            $respuesta['error'] = "Falta 1 operador";
            return $respuesta;
        }

        $suma = $operando1 + $operando2;

        $respuesta['exito'] = true;
        $respuesta['suma'] = $suma;
        $respuesta['1'] = "1";
        return $respuesta;
    }
}