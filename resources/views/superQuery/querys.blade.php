@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SuperQuery - Querys</div>

                <div class="panel-body">
                        <div class="col-md-1"></div>
                        <div class="form-group col-md-10">
                            <label for="tablas">SuperQuery en Json</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control" readonly style="resize:none;">{{ $superQueryJson }}</textarea>
                            <br>
                            <label for="tablas">SuperQuery de Frecuencia del narbol: {{$request->tabla1}}</label>
                            <input type="text" class="form-control" readonly value="{{$sqFrecuencia}}">
                            <br>
                            <label for="tablas">SuperQuery del nbdimension1: {{$request->tabla2}}</label>
                            <textarea name="" id="" cols="30" rows="2" class="form-control" readonly style="resize:none;">{{ $sqimension1 }}</textarea>
                            <br>
                            <label for="tablas">SuperQuery del nbdimension2: {{$request->tabla3}}</label>
                            <textarea name="" id="" cols="30" rows="4" class="form-control" readonly style="resize:none;">{{ $sqimension2 }}</textarea>
                            <br>
                            <form action="{{ route('realizar.consulta') }}" method="post">
                                {{ csrf_field() }}
                                <label for="">Realizar Consulta</label>
                                <br>
                                <textarea name="consulta" id="" cols="30" rows="4" style="resize:none;" class="form-control">

                                </textarea>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                        Generar Consulta
                                </button>
                            </form>
                        </div>
                        <div class="col-md-1"></div>


                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
