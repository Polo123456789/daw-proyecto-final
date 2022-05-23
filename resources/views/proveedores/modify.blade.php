<x-app-layout>
    <h1 class="text-2xl text-center m-6 p-6">Crear Proveedor</h1>
    <form action="/api/proveedores/modificar" method="post">
        @csrf
        <x-input-with-floating-label type="number" name="id" value="{{$proveedor->id}}" readonly>
            ID
        </x-input-with-floating-label>
        <x-input-with-floating-label type="text" name="nombre" minlength="1" maxlength="60" value="{{$proveedor->nombre}}" required>
            Nombre
        </x-input-with-floating-label>
        <x-input-with-floating-label type="email" name="contacto" minlength="1" value="{{$proveedor->contacto}}" required>
            Contacto
        </x-input-with-floating-label>
        <div class="flex justify-center">
            <input type="submit" value="Crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
        </div>
    </form>
</x-app-layout>
