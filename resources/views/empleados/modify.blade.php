<x-app-layout>
    <h1 class="text-2xl text-center m-6 p-6">Modificar empleado</h1>
    <form action="/api/empleados/modificar" method="post">
        @csrf
        <x-input-with-floating-label type="number" name="id" value="{{$empleado->id}}" readonly>
            ID
        </x-input-with-floating-label>
        <x-input-with-floating-label type="text" name="nombre" minlength="1" maxlength="60" value="{{$empleado->nombre}}" required>
            Nombre
        </x-input-with-floating-label>
        <x-input-with-floating-label type="email" name="correo" minlength="1" maxlength="60" value="{{$empleado->correo}}" required>
            Correo
        </x-input-with-floating-label>
        <x-input-with-floating-label type="tel" name="telefono" pattern="(\+[0-9]+ )?[0-9]{4}-[0-9]{4}" value="{{$empleado->telefono}}" required>
            Telefono
        </x-input-with-floating-label>
        <x-input-with-floating-label type="text" name="direccion" minlength="1" maxlength="60" value="{{$empleado->direccion}}" required>
            Direccion
        </x-input-with-floating-label>
        <select name="turno" value="{{$empleado->turno}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <optgroup label="Actual">
                <option>{{$empleado->turno}}</option>
            </optgroup>
            <optgroup label="Opciones">
                <option>Mañana</option>
                <option>Tarde</option>
                <option>Noche</option>
            </optgroup>
        </select>
        <div class="flex justify-center">
            <input type="submit" value="Modificar" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
        </div>
    </form>
</x-app-layout>