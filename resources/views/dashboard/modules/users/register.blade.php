@extends('dashboard.cruds.form')

@section('title', 'Registro de Usuarios')

@section('form')
    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
            <div class="kt-portlet__head alert alert-danger">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    @if ($typeForm == 'create')
                        Registro de Usuarios

                        @section('breadcrumbs')
                            {{ Breadcrumbs::render('users.create') }}
                        @endsection
                    @else
                        Editar usuario: {{ @$row->email }}

                        @section('breadcrumbs')
                            {{ Breadcrumbs::render('users.edit', $row) }}
                        @endsection
                    @endif
                    </h3>
                </div>
            </div>
        <!--begin::Form-->
            @if ($typeForm == 'create')
                {!! Form::open(['route' => $options['route'].'.store', 'class' => 'kt-form kt-form--label-right', 'autocomplete' => 'off', 'enctype' => 'multipart/form-data']) !!}
            @else
                {!! Form::model($row, ['route' => [$options['route'].'.update', $row->id], 'method' => 'patch', 'autocomplete' => 'off', 'class' => 'kt-form kt-form--label-right', 'enctype' => 'multipart/form-data']) !!}
            @endif
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>Nombre <span class="text-danger">*</span></label>
                        {!! Form::text("name", old('name', @$row->name), ["Placeholder" => "Nombre", "class" => "form-control", "onkeyup" => "upperCase(this);"]) !!}

                        @error('name')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label>Apellido <span class="text-danger">*</span></label>
                        {!! Form::text("surname", old('surname', @$row->surname), ["Placeholder" => "Apellido", "class" => "form-control", "onkeyup" => "upperCase(this);"]) !!}

                        @error('surname')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>Correo Electrónico <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                            {!! Form::text("email", old('email', @$row->email), ["Placeholder" => "Correo Electrónico", "class" => "form-control", "aria-describedby" => "basic-addon1"]) !!}
                        </div>

                        @error('email')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label>Rol <span class="text-danger">*</span></label>
                        <select name="role" class="form-control">
                            <option value="">===== Seleccione un rol =====</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" @if(old('role_id') == $role->id OR @$roleId == @$role->id) selected @endif >
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('role')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label>Contraseña <span class="text-danger">*</span></label>
                        {!! Form::password("password", [
                            "Placeholder" => "Contraseña",
                            "class" => "form-control",
                            "type" => "password"
                        ]) !!}

                        @error('password')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ route('users.index') }}" class="btn btn-secondary" id="cancel"><i class="fas fa-reply"></i> Regresar</a>

                            @if($typeForm == 'update')
                                <button type="submit" class="btn btn-primary">
                                    <i class="flaticon-refresh"></i>
                                    Actualizar
                                </button>
                            @else
                                <button  type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                    Registrar
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
@endsection
