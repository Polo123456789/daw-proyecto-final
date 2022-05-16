<x-app-layout>
    <div class="w-full flex">
        <x-link-button 
            class="text-white bg-gray-700 border-slate-800 hover:bg-slate-900"
            href="/clientes/crear"
        >
            Crear nuevo Cliente
        </x-link-button>
    </div>

    <table class="w-full text-sm text-gray-500 text-center">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Nit</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @if (count($clientes) != 0)
                @foreach ($clientes as $cliente)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{$cliente->id}}</td>
                        <td class="px-6 py-4">{{$cliente->nombre}}</td>
                        <td class="px-6 py-4">Q {{$cliente->correo}}</td>
                        <td class="px-6 py-4">{{$cliente->telefono}}</td>
                        <td class="px-6 py-4">{{$cliente->direccion}}</td>
                        <td class="px-6 py-4">{{$cliente->nit}}</td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/clientes/modificar/{{$cliente->id}}"
                            >
                                Modificar
                            </x-link-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/clientes/eliminar/{{$cliente->id}}"
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
                        <p>Haga click en "Crear nuevo cliente" para crear clientes</p>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
</x-app-layout>