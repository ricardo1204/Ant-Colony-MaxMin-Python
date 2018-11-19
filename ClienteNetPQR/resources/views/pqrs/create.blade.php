@extends('layouts.app')

@section('content')

<div class="container">
    <section class="content-header">
        <h1>
            Crear PQR
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'pqrs.store']) !!}

                        @include('pqrs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
