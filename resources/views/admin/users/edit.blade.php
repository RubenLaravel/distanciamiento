<x-plantilla>
    
    <div class="flex flex-wrap flex-grow overflow-x-auto mx-8 mt-2 p-2 py-8">
        
        @if (session('info'))
                <div class="w-full bg-green-600 text-white text-lg text-center mb-4 h-10 pt-1">
                    <strong>{{session('info')}}</strong>
                </div>
        @endif
        
        <div class="text-gray-800 font-bold text-lg mb-4 p-3">
            <p>ASIGNACION DE ROLES</p>
        </div>

        <div class="w-full mb-4 p-3 bg-gray-200 border-2 border-blue-500">
            <p class="mb-4">Usuario: <strong class="ml-2">{{$user->name}}</strong></p>
        
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-2']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar Role', ['class'=>'text-white font-semibold mt-10 rounded-full bg-blue-500 p-2']) !!}
            {!! Form::close() !!}
        </div>

    </div>
    
</x-plantilla>