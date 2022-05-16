<x-app-layout>
    <div class="w-full flex">
        <x-link-button 
            class="text-white bg-gray-700 border-slate-800 hover:bg-slate-900"
            href="/empleados/crear"
        >
            Crear nuevo Empleado
        </x-link-button>
    </div>

    <table class="w-full text-sm text-gray-500 text-center">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Turno</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @if (count($empleados) != 0)
                @foreach ($empleados as $empleado)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{$empleado->id}}</td>
                        <td class="px-6 py-4">{{$empleado->nombre}}</td>
                        <td class="px-6 py-4">{{$empleado->correo}}</td>
                        <td class="px-6 py-4">{{$empleado->telefono}}</td>
                        <td class="px-6 py-4">{{$empleado->direccion}}</td>
                        <td class="px-6 py-4">{{$empleado->turno}}</td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/empleados/modificar/{{$empleado->id}}"
                            >
                                Modificar
                            </x-link-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/empleados/eliminar/{{$empleado->id}}"
                            >
                                Eliminar
                            </x-link-button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="bg-white border-b">
                    <td colspan="8" class="px-6 py-4">
                        <p>Aun no hay datos</p>
                        <p>Haga click en "Crear nuevo Empleado" para crear empleados</p>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
</x-app-layout>