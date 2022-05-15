<x-guest-layout>
    <div class="h-screen" style="background-image: url(/img/supermarket.jpg); background-position: center;">
        <div class="h-screen flex justify-center items-center" style="backdrop-filter: brightness(0.4);">
            <div class="min-h-max text-white">
                <h1 class="text-inherit text-center text-8xl m-4">
                    Supermercado X
                </h1>
                <p class="text-inherit text-center text-4xl m-4">
                    Donde puedes comprar los mejores productos, a los mejores precios
                </p>
                <div class="flex justify-around">
                    <a class="text-inherit m-4 text-2xl border border-white p-2 rounded hover:bg-white hover:text-black"
                       href="/login"
                    >
                        Iniciar sesion
                    </a>
                    <a class="text-inherit m-4 text-2xl border border-white p-2 rounded hover:bg-white hover:text-black"
                       href="/register"
                    >
                        Registrarse
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="productos" class="m-12 grid grid-cols-3 gap-1.5">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/aguacate.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Aguacates</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/apple.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Manzanas</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/arandano.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Arandanos</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/banana.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Bananas</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/carne.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Una seleccion de cortes</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/cereal.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Varios cereales a degustar</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/fresa.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Fresas</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/limon.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Jugosos Limones</div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="/img/pescado.jpg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Frescos Pescados</div>
            </div>
        </div>
    </div>
</x-guest-layout>