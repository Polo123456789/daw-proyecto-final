<x-app-layout>
    <div class="w-full flex justify-end">
        <x-link-button class="text-black border-black hover:text-white hover:bg-black">
            Crear nuevo Producto
        </x-link-button>
    </div>
    
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <th class="text-center">Id</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Existencias</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <tr class="bg-white border-b">
                <td class="px-6 py-4 text-center">1</td>
                <td class="px-6 py-4 text-center">Manzanas</td>
                <td class="px-6 py-4 text-center">10.00</td>
                <td class="px-6 py-4 text-center">50</td>
                <td class="px-6 py-4 text-center">
                    <x-link-button class="text-black border-black hover:text-white hover:bg-black">
                        Modificar
                    </x-link-button>
                </td>
                <td class="px-6 py-4 text-center">
                    <x-link-button class="text-black border-black hover:text-white hover:bg-black">
                        Eliminar
                    </x-link-button>
                </td>
            </tr>
        </tbody>
    </table>
</x-app-layout>