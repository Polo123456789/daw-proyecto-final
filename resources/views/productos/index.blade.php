<x-app-layout>
    <div class="w-full flex">
        <x-link-button 
            class="text-white bg-gray-700 border-slate-800 hover:bg-slate-900"
            href="/productos/crear"
        >
            Crear nuevo Producto
        </x-link-button>
    </div>

    <table class="w-full text-sm text-gray-500 text-center">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Existencias</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @if (count($productos) != 0)
                @foreach ($productos as $producto)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{$producto->id}}</td>
                        <td class="px-6 py-4">{{$producto->nombre}}</td>
                        <td class="px-6 py-4">Q {{$producto->precio}}</td>
                        <td class="px-6 py-4">{{$producto->existencias}}</td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/productos/modificar/{{$producto->id}}"
                            >
                                Modificar
                            </x-link-button>
                        </td>
                        <td class="px-6 py-4">
                            <x-link-button 
                                class="text-black border-black hover:text-white hover:bg-black"
                                href="/productos/eliminar/{{$producto->id}}"
                            >
                                Eliminar
                            </x-link-button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="bg-white border-b">
                    <td colspan="6" class="px-6 py-4">
                        <p>Aun no hay datos</p>
                        <p>Haga click en "Crear nuevo producto" para crear productos</p>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
</x-app-layout>