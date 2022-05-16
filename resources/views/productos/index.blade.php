<x-app-layout>
    <div class="w-full flex">
        <x-link-button class="text-white bg-gray-700 border-slate-800 hover:bg-slate-900">
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
            <tr class="bg-white border-b">
                <td class="px-6 py-4">1</td>
                <td class="px-6 py-4">Manzanas</td>
                <td class="px-6 py-4">10.00</td>
                <td class="px-6 py-4">50</td>
                <td class="px-6 py-4">
                    <x-link-button class="text-black border-black hover:text-white hover:bg-black">
                        Modificar
                    </x-link-button>
                </td>
                <td class="px-6 py-4">
                    <x-link-button class="text-black border-black hover:text-white hover:bg-black">
                        Eliminar
                    </x-link-button>
                </td>
            </tr>
            <tr class="bg-white border-b">
                <td colspan="6" class="px-6 py-4">Aun no hay datos</td>
            </tr>
        </tbody>
    </table>
</x-app-layout>