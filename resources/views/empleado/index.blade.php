@extends('layouts.app')
@section('content')
@if (Session::has('mensaje'))
<div class="container">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{Session::get('mensaje')}} </strong> (Por favor cierra este alert ->)
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>    
@endif


<div class="container">
    <a href="{{url('empleado/create')}}" class="btn btn-success"> Registrar nuevo empleado</a>
    </br>
    </br>
    <div
        class="table-responsive">
        <table
            class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado )
                <tr class="">
                    <td> {{$empleado->id}} </td>
                    <td>
                        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto}}" width="100" alt="">
                    </td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->correo}}</td>
                    <td>
                        <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>
                        <form action=" {{url('/empleado/'.$empleado->id)}} " class="d-inline" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro que desea borrar?')" value="Eliminar">
                        </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $empleados->links() !!}
    </div>
</div>
@endsection