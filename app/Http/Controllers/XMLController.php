<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class XMLController extends Controller
{
    //
    public function xml(){
        $url = "/home/andres_ioi/Escritorio/IConocimiento/public/xml/empresas.xml";
        $xml = simplexml_load_file($url);
        $datos = array();
        foreach ($xml as $empresas) {
            foreach ($empresas as $key => $value) {
                $datos[$key] = $value;
            }
            $empresa = new Empresa();
            $empresa->boleta = $datos['boleta'];
            $empresa->infraestructura = $datos['infraestructura'];
            $empresa->bancos = $datos['bancos'];
            $empresa->insumo1 = $datos['insumo1'];
            $empresa->insumo2 = $datos['insumo2'];
            $empresa->en_proceso = $datos['en_proceso'];
            $empresa->mercancias = $datos['mercancias'];
            $empresa->clientes = $datos['clientes'];
            $empresa->hipotecas = $datos['hipotecas'];
            $empresa->proveedores = $datos['proveedores'];
            $empresa->capital_social = $datos['capital_social'];
            $empresa->materia = $datos['materia'];
            $empresa->industria = $datos['industria'];
            $empresa->save();
            
            $datos = array();
            
        }
        return redirect()->route('home');
    }
}
