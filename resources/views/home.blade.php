@extends('layouts.app')

@section('content')


    
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tablero</div>

                <div class="panel-body">
                    Estas logueado {{$user->name}}!
                    <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> ¡USCO VENTAS¡</a></li>
                    <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> Articulos</a></li>
                    <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i> Categoria de articulos</a></li>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
