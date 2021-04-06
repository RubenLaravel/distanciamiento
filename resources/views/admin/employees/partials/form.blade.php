<div class="mb-2">
    <div class="mb-2 font-semibold">
        {!! Form::label('nombre', 'NOMBRE') !!}</div>
    <div>{!! Form::text('nombre', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el nombre"]) !!} <div>

        @error('nombre')
            <span class="text-red-400">{{$message}}</span>
        @enderror

</div>

<div class="mb-2">
    <div class="mb-2 font-semibold">{!! Form::label('apellido1', 'APELLIDO P.') !!}</div>
    <div>{!! Form::text('apellido1', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el apellido paterno"]) !!} <div>

        @error('apellido1')
        <span class="text-red-400">{{$message}}</span>
        @enderror

</div>

<div class="mb-2">
    <div class="mb-2 font-semibold">{!! Form::label('apellido2', 'APELLIDO M.') !!}</div>
    <div>{!! Form::text('apellido2', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el apellido materno"]) !!} <div>

        @error('apellido2')
        <span class="text-red-400">{{$message}}</span>
        @enderror

</div>

<div class="mb-2">
    <div class="mb-2 font-semibold">{!! Form::label('sede', 'SEDE') !!}</div>
    <div>{!! Form::text('sede', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba la sede a la que pertenece"]) !!} <div>

        @error('sede')
        <span class="text-red-400">{{$message}}</span>
        @enderror

</div>

<div class="mb-2">
    <div class="mb-2 font-semibold">{!! Form::label('area', 'AREA') !!}</div>
    <div>{!! Form::text('area', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el área a la que pertenece"]) !!} <div>

        @error('area')
        <span class="text-red-400">{{$message}}</span>
        @enderror

</div>

<div class="mb-2">
    <div class="mb-2 font-semibold">{!! Form::label('cargo', 'CARGO') !!}</div>
    <div>{!! Form::text('cargo', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba el cargo que posee"]) !!} <div>

        @error('cargo')
        <span class="text-red-400">{{$message}}</span>
        @enderror

</div>

<div class="mb-2">
    <div class="mb-2 font-semibold">{!! Form::label('enterprise_id', 'ENTERPRISE_ID') !!}</div>
    <div>{!! Form::select('enterprise_id', $enterprises, null, ['class'=>'w-full mb-3', 'placeholder' =>"Seleccione el usuario"]) !!}</div>
        
        @error('enterprise_id')
        <span class="text-red-400">{{$message}}</span>
        @enderror

</div>