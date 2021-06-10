@extends('dashboard.layouts.template')

@section('title', 'Registro de Articulos')

@section('breadcrumbs')
    {{ Breadcrumbs::render('posts.index') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header alert alert-danger">
                <div class="row">
                    <h5 class="m-0">Registro de Articulos <b>(</b> <a href="{{ Route($options['route'].'.create') }}" title="Registrar parroquia">
                            <span>Nuevo</span>
                        </a><b>)</b></h5>
                </div>
            </div>

            <div class="card-body">
                @role('super-admin')
                    <table id="tPosts" class="table table-bordered table-striped datatables" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="15%">Título</th>
                                <th width="25%">Descripción</th>
                                <th width="15%">Fecha</th>
                                <th width="20%">Autor</th>
                                <th width="15%">Estado</th>
                                <th width="5%"></th>
                                <th width="5%"></th>
                            </tr>
                        </thead>
                    </table>
                @else
                    <table class="table table-bordered table-striped datatables" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="60%">Título</th>
                                <th width="15%">Fecha</th>
                                <th width="15%">Estado</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                            @forelse ($articles as $item)
                                <tr>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        {{ $item->created_at }}
                                    </td>
                                    <td>
                                        {{ $item->status }}
                                    </td>
                                    <td>
                                        <a href="{{ route('posts.show',$item->id) }}" class="btn btn-info"><i class='flaticon-eye'></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        Sin registros!!
                                    </td>
                                </tr>
                            @endforelse
                    </table>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
