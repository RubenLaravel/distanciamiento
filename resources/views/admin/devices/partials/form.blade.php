<div class="mb-2">
    <div class="mb-2 font-semibold">
        {!! Form::label('mac', 'MAC') !!}</div>
    <div>{!! Form::text('mac', null,['class'=>'w-full mb-3 placeholder-gray-500 placeholder-opacity-75', 'placeholder' =>"Escriba la dirección MAC"]) !!} <div>

        @error('mac')
            <span class="text-red-400">{{$message}}</span>
        @enderror

</div>

<div class="mb-2">
    <div class="mb-2 font-semibold">{!! Form::label('employee_id', 'EMPLOYEE_ID') !!}</div>
    <div>{!! Form::select('employee_id', $employees, null, ['class'=>'w-full mb-3', 'placeholder' =>"Seleccione el usuario"]) !!}</div>
        
        @error('employee_id')
        <span class="text-red-400">{{$message}}</span>
        @enderror

</div>