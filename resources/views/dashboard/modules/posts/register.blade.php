@extends('dashboard.cruds.form')

@section('title', 'Registro de Publicación')

{{-- Content form --}}
@section('form')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header alert alert-danger">
            @if ($typeForm == 'create')
                <h5 class="card-title">Nueva Publicación</h5>

                @section('breadcrumbs')
                  {{ Breadcrumbs::render($options['route'].'.create') }}
                @endsection
            @else
                <h5>Editar registro: {{ @$row->title }}</h5>

                @section('breadcrumbs')
                  {{ Breadcrumbs::render('posts.edit', $row) }}
                @endsection
            @endif
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($typeForm == 'create')
            {!! Form::open(['route' => $options['route'].'.store', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data', 'id' => 'form']) !!}
        @else
            {!! Form::model($row, ['route' => [$options['route'].'.update', $row->id], 'method' => 'patch', 'autocomplete' => 'off', 'role' => 'form', 'enctype' => 'multipart/form-data',]) !!}
        @endif
        <div class="card-body">
            <div class="form-group row">
				<div class="col-lg-6">
				  <label>Título <span class="text-danger">*</span></label>
                    {!! Form::textarea("title", old('title', @$row->title), ["placeholder" => "Título", "class" => "form-control", "size" => "3x2", "id" => "accountant", "onpaste" => "charaterCounter();", "onkeyup" => "charaterCounter();"]) !!}
                    <span class="form-text text-muted" id="res">0 caractere/s</span>

                    @error('title')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
				</div>

                <div class="col-lg-6">
                    <label>Etiquetas <span class="text-danger">*</span></label>

                    <select name="tag_id[]" id="tags" class="form-control select2" id="kt_select2_3" multiple="" data-select2-id="kt_select2_3" tabindex="-1" aria-hidden="true">
                        @forelse ($tags as $value)
                            @if ($typeForm == 'create')
                                <option value="{{ $value->id }}" @if(old('value_id') == $value->id) selected @endif>
                            @else
                                <option value="{{ $value->id }}"  @foreach(@$row->tags as $var) {{ @$var->id == @$value->id ? 'selected': '' }} @endforeach>
                            @endif
                                {{ $value->name }}
                            </option>
                        @empty
                            <option value="">Sin registros</option>
                        @endforelse
                    </select>

                    @error('tag_id')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
				</div>
            </div>

            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Descripción <span class="text-danger">*</span></label>
                    {!! Form::textarea("description", old('description', @$row->description), ["placeholder" => "Título", "class" => "form-control", "size" => "3x2", "id" => "description", "onpaste" => "charaterCounter();", "onkeyup" => "charaterCounter();"]) !!}
                    <span class="form-text text-muted" id="res2">0 caractere/s</span>

                    @error('description')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            @if ($typeForm == "update")
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label>Estado <span class="text-danger">*</span></label>
                        <select class="form-control" name="status" id="status">
                            <option value="">===== Seleccione =====</option>
                            <option value="REVISION" @if ((old('status') == 'REVISION') or (@$row['status']=='REVISION') ) selected="selected" @endif>REVISION</option>
                            <option value="APROBADO" @if ((old('status') == 'APROBADO') or (@$row['status']=='APROBADO') ) selected="selected" @endif>APROBADO</option>
                            <option value="CANCELADO" @if ((old('status') == 'CANCELADO') or (@$row['status']=='CANCELADO') ) selected="selected" @endif>CANCELADO</option>
                        </select>

                        @error('status')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @else
                <input type="hidden" name="status" value="REVISION">
            @endif

            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Post <span class="text-danger">*</span></label>
                    {!! Form::textarea("post", old('post', @$row->post), ["class" => "form-control", "id" => "editor"]) !!}

                    @error('post')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>




            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Fecha de Publicación <span class="text-danger">*</span></label>
                    {!! Form::date("date", old('date', @$row->updated_at), ["placeholder" => "Fecha de Publicación", "class" => "form-control", "size" => "3x2", "id" => "date"]) !!}
                    @error('date')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>





            <div class="form-group row">
              <div class="col-lg-12">
                <label>Dirección a vídeo de Youtube</label>
                  {!! Form::text("youtube_video", old('youtube_video', @$row->youtube_video), [
                      "placeholder" => "https://www.youtube.com/watch?v=USDX0X-d588",
                      "class" => "form-control", "size" => "3x2",
                      "id" => "accountant"
                    ])
                  !!}

                  @error('youtube_video')
                      <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Imagen <span class="text-danger">*</span></label>
                    @if ($typeForm == 'update')
                        <img src="{{ asset('uploads/posts/'.@$row->image) }}" alt="">
                    @endif

                    {!! Form::file('image', NULL, ['class' => 'form-control']) !!}

                    @error('image')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a id="cancel" href="{{ route('posts.index') }}" class="btn btn-secondary" id="cancel"><i class="fas fa-reply"></i> Regresar</a>

            @if($typeForm == 'update')
                <button type="submit" class="btn btn-primary" id="send">
                    <i class="flaticon-refresh"></i>
                    Actualizar
                </button>
            @else
                <button  type="submit" class="btn btn-primary" id="send">
                    <i class="fas fa-save"></i>
                    Registrar
                </button>
            @endif
        </div>
        {!! Form::close() !!}
    </div>
    <!-- /.card -->
@endsection
