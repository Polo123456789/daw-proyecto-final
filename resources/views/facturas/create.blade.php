<x-app-layout>
@if (count($productos) == 0 || count($clientes) == 0)
    <div class="flex justify-center content-center">
        <div class="bg-white p-36 rounded">
            <h1 class="text-center text-red-500 text-5xl">Error</h1>
            <br/>
            <p>
                Para crear facturas tiene que tener listos con anterioridad productos y clientes
            </p>
            <div class="flex justify-center">
                <a href="/productos/crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
                    Crear Producto
                </a>
                <a href="/clientes/crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
                    Crear Cliente
                </a>
            </div>
        </div>
    </div>
@else
    <form action="/api/facturas/crear" method="post">
        <h1 class="text-2xl text-center m-6 p-6">Crear Factura</h1>
        @csrf
        <label class="block my-2 text-sm font-medium text-gray-900">Cliente:</label>
        <select name="cliente_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
            @endforeach
        </select>

        <!-- Boton para subir -->
        <div class="flex justify-center">
            <input type="submit" value="Agregar Productos" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
        </div>
    </form>
@endif
</x-app-layout>
