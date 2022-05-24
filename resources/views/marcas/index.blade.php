<x-app-layout>
    <div class="w-full flex">
        <x-link-button 
            class="text-white bg-gray-700 border-slate-800 hover:bg-slate-900"
            href="/marcas/crear"
        >
            Crear nueva Marca
        </x-link-button>
    </div>

    <table class="w-full text-sm text-gray-500 text-center">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <th>Id</th>
            <th>Nombre</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @if (count($marcas) != 0)
                @foreach ($marcas as $marca)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{$marca->id}}</td>
                        <td class="px-6 py-4">{{$marca->nombre}}</td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/marcas/modificar/{{$marca->id}}"
                            >
                                Modificar
                            </x-link-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/marcas/eliminar/{{$marca->id}}"
                            >
                                Eliminar
                            </x-link-button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="bg-white border-b">
                    <td colspan="4" class="px-6 py-4">
                        <p>Aun no hay datos</p>
                        <p>Haga click en "Crear nueva marca" para crear marcas</p>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
</x-app-layout>
