<x-app-layout>
    <h1 class="text-2xl text-center m-6 p-6">Crear Marca</h1>
    <form action="/api/marcas/crear" method="post">
        @csrf
        <x-input-with-floating-label type="text" name="nombre" minlength="1" maxlength="60" required>
            Nombre
        </x-input-with-floating-label>
        <div class="flex justify-center">
            <input type="submit" value="Crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
        </div>
    </form>
</x-app-layout>
