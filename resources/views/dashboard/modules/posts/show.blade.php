@extends('dashboard.cruds.form')

@section('title', $row->title)

{{-- Content form --}}
@section('form')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header alert alert-danger">
            <h5 class="card-title">Detalles de Publicación</h5>

            @section('breadcrumbs')
                {{ Breadcrumbs::render('posts.show', $row) }}
            @endsection
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        {!! Form::model($row, ['route' => [$options['route'].'.update', $row->id], 'method' => 'patch', 'autocomplete' => 'off']) !!}
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>Título </label>
                        {!! Form::textarea("title", old('title', @$row->title), ["placeholder" => "Título", "class" => "form-control", "size" => "3x2", "readonly"]) !!}
                    </div>

                    <div class="col-lg-6">
                        <label>Etiqueta </label> <br />
                        @foreach ($row->tags as $item)
                            <span>{{ $item->name }}</span> <br />
                        @endforeach
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <label>Descripción </label>
                        {!! Form::textarea("description", old('description', @$row->description), ["placeholder" => "Título", "class" => "form-control", "size" => "3x2", "readonly"]) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-12">
                        <label>Post </label>
                        {!! Form::textarea("post", old('post', @$row->post), ["class" => "form-control", "id" => "editor", "readonly"]) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>Imagen </label>
                        <img src="{{ asset('uploads/posts/'.$row->image) }}">
                    </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{ url('posts')}}" class="btn btn-secondary" id="cancel"><i class="fas fa-reply"></i> Regresar</a>
                @role('super-admin')
                    <a href="{{ route('posts.edit',$row->id)}}" class="btn btn-warning" id="send"><i class="fas fa-edit"></i> Editar</a>
                @endrole
            </div>
        {!! Form::close() !!}
    </div>
    <!-- /.card -->
@endsection
