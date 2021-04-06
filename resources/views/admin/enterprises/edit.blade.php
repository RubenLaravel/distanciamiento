<x-plantilla>

    <div class="mx-8 mt-2 p-2 py-8">
    
    @if (session('info'))
        <div class="bg-green-600 text-white text-lg text-center mb-2 h-10 pt-1">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    {!! Form::model($enterprise, ['route' => ['admin.enterprises.update',$enterprise], 'files' => true, 'method' => 'put']) !!}

        <div class="mb-2">
            <div class="mb-2 font-semibold">
                {!! Form::label('name', 'NOMBRE') !!}</div>
            <div>{!! Form::text('name', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el nombre"]) !!} <div>
        
                @error('name')
                    <span class="text-red-400">{{$message}}</span>
                @enderror
        
        </div>

        <div class="mb-2">
            <div class="mb-2 font-semibold">{!! Form::label('ruc', 'RUC') !!}</div>
            <div>{!! Form::text('ruc', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el nombre"]) !!} <div>
        
                @error('ruc')
                <span class="text-red-400">{{$message}}</span>
                @enderror
        
        </div>

        <div class="mb-2">
            <div class="mb-2 font-semibold">{!! Form::label('user_id', 'USER_ID') !!}</div>
            <div>{!! Form::text('user_id', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el id"]) !!} <div>
                
                @error('user_id')
                <span class="text-red-400">{{$message}}</span>
                @enderror
        
        </div>
        
        <div class="mb-2">
            <div class="mb-2 font-semibold">{!! Form::label('imagen', 'IMAGEN') !!}</div>
            <div>{!! Form::file('imagen',['class'=>'mb-3', 'accept' => 'image/*']) !!}<div>

                @error('imagen')
                    <span class="text-red-400">{{$message}}</span>
                @enderror
        </div>        

        <div>
            {!! Form::submit('Actualizar Compañia',['class'=>'text-white font-semibold mt-10 rounded-full bg-blue-500 p-2']) !!}
        </div>

    {!! Form::close() !!}

    </div>
</x-plantilla>