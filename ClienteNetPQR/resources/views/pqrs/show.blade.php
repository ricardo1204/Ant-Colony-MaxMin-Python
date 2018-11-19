@extends('layouts.app')

@section('content')

<div class="container">
    <section class="content-header">
        <h1>
            Revisión de PQR <hr>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pqrs.show_fields')
                    <a href="{!! route('pqrs.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
