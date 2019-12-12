@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Nombre cliente</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">Información básica</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Nombre</label>
                                        <input type="text" id="input-username"
                                            class="form-control form-control-alternative" placeholder="Username"
                                            value="lucky.jesse">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Apellido</label>
                                        <input type="email" id="input-email"
                                            class="form-control form-control-alternative"
                                            placeholder="jesse@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">Email</label>
                                        <input type="text" id="input-first-name"
                                            class="form-control form-control-alternative" placeholder="First name"
                                            value="Lucky">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Contacto -->
                        <h6 class="heading-small text-muted mb-4">Información de Contacto</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Telefono fijo</label>
                                        <input id="input-address" class="form-control form-control-alternative"
                                            placeholder="Home Address"
                                            value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-city">Celular</label>
                                        <input type="text" id="input-city" class="form-control form-control-alternative"
                                            placeholder="City" value="New York">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-country">Email</label>
                                        <input type="text" id="input-country"
                                            class="form-control form-control-alternative" placeholder="Country"
                                            value="United States">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">

                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Información de Localización</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Dirección</label>
                                        <input id="input-address" class="form-control form-control-alternative"
                                            placeholder="Home Address"
                                            value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-city">Ciudad</label>
                                        <input type="text" id="input-city" class="form-control form-control-alternative"
                                            placeholder="City" value="New York">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-country">CP</label>
                                        <input type="text" id="input-country"
                                            class="form-control form-control-alternative" placeholder="Country"
                                            value="United States">
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
                                    placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection