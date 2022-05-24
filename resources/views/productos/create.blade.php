<x-app-layout>
@if (count($marcas) == 0 || count($proveedores) == 0)
    <div class="flex justify-center content-center">
        <div class="bg-white p-36 rounded">
            <h1 class="text-center text-red-500 text-5xl">Error</h1>
            <br/>
            <p>
                Para crear productos tiene que tener listos con anterioridad Marcas y Proveedores
            </p>
            <div class="flex justify-center">
                <a href="/proveedores/crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
                    Crear Proveedor
                </a>
                <a href="/marcas/crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
                    Crear Marca
                </a>
            </div>
        </div>
    </div>
@else
    <h1 class="text-2xl text-center m-6 p-6">Crear Producto</h1>
    <form action="/api/productos/crear" method="post">
        @csrf
        <x-input-with-floating-label type="text" name="nombre" minlength="1" maxlength="60" required>
            Nombre
        </x-input-with-floating-label>
        <x-input-with-floating-label type="number" name="precio" min="1" step="0.01" required>
            Precio
        </x-input-with-floating-label>
        <x-input-with-floating-label type="number" name="existencias" min="1" step="1" required>
            Existencias
        </x-input-with-floating-label>
        <label class="block my-2 text-sm font-medium text-gray-900">Marca</label>
        <select name="marca_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
            @endforeach
        </select>
        <label class="block my-2 text-sm font-medium text-gray-900">Proveedor</label>
        <select name="proveedor_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @foreach($proveedores as $proveedor)
                <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
            @endforeach
        </select>
        <div class="flex justify-center">
            <input type="submit" value="Crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
        </div>
    </form>
@endif
</x-app-layout>
