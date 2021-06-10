@extends('dashboard.layouts.template')

@section('title', 'Roles')

{{-- @section('breadcrumbs')
    {{ Breadcrumbs::render('roles.index') }}
@endsection --}}

@section('content')

  <div class="row" style="margin-top: 20px;">
    <div class="col-lg-12">
      <div class="card card-primary card-outline">
        <div class="card-header alert alert-danger">
          <div class="row">
            <h5 class="m-0">Roles de Usuarios <b>(</b> <a href="{{ Route($options['route'].'.create') }}">
              <span>Registrar</span>
            </a><b>)</b></h5>
          </div>
        </div>

        <div class="card-body">
          <table class="table table-bordered table-striped datatables" style="text-align: center">
            <tr>
              <th width="90%">Nombre</th>
              <th width="10%"></th>
            </tr>
            @forelse ($roles as $key => $role)
              <tr>
                <td>{{ $role->name }}</td>
                <td>
                  <a title="Editar rol" class="btn btn-warning" href="{{ route('roles.edit',$role->id) }}"><i class='flaticon-edit'></i></a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3">No hay registros asociados</td>
              </tr>
            @endforelse
          </table>
        </div>

      </div>
    </div>
  </div>

@endsection
