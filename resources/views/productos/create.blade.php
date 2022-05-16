<x-app-layout>
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
        <div class="flex justify-center">
            <input type="submit" value="Crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
        </div>
    </form>
</x-app-layout>