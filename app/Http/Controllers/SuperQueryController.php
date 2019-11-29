<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SuperQueryController extends Controller
{
    //
    public function generarSuperQuery(){
        return view('superQuery.generar');
    }
    public function postGenerarSuperQuery(Request $request){
        $superQueryJson= "{\"jproba\":{\"nbarbol\":".$request->tabla1.", \"frecuencia\":\"select count(*) from " . $request->tabla1.";\",
            {\"nbdimension\":\"".$request->tabla2."\",\"select ".$request->tabla2.", count(*)/(select count(*)from ".$request->tabla1.") from ".$request->tabla1." where ".$request->tabla2." in(select distinct ".$request->tabla2." from ".$request->tabla1.") group by ".$request->tabla2.";\",
            {\"nbdimension2\":\"".$request->tabla3."\",\"select ".$request->tabla3.",".$request->tabla2.", count(*)/(select count(*)from ".$request->tabla1.") from ".$request->tabla1." where ".$request->tabla2." in(select distinct ".$request->tabla2." from ".$request->tabla1.") and ".$request->tabla3." in(select distinct ".$request->tabla3." from ".$request->tabla1.") group by ".$request->tabla2.",".$request->tabla3." order by  ".$request->tabla2.";\"}}";
        
        $sqFrecuencia = "select count(*) from " . $request->tabla1.";";
        $sqimension1 = "select ".$request->tabla2.", count(*)/(select count(*)from ".$request->tabla1.") from ".$request->tabla1." where ".$request->tabla2." in(select distinct ".$request->tabla2." from ".$request->tabla1.") group by ".$request->tabla2.";";
        $sqimension2 = "select ".$request->tabla3.",".$request->tabla2.", count(*)/(select count(*)from ".$request->tabla1.") from ".$request->tabla1." where ".$request->tabla2." in(select distinct ".$request->tabla2." from ".$request->tabla1.") and ".$request->tabla3." in(select distinct ".$request->tabla3." from ".$request->tabla1.") group by ".$request->tabla2.",".$request->tabla3." order by  ".$request->tabla2.";";
                
        return view('superQuery.querys',compact('superQueryJson','sqFrecuencia','sqimension1','sqimension2','request'));
    }


    public function postRealizarSuperQuery(Request $request){
        
        $consulta = DB::select($request->consulta);
        $resultadoJson = json_encode($consulta);

        return view('superQuery.result',compact('resultadoJson'));
    }
}
