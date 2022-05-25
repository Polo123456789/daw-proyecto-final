<x-app-layout>
    <div class="w-full flex">
        <x-link-button 
            class="text-white bg-gray-700 border-slate-800 hover:bg-slate-900"
            href="/facturas/crear"
        >
            Crear nueva factura
        </x-link-button>
    </div>

    <table class="w-full text-sm text-gray-500 text-center">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <th>Numero de factura</th>
            <th>Cliente</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @if (count($facturas) != 0)
                @foreach ($facturas as $factura)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{$factura->id}}</td>
                        <td class="px-6 py-4">{{$factura->cliente->nombre}}</td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/facturas/gestionar/{{$factura->id}}"
                            >
                                Modificar
                            </x-link-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/facturas/eliminar/{{$factura->id}}"
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
                        <p>Haga click en "Crear nueva factura" para crear facturas</p>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
</x-app-layout>
