@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
    
<div class="alert alert-primary" role="alert">
{{Session::get('Mensaje')}}
</div>
    
@endif

<a href="{{url('productos/create')}}" class="btn btn-success" >Agregar Productos</a>
</br>
</br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>No.</th>
            <th>Código</th>
            <th>Descripción</th>
            <th>Precio Compra</th>
            <th>Precio Venta</th>
            <th>Ganancia</th>
            <th>Existencia</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($productos as $productos)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$productos->Codigo}}</td>
            <td>{{$productos->Descripcion}}</td>
            <td>{{$productos->Precio_compra}}</td>
            <td>{{$productos->Precio_venta}}</td>
            <td>{{$productos->Ganancia}}</td>
            <td>{{$productos->Existencia}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{ url('/productos/'.$productos->id.'/edit') }}">
            Editar
            </a>
            
            <form method="post" action="{{ url('/productos/'.$productos->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

</div>
@endsection