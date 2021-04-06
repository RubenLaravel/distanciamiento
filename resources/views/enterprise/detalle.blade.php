<x-plantilla>

    <div class="bg-gray-800 mt-2 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-5 text-xl text-white">
            <h3 class="font-bold text-2xl pl-6">Detalle</h3>
        </div>
    </div>

    <div class="flex flex-wrap flex-grow overflow-x-auto mx-8 mt-2 p-2 py-6">
        
        <div class="w-full h-10 text-center font-bold text-xl">
            <h1>LISTADO DE COLABORADORES</h1>
        </div>

        {{-- 1ra Tabla --}}
        <div class="w-full">
            <table class="w-full text-center">
                <thead class="text-lg border-4 border-gray-800 bg-gray-800">
                    <tr class="text-gray-300">
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellido P.</th>
                        <th>Apellido M.</th>
                        <th>Sede</th>
                        <th>Area</th>
                        <th>Cargo</th>
                        <th>Incidencias</th>
                    </tr>
                </thead>

                <tbody class="bg-gray-200">
                        @foreach ($employees as $employee)
                        <tr class="bg-white border-4 border-gray-200">
                            <td>{{$loop->iteration}}</td>
                            <td>{{$employee->nombre}}</td>
                            <td>{{$employee->apellido1}}</td>
                            <td>{{$employee->apellido2}}</td>
                            <td>{{$employee->sede}}</td>
                            <td>{{$employee->area}}</td>
                            <td>{{$employee->cargo}}</td>
                            <td>{{$employee->device->collisions->count()}}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-plantilla>