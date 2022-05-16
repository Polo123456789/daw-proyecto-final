<x-app-layout>
    <h1 class="text-2xl text-center m-6 p-6">Empleado</h1>
    <form action="/api/empleados/crear" method="post">
        @csrf
        <x-input-with-floating-label type="text" name="nombre" minlength="1" maxlength="60" required>
            Nombre
        </x-input-with-floating-label>
        <x-input-with-floating-label type="email" name="correo" minlength="1" maxlength="60" required>
            Correo
        </x-input-with-floating-label>
        <x-input-with-floating-label type="tel" name="telefono" pattern="(\+[0-9]+ )?[0-9]{4}-[0-9]{4}" required>
            Telefono
        </x-input-with-floating-label>
        <x-input-with-floating-label type="text" name="direccion" minlength="1" maxlength="60" required>
            Direccion
        </x-input-with-floating-label>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Turno</label>
        <select name="turno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option>Mañana</option>
            <option>Tarde</option>
            <option>Noche</option>
        </select>
        <div class="flex justify-center">
            <input type="submit" value="Crear" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
        </div>
    </form>
</x-app-layout>