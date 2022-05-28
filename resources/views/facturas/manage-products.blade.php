<x-app-layout>
    <!-- El componente de Alpine se define en app.js en resources -->
    <div x-data="factura" x-cloack>
        <h1 class="text-2xl text-center">Gestionar Productos</h1>
        <p class="m-3">Factura a nombre de: <strong>{{$factura->cliente->nombre}}</strong></p>

        <div class="flex flex-col">
            <div class="border rounded m-3 p-8">
                <h2 class="text-xl">Productos Disponibles</h2>
                <div class="flex items-center m-2 flex-row gap-2">
                    <label>Producto:</label>
                    <select x-model="currentlySelected" class="grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <template x-for="(p, index) in availableProducts" :key="index">
                            <option :value="index"><span x-text="p.nombre"></span></option>
                        </template>
                    </select>
                    <div></div>
                    <label>Cantidad:</label>
                    <input type="number" x-model="quantitySelected" class="grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <button
                        class="border p-2 rounded text-white bg-gray-700 border-slate-800 hover:bg-slate-900"
                        @click="addProduct"
                    >
                        Agregar
                    </button>
                </div>
            </div>

            <div class="border rounded m-3 p-8">
                <h2 class="text-xl">Productos Agregados</h2>
                <ul class="mt-3">
                    <template x-for="(p, index) in selectedProducts" :key="index">
                        <li class="border p-3 flex flex-row items-center">
                            <span x-text="`${p.pivot.cantidad} ${p.nombre}`"></span>
                            <div class="grow"></div>
                            <button
                                class="border py-1 px-2.5 rounded text-white bg-red-700 border-red-800 hover:bg-red-900"
                                title="Eliminar Producto"
                                @click="removeProduct(index)"
                            >
                                X
                            </button>
                        </li>
                    </template>
                </ul>
            </div>
        </div>

        <button
            class="border p-2 rounded text-white bg-gray-700 border-slate-800 hover:bg-slate-900 m-3"
            @click="confirmTicket"
        >
            Confirmar Factura
        </button>

        <details>
            <summary class="text-white inline">Info de debug</summary>

            <p>Seleccionados:</p>
            <pre x-text="JSON.stringify(selectedProducts, null, 2)"></pre>
            <p>Disponibles:</p>
            <pre x-text="JSON.stringify(availableProducts, null, 2)"></pre>
            <p>Actual:</p>
            <pre x-text="currentlySelected"></pre>
            <pre x-text="availableProducts[currentlySelected].nombre"></pre>
        </details>
    </div>
</x-app-layout>

<script type="application/json" id="ticketDetails">
    {!! $factura->toJson() !!}
</script>

<script type="application/json" id="notSelectedProducts">
    {!! $productos->toJson() !!}
</script>

<script type="application/json" id="selectedProducts">
    {!! $factura->productos->toJson() !!}
</script>
