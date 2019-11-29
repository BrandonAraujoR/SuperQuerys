@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SuperQuery - Resultados</div>

                <div class="panel-body">
                        <div class="col-md-1"></div>
                        <div class="form-group col-md-10">
                            <label for="tablas">Resultados de la consulta en JSON</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control" readonly style="resize:none;">{{ $resultadoJson }}</textarea>
                        </div>
                        <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
