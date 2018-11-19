<table class="table table-responsive" id="pqrs-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Motivo</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pqrs as $pqr)
        <tr>
            <td>{!! $pqr->nombre !!}</td>
            <td>{!! $pqr->apellido !!}</td>
            <td>{!! $pqr->cedula !!}</td>
            <td>{!! $pqr->correo !!}</td>
            <td>{!! $pqr->direccion !!}</td>
            <td>{!! $pqr->telefono !!}</td>
            <td>{!! $pqr->motivo !!}</td>
            <td>{!! $pqr->description !!}</td>
            <td>
                {!! Form::open(['route' => ['pqrs.destroy', $pqr->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pqrs.show', [$pqr->id]) !!}" class='btn btn-default'><i>VER</i></a>
                    <a href="{!! route('pqrs.edit', [$pqr->id]) !!}" class='btn btn-default'><i>EDITAR</i></a>
                    {!! Form::button('<i>BORRAR</i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>