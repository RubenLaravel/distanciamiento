<x-plantilla>
    
    <div class="flex flex-wrap flex-grow overflow-x-auto mx-8 mt-2 p-2 py-8">
        
        @if (session('info'))
        <div class="w-full bg-green-600 text-white text-lg text-center mb-4 h-10 pt-1">
            <strong>{{session('info')}}</strong>
        </div>
        @endif

        
        <div class="text-white mb-4 p-3 rounded-full bg-gray-800">
            <a href="{{route('admin.devices.create')}}">+ DISPOSITIVOS</a>
        </div>

        <div class="w-full">
            <table class="w-full text-center">
                <thead class="text-base border-4 border-gray-800 bg-gray-800">
                    <tr class="text-gray-300">
                        <th>ID</th>
                        <th>MAC</th>
                        <th>EMPLOYEE_ID</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody class="bg-gray-200">
                    @foreach ($devices as $device)
                        <tr class="bg-white border-4 border-gray-200">
                            <td>{{$device->id}}</td>
                            <td>{{$device->mac}}</td>
                            <td>{{$device->employee_id}}</td>
                            <td class="w-1/12"> 
                                <div class="text-white m-1 p-2 rounded-full bg-blue-500">
                                    <a href="{{route('admin.devices.edit', $device)}}">Editar</a>
                                </div>
                            </td>
                            <td class="w-1/12">
                                <form action="{{route('admin.devices.destroy',$device)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-white m-1 p-2 rounded-full bg-red-500">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    
    <div class="mx-8 p-2">
        {{$devices->links()}}
    </div>

</x-plantilla>