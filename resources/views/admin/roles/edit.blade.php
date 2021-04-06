<x-plantilla>

    <div class="mx-8 mt-2 p-2 py-8">
    
        @if (session('info'))
                <div class="w-full bg-green-600 text-white text-lg text-center mb-4 h-10 pt-1">
                    <strong>{{session('info')}}</strong>
                </div>
        @endif

        {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
    
            @include('admin.roles.partials.form')
                    
            <div>
                {!! Form::submit('Actualizar Role',['class'=>'text-white font-semibold mt-10 rounded-full bg-blue-500 p-2']) !!}
            </div>
    
        {!! Form::close() !!}
    
    </div>

</x-plantilla>