@extends('dashboard.layouts.template')

@section('title', 'Registro de Etiquetas')

{{-- @section('breadcrumbs')
    {{ Breadcrumbs::render('roles.index') }}
@endsection --}}

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-header alert alert-danger">
                    <div class="row">
                        <h5 class="m-0">Registro de Etiquetas <b>(</b> <a href="{{ Route($options['route'].'.create') }}" title="Registrar parroquia">
                                <span>Registrar</span>
                            </a><b>)</b></h5>
                    </div>
                </div>

                <div class="card-body">
                    <table id="tTags" class="table table-bordered table-striped datatables" style="text-align: center">
                        <thead>
                        <tr>
                            <th width="40%">Nombre</th>
                            <th width="40%">Slug</th>
                            <th width="10%"></th>
                        </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection