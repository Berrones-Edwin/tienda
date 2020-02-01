@extends('layout.app')

@section('title','Productos')

@section('main-title','Productos')

@section('subtitle')
    Lista Productos
    <a href=" {{ route('products.create') }} " class="btn btn-sm btn-primary">
        Agregar
    </a>
@endsection

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
           
        </tbody>
    </table>
@endsection