<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Distanciamiento') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            .active{
                /* background: white; */
                border-bottom-color: rgb(0, 81, 255);
                color: white;  
            }
        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
                
    </head>
    
    <body class="bg-gray-800 font-sans leading-normal tracking-normal">
        
        <!-- Barra de Navegación -->
        <nav class="fixed w-full top-0 h-16 z-20 pt-0.5 bg-gray-800">
            <div class="h-16 flex items-center justify-between ">
                
                <div class="w-1/6 px-2 py-2 pb-5 md:pb-0">
                    <div class="mt-2 ml-2">
                        @if (Auth::user()->enterprise)
                            @if (Auth::user()->enterprise->imagen)
                                <img src="{{Storage::url(Auth::user()->enterprise->imagen)}}" class="rounded-full object-fill pt-2 h-16 w-full">
                            @endif
                        @endif
                    </div>
                </div>
            
                <div class="hidden md:flex font-bold text-2xl text-white w-4/6 px-2 pl-4 py-2">
                    @if (Auth::user()->enterprise)
                    Bienvenido: {{Auth::user()->enterprise->name}}
                    @endif
                </div>
            
                <div class="text-white w-1/6 px-2 py-2 flex justify-end">
                    <div class="ml-3">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-blue-100 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}
    
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>
    
                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>
    
                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
    
                                {{-- @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif --}}
    
                                <div class="border-t border-gray-100"></div>
    
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Contenido -->
        <div class="flex flex-col md:flex-row">
            

            <!-- Menú -->
            <div class="fixed bottom-0 md:relative w-full md:w-1/6 md:h-screen z-10 bg-gray-800">
                <div class="md:mt-12 md:w-1/6 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col py-0 md:py-10 px-1 md:px-2 text-center md:text-left">
                        <li class="ml-2 mr-3">
                            <a href="{{ route('enterprise.datos') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('dashboard/datos') ? 'active' : ''}}">
                                <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Datos</span>
                            </a>
                        </li>
                        <li class="ml-2 mr-3 flex-1">
                            <a href="{{ route('enterprise.analitica') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('dashboard/analitica') ? 'active' : ''}}">
                                <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Analítica</span>
                            </a>
                        </li>
                        <li class="ml-2 mr-3 flex-1">
                            <a href="{{ route('enterprise.detalle') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('dashboard/detalle') ? 'active' : ''}}">
                                <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Detalle</span>
                            </a>
                        </li>
                        @can('admin.users')
                            <li class="ml-2 mr-3 flex-1">
                                <a href="{{ route('admin.users.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('admin/users') ? 'active' : ''}}">
                                    <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Usuarios</span>
                                </a>
                            </li>
                        @endcan
                        @can('admin.roles')
                            <li class="ml-2 mr-3 flex-1">
                                <a href="{{ route('admin.roles.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('admin/roles') ? 'active' : ''}}">
                                    <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Roles</span>
                                </a>
                            </li>
                        @endcan
                        @can('admin.enterprises')
                            <li class="ml-2 mr-3 flex-1">
                                <a href="{{ route('admin.enterprises.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('admin/enterprises') ? 'active' : ''}}">
                                    <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Empresas</span>
                                </a>
                            </li>
                        @endcan
                        @can('admin.employees')
                            <li class="ml-2 mr-3 flex-1">
                                <a href="{{ route('admin.employees.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('admin/employees') ? 'active' : ''}}">
                                    <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Empleados</span>
                                </a>
                            </li>
                        @endcan
                        @can('admin.devices')
                            <li class="ml-2 mr-3 flex-1">
                                <a href="{{ route('admin.devices.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-gray-600 md:text-gray-400 hover:text-white border-b-2 border-gray-800 hover:border-blue-600 {{request()->is('admin/devices') ? 'active' : ''}}">
                                    <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Dispositivos</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
            

            <!-- Contenido principal -->
            <div class="main-content flex-1 md:w-5/6 bg-gray-100 mt-14 pb-4 md:pb-0">
                
                <!-- Charting library -->
                <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
                <!-- Chartisan -->
                <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
                
                {{$slot}}     

            </div>


        </div>
        

    </body>




