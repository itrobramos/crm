@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card bg-secondary shadow">
                <div class="card-body">
                    <form>
                        <img alt="Image placeholder" src="{{$client->avatar}}">
                        <h6 class="heading-small text-muted mb-4">Información básica</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first_name">Nombre</label>
                                        <input type="text" id="input-first_name"
                                            class="form-control form-control-alternative"
                                            value="{{ isset($client->first_name)?$client->first_name:""}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last_name">Apellido</label>
                                        <input type="text" id="input-last_name"
                                            class="form-control form-control-alternative"
                                            value="{{ isset($client->last_name)?$client->last_name:""}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Contacto -->
                        <h6 class="heading-small text-muted mb-4">Información de Contacto</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-email">Email</label>
                                        <input type="text" id="input-email"
                                            class="form-control form-control-alternative"
                                            value="{{ isset($client->email)?$client->email:""}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-telefono">Telefono Fijo</label>
                                        <input type="text" id="input-telefono"
                                            class="form-control form-control-alternative"
                                            value="{{ isset($client->phone1)?$client->phone1:""}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-telefono2">Celular</label>
                                        <input type="text" id="input-telefono2"
                                            class="form-control form-control-alternative"
                                            value="{{ isset($client->phone2)?$client->phone2:""}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr class="my-4">

                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Información de Localización</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Dirección</label>
                                        <input id="input-address" class="form-control form-control-alternative"
                                            value="{{ isset($client->address)?$client->address:""}}" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-postal_code">CP</label>
                                        <input type="text" id="input-postal_code" class="form-control form-control-alternative"
                                         value="{{ isset($client->postal_code)?$client->postal_code:""}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-city">Ciudad</label>
                                        <input type="text" id="input-city" class="form-control form-control-alternative"
                                         value="{{ isset($client->city)?$client->city:""}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-country">País</label>
                                        <input type="text" id="input-country"
                                            class="form-control form-control-alternative" placeholder="Country"
                                            value="{{ isset($client->country)?$client->country:""}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Description -->
                        <div class="pl-lg-4">
                            <div class="form-group focused">
                                <label>Notas</label>
                                <textarea rows="4" class="form-control form-control-alternative"
                                   >{{ isset($client->notes)?$client->notes:""}}</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection