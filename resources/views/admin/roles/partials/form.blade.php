<div class="mb-2">
                
    <div class="mb-2 font-semibold">
        {!! Form::label('name', 'NOMBRE') !!}</div>
    <div>{!! Form::text('name', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el nombre del rol"]) !!} <div>

        @error('name')
            <span class="text-red-400">{{$message}}</span>
        @enderror
        
    <h2 class="mt-4 mb-2">Lista de Permisos</h2>

    @foreach ($permissions as $permission)
        <div>
            <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-2']) !!}
                {{$permission->description}}
            </label>
        </div>
    @endforeach

</div>