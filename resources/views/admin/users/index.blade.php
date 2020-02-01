@extends('layout.app')

@section('title','Usuarios')

@section('main-title','Usuarios')
@section('subtitle','Listado Usuarios')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }} {{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td> 
                        <a  class="btn text-warning" href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Editar Usuario"> 
                            <i class="fa fa-edit"></i>
                        </a> 
                        <a class="btn text-danger" href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dar de baja"> 
                            <i class="fa fa-trash"></i>
                        </a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection