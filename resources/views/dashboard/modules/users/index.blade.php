@extends('dashboard.layouts.template')

@section('title', 'Registro de Usuarios')

@section('breadcrumbs')
    {{ Breadcrumbs::render('users.index') }}
@endsection

@section('content')

  <div class="row" style="margin-top: 20px;">
    <div class="col-lg-12">
      <div class="card card-primary card-outline">
        <div class="card-header alert alert-danger">
          <div class="row">
            <h5 class="m-0">Control de Usuarios <b>(</b> <a href="{{ Route($options['route'].'.create') }}" title="Registrar usuario">
              <span>Registrar</span>
            </a><b>)</b></h5>
          </div>
        </div>

        <div class="card-body">
          <table id="tUsers" class="table table-bordered table-striped datatables" style="text-align: center">
            <thead>
              <tr>
                <th width="25%">Nombre</th>
                <th width="25%">Apellido</th>
                <th width="40%">Correo Electronico</th>
                <th width="10%"></th>
              </tr>
            </thead>
          </table>
        </div>

      </div>
    </div>
  </div>

@endsection
