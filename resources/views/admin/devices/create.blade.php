<x-plantilla>
    <div class="mx-8 mt-2 p-2 py-8">
    
    {!! Form::open(['route' => 'admin.devices.store']) !!}

        @include('admin.devices.partials.form')     

        <div>
            {!! Form::submit('Crear Dispositivo',['class'=>'text-white font-semibold mt-10 rounded-full bg-blue-500 p-2']) !!}
        </div>

    {!! Form::close() !!}

    </div>
</x-plantilla>