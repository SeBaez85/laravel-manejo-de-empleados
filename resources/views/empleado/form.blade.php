<a href="{{url('empleado/')}}" class="btn btn-success m-3"> Volver a Empleados</a>
@if (count($errors)>0)
    <div class="alert alert-danger"role="alert">
        <ul>
        @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="form-group">
        <h1> {{$modo}} empleado</h1>
        
        <label for="nombre">Nombre:</label>
        <input class="form-control m-2" type="text" name="nombre" value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}" id="nombre">
        
        <label for="apellido">Apellido:</label>
        <input class="form-control m-2" type="text" name="apellido" value="{{isset($empleado->apellido)?$empleado->apellido:old('apellido')}}" id="apellido">
        
        <label for="correo">Correo:</label>
        <input class="form-control m-2" type="text" name="correo" value="{{isset($empleado->correo)?$empleado->correo:old('correo')}}" id="correo">
        
        <label for="file">Foto:</label>
        
        @if (isset($empleado->foto))
        <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto}}" width="100" alt="">
        @endif
    </div>
    </br>
    <input class="m-2" type="file" value="" name="foto" id="foto">
    <br>
    <input class="btn btn-primary m-2" type="submit" value=" {{ $modo }}">
</div>