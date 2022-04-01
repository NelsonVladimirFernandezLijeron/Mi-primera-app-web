Mostrar la lista de empleados 
b-table-header (Bootstrap v4 Snippets)

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            
      
        <tr>
            <td>{{$empleado->id}}</td>
            
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>Editar | Eliminar</td>
        </tr>
        @endforeach
    </tbody>
</table>