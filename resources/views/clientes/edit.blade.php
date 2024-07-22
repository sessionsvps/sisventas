@extends('adminlte::page')

@section('title', 'Actualizar Cliente')

@section('content_header')
<div class="lg:mx-20 my-4">
    <a href="{{ route('clientes.index') }}"
        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-800">Volver</a>
</div>
@stop

@section('content')
<div class="lg:mx-20">
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST"
        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nro_doc" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">DNI o RUC</label>
            <input type="text" id="nro_doc" name="nro_doc"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $cliente->nro_doc }}" required maxlength="11" pattern="\d*"
                oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
        </div>
        <div class="mb-4">
            <label for="nombre" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nombre</label>
            <input type="text" id="nombre" name="nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $cliente->nombre }}" required maxlength="80" />
        </div>
        <div class="mb-4">
            <label for="apellido" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Apellido</label>
            <input type="text" id="apellido" name="apellido"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $cliente->apellido }}" required maxlength="80" />
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $cliente->email }}" required maxlength="100" />
        </div>
        <div class="mb-4">
            <label for="direccion" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Dirección</label>
            <input type="text" id="direccion" name="direccion"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $cliente->direccion }}" required maxlength="100" />
        </div>
        <button type="submit"
            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Actualizar Cliente
        </button>
    </form>
</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
@stop

@section('js')
@stop