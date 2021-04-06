<x-plantilla>
    <div class="bg-gray-800 mt-2 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-5 text-xl text-white">
            <h3 class="font-bold text-2xl pl-6">Datos Generales</h3>
        </div>
    </div>

    <div class="flex flex-wrap content-around mt-2 p-2 py-6">
        <div class="w-full md:w-1/2 p-6">
            <!--Total Usuarios-->
            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl mb-4 p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-1 text-center">
                        <h5 class="font-bold text-xl uppercase pb-2 text-gray-600">Total Usuarios</h5>
                        <h3 class="font-bold text-3xl">{{$employees}}</h3>
                    </div>
                </div>
            </div>
            <!--/Total Usuarios-->
        </div>
        <div class="w-full md:w-1/2 p-6">
            <!--Total Sedes-->
            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl mb-4 p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-1 text-center">
                        <h5 class="font-bold text-xl uppercase pb-2 text-gray-600">Total Sedes</h5>
                        <h3 class="font-bold text-3xl">{{$sedes}}</h3>
                    </div>
                </div>
            </div>
            <!--/Total Sedes-->
        </div>
        <div class="w-full md:w-1/2 p-6">
            <!--Total Eventos-->
            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl mb-4 p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-1 text-center">
                        <h5 class="font-bold text-xl uppercase pb-2 text-gray-600">Total Eventos</h5>
                        <h3 class="font-bold text-3xl">{{$collisions}}</h3>
                    </div>
                </div>
            </div>
            <!--/Total Eventos-->
        </div>
        <div class="w-full md:w-1/2 p-6">
            <!--Total Areas-->
            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-600 rounded-lg shadow-xl mb-4 p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-1 text-center">
                        <h5 class="font-bold text-xl uppercase pb-2 text-gray-600">Total Areas</h5>
                        <h3 class="font-bold text-3xl">{{$areas}}</h3>
                    </div>
                </div>
            </div>
            <!--/Total Areas-->
        </div>                                                         
    </div>
</x-plantilla>

