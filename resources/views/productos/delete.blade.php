<x-app-layout>
    <div class="flex justify-center content-center">
        <div class="bg-white p-36 rounded">
            <h1 class="text-center text-5xl">Aviso</h1>
            <br/>
            <p>
                Esta a punto de eliminar el registro "{{$producto->nombre}}",
                esta es una accion que no se puede revertir. Esta seguro?
            </p>
            <div class="flex justify-center">
                <a href="/productos" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
                    Cancelar
                </a>
                <form action="/api/productos/eliminar" method="post">
                    @csrf
                    <input type="number" name="id" value="{{$producto->id}}" hidden>
                    <input type="submit" value="Confirmar" class="text-2xl m-4 border px-4 py-2 rounded text-white bg-gray-800 hover:bg-gray-900">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>