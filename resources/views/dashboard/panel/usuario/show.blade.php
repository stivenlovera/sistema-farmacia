@extends('dashboard.layout.layout')
@push('css-header')

@endpush
@section('content')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="{{ route('show.venta') }}"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Informacion de usuario</h6>
                    <a href="#" class="ms-text-primary"></a>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom001">Nombres</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom001"
                                        placeholder="escriba nombres" value="{{$persona->nombre}}" required disabled>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Apellidos</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom002"
                                        placeholder="escriba apellidos" value="{{$persona->apellido}}" disabled required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Fecha de nacimiento</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom012"
                                        placeholder="fecha de nacimiento" value="{{$persona->fechaNac}}" disabled required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom013">CI</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom013"
                                        placeholder="escriba nombres" value="{{$persona->CI}}" required disabled>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom003">Dirección de correo electrónico</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="validationCustom003"
                                        placeholder="correo electrónico" value="{{$persona->correoPersonal}}" disabled required>

                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom010">Telefono</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom010"
                                        placeholder="telefono" value="{{$persona->telefono}}" disabled required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom009">Celular</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom009"
                                        placeholder="celular" value="{{$persona->celular}}" disabled required>

                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 mb-2">
                                <label>Dirrecion</label>
                                <div class="input-group">
                                    <textarea class="form-control"  id="exampleTextarea" disabled rows="3">{{$persona->dirrecion}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--button class="btn btn-warning mt-4 d-inline w-20" type="submit">Cancelar</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Modificar</button-->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection