@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Generar SuperQuery</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('generar.SQ.post') }}">
                        {{ csrf_field() }}
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <label for="tablas">Seleccione las tablas de la BD</label>
                            <select name="tabla1" id="" class="form-control">
                                <option value="">Seleccione una tabla</option>
                                <option value="empresas">Empresas</option>
                                <option value="materia">Materias</option>
                                <option value="industria">Industrias</option>

                            </select>
                            <br>
                            <select name="tabla2" id="" class="form-control">
                                    <option value="">Seleccione una tabla</option>
                                    <option value="empresas">Empresas</option>
                                    <option value="materia">Materias</option>
                                    <option value="industria">Industrias</option>
                            </select>
                            <br>
                            <select name="tabla3" id="" class="form-control">
                                    <option value="">Seleccione una tabla</option>
                                    <option value="empresas">Empresas</option>
                                    <option value="materia">Materias</option>
                                    <option value="industria">Industrias</option>
                            </select>
                        </div>
                        <div class="col-md-4"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Generar SuperQuery
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
