@extends('layouts.base')
@section('contenido')
    <div class="container-tittle">
        <h3>Bienvenido, Calcula el precio de tu pedido</h3>
    </div>
    <div class="container-card">
        <div class="card">
            <div class="container-form">
                <form class="row g-3">
                    <div class="col-12">
                        <label for="" class="form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="" name="nombres"
                            placeholder="Ingrese su nombre completo con apellidos...">
                    </div>
                    <div class="col-md-7">
                        <label for="" class="form-label">Correo Electronico:</label>
                        <input type="email" class="form-control" id="" name="email"
                            placeholder="Ingrese su correo electrónico...">
                    </div>
                    <div class="col-md-5">
                        <label for="" class="form-label">Numero de Teléfono:</label>
                        <input type="text" class="form-control" id="" name="telefono"
                            placeholder="Ingrese su numero de telefono...">
                    </div>
                    <div class="col-7">
                        <label for="" class="form-label">Calle:</label>
                        <input type="text" class="form-control" id="" name="calle"
                        placeholder="Ingrese el nombre de la calle en que vive...">
                    </div>
                    <div class="col-5">
                        <label for="" class="form-label">N° de Calle:</label>
                        <input type="text" class="form-control" id="" name="num_calle"
                            placeholder="Ingrese el numero de la calle...">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Colonia:</label>
                        <input type="text" class="form-control" id="" name="colonia">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Ciudad:</label>
                        <input type="text" class="form-control" id="" name="ciudad">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Municipio:</label>
                        <input type="text" class="form-control" id="" name="municipio">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Ciudad:</label>
                        <input type="text" class="form-control" id="" name="ciudad">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Municipio:</label>
                        <input type="text" class="form-control" id="" name="municipio">
                    </div>
                    <div class="col-12">
                        <center>
                            <button type="submit" class="btn btn-primary">Calcular Envío</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
