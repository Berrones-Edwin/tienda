@extends('layout.app')

@section('title','Productos')

@section('main-title','Productos')

@section('subtitle')
    Crear Producto
    <a href="{{ route('products.index') }}" class="btn btn-sm btn-secondary">
        Regresar
    </a>
@endsection

@section('content')
   <form action="" class="mx-auto row" style="width:70%;">
        @include('admin.products.form')
   </form>
@endsection