<div class=" hue-rotate-15 p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 align="center" class=" font-sans mt-8 text-2xl font-semibold text-gray-900" >
        Sistema de Difusión de Alerta Temprana "SAT SCZ"
    </h1>

    <h2 class="ml-3 text-xl font-semibold text-gray-900">
        Eventos
    </h2>
</div>
<div class="bg-white bg-opacity-25 grid grid-cols-2 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/1')}}" class="ml-4">
                    Incendio Forestal
                </a>
            </x-buttonp>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/2')}}" class="ml-4">
                    Incendio estructurales
                </a>
            </x-buttonp>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/3')}}" class="ml-4">
                    Inundaciones
                </a>
            </x-buttonp>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/4')}}" class="ml-4">
                    Deslizamientos
                </a>
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/5')}}" class="ml-4">
                    heladas
                </a>
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/6')}}" class="ml-4">
                    Sequias
                </a>
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/7')}}" class="ml-4">
                    Sismmos Terremotos
                </a>
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                <a href="{{url('evento/8')}}" class="ml-4">
                    Eventos Adeversos
                </a>
            </x-buttonp>
        </div>

    </div>
</div>


<div class="bg-white bg-opacity-25 grid grid-cols-3 md:grid-cols-3 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <x-buttona class="ml-2">
                {{ __('Procedimientos') }}
            </x-buttona>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <x-buttona class="ml-2">
                {{ __('Planes de Contingencia') }}
            </x-buttona>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <x-buttona class="ml-2">
                {{ __('Protocolos') }}
            </x-buttona>
        </div>
    </div>

    </div>
</div>
<div class="bg-lime-600 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8 ">
    
    <div>
        <div class="flex items-center ">
            <x-button class="ml-4">
                {{ __('Comunícate con Emergencias Gubernamentales: 800148139') }}
            </x-button>
        </div>
    </div>
</div>