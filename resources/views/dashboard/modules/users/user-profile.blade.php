@extends('dashboard.layouts.template')

@section('title', $row->name.' '.$row->surname)

@section('content')

    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title"> Perfil de Usuario</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">{{ $row->name.' '.$row->surname }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="kt-portlet kt-portlet--tabs">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab">Perfil</a>
                    </li>
                    {{--<li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">Cambiar Contraseña</a>
                    </li>--}}
                </ul>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                    {!! Form::model($row, ['url' => ['update-profile', $row->id], 'method' => 'patch', 'autocomplete' => 'off',  'enctype' => 'multipart/form-data']) !!}
                        <input type="hidden" value="{{ $row->id }}" name="user_id">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                                    <div class="kt-avatar__holder" style="background-image: url({{ asset('uploads/users/'.$row->avatar) }});">
                                                    </div>
                                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen"></i>
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    </label>
                                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                        <i class="fa fa-times"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    <input type="hidden" value="{{ Auth::user()->status }}" name="status">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
                                            <div class="col-lg-9 col-xl-6">
                                                {!! Form::text("name", old('name', @$row->name), ["Placeholder" => "Nombre", "class" => "form-control"]) !!}

                                                @error('name')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                           <label class="col-xl-3 col-lg-3 col-form-label">Apellido</label>
                                            <div class="col-lg-9 col-xl-6">
                                                {!! Form::text("surname", old('surname', @$row->surname), ["Placeholder" => "Apellido", "class" => "form-control"]) !!}

                                                @error('surname')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Correo Electronico</label>
                                            <div class="col-lg-9 col-xl-6">
                                                {!! Form::text("email", old('email', @$row->email), ["Placeholder" => "Correo Electronico", "class" => "form-control"]) !!}

                                                @error('email')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>

                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-xl-3"></div>
                                    <div class="col-lg-9 col-xl-6">
                                        <button type="submit" class="btn btn-label-brand btn-bold">Actualizar</button>
                                        <a href="{{ url('dashboard') }}" class="btn btn-clean btn-bold">Regresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>

                {{--<div class="tab-pane" id="kt_user_edit_tab_3" role="tabpanel">
                    {!! Form::model($row, ['url' => ['update-password', $row->id], 'method' => 'patch', 'autocomplete' => 'off']) !!}
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nueva Contraseña</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control" value="" placeholder="Nueva Contraseña">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>

                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-xl-3"></div>
                                    <div class="col-lg-9 col-xl-6">
                                        <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                                        <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>--}}
            </div>
        </div>
    </div>

@endsection
