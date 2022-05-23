<x-app-layout>
    <div class="w-full flex">
        <x-link-button 
            class="text-white bg-gray-700 border-slate-800 hover:bg-slate-900"
            href="/proveedores/crear"
        >
            Crear nuevo proveedor
        </x-link-button>
    </div>

    <table class="w-full text-sm text-gray-500 text-center">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <th>Id</th>
            <th>Nombre</th>
            <th>Contacto</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @if (count($proveedores) != 0)
                @foreach ($proveedores as $proveedor)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{$proveedor->id}}</td>
                        <td class="px-6 py-4">{{$proveedor->nombre}}</td>
                        <td class="px-6 py-4">{{$proveedor->contacto}}</td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/proveedores/modificar/{{$proveedor->id}}"
                            >
                                Modificar
                            </x-link-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/proveedores/eliminar/{{$proveedor->id}}"
                            >
                                Eliminar
                            </x-link-button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="bg-white border-b">
                    <td colspan="5" class="px-6 py-4">
                        <p>Aun no hay datos</p>
                        <p>Haga click en "Crear nuevo proveedor" para crear proveedores</p>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
</x-app-layout>
