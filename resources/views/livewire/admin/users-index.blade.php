<div>

    <div class="flex flex-wrap flex-grow overflow-x-auto mx-8 mt-2 p-2 py-8">

        @if (session('info'))
                <div class="w-full bg-green-600 text-white text-lg text-center mb-4 h-10 pt-1">
                    <strong>{{session('info')}}</strong>
                </div>
        @endif
        
        <div class="w-full mb-4 p-1 bg-gray-200">

            <input type="text" wire:model="search" class="w-full" placeholder="Ingrese el nombre"/>

        </div>

        @if ($users->count())
            <div class="w-full">
                <table class="w-full text-center">
                    <thead class="text-base border-4 border-gray-800 bg-gray-800">
                        <tr class="text-gray-300">
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody class="bg-gray-200">
                        @foreach ($users as $user)
                            <tr class="bg-white border-4 border-gray-200">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="w-1/12"> 
                                    <div class="text-white m-1 p-2 rounded-full bg-blue-500">
                                        <a href="{{route('admin.users.edit', $user)}}">Editar</a>
                                    </div>
                                </td>
                                <td class="w-1/12">
                                    <form action="{{route('admin.users.destroy',$user)}}" method="POST">
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
        @else
            <strong class="p-2">No hay resultados</strong>
        @endif
            

    </div>

    <div class="mx-8 p-2">
        {{$users->links()}}
    </div>

</div>
