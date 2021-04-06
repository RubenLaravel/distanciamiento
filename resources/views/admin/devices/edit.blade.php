<x-plantilla>

    <div class="mx-8 mt-2 p-2 py-8">
    
    @if (session('info'))
        <div class="bg-green-600 text-white text-lg text-center mb-2 h-10 pt-1">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    {!! Form::model($device, ['route' => ['admin.devices.update',$device],'method' => 'put']) !!}

        @include('admin.devices.partials.form')
        
        <div>
            {!! Form::submit('Actualizar Dispositivo',['class'=>'text-white font-semibold mt-10 rounded-full bg-blue-500 p-2']) !!}
        </div>

    {!! Form::close() !!}

    </div>
</x-plantilla>