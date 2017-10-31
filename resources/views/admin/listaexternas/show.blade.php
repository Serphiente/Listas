@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.listaexterna.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.producto')</th>
                            <td field-key='producto'>{{ $listaexterna->producto->nombre or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.proveedor')</th>
                            <td field-key='proveedor'>{{ $listaexterna->proveedor->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.marca')</th>
                            <td field-key='marca'>{{ $listaexterna->marca->nombre or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.codigo')</th>
                            <td field-key='codigo'>{{ $listaexterna->codigo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.vencimiento')</th>
                            <td field-key='vencimiento'>{{ $listaexterna->vencimiento }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.regisp')</th>
                            <td field-key='regisp'>{{ $listaexterna->regisp }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.preciounidad')</th>
                            <td field-key='preciounidad'>{{ $listaexterna->preciounidad }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.precio-caja')</th>
                            <td field-key='precio_caja'>{{ $listaexterna->precio_caja }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.stock')</th>
                            <td field-key='stock'>{{ $listaexterna->stock }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.listaexterna.fields.observaciones')</th>
                            <td field-key='observaciones'>{!! $listaexterna->observaciones !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.listaexternas.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
