@extends('adminlte::page')

@section('content')
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Typepresentation {{ $typepresentation->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/typepresentation') }}" title="{{ trans('adminlte::adminlte.Back') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Back') }}</button></a>
                        <a href="{{ url('/admin/typepresentation/' . $typepresentation->id . '/edit') }}" title="{{ trans('adminlte::adminlte.Edit') }} Typepresentation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Edit') }}</button></a>

                        <form method="POST" action="{{ url('admin/typepresentation' . '/' . $typepresentation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="{{ trans('adminlte::adminlte.Delete') }} Typepresentation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> {{ trans('adminlte::adminlte.Delete') }}</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $typepresentation->id }}</td>
                                    </tr>
                                    <tr><th> Pl Presentation </th><td> {{ $typepresentation->pl_presentation }} </td></tr><tr><th> Detall </th><td> {{ $typepresentation->detall }} </td></tr><tr><th> Active </th><td> {{ $typepresentation->active }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
@endsection
