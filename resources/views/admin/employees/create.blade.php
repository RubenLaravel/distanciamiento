<x-plantilla>
    <div class="mx-8 mt-2 p-2 py-8">
    
    {!! Form::open(['route' => 'admin.employees.store']) !!}

        @include('admin.employees.partials.form')     

        <div>
            {!! Form::submit('Crear Empleado',['class'=>'text-white font-semibold mt-10 rounded-full bg-blue-500 p-2']) !!}
        </div>

    {!! Form::close() !!}

    </div>
</x-plantilla>