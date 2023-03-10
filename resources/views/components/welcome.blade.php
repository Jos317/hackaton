<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 align="center" class="mt-8 text-2xl font-semibold text-gray-900" >
        Sistema de Difusión de Alerta Temprana "SAT SCZ"
    </h1>

    <h2 class="ml-3 text-xl font-semibold text-gray-900">
        Eventos
    </h2>
</div>

<div class="bg-green bg-opacity-25 grid grid-cols-2 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <a href="{{url('evento/3')}}" class="ml-4">
                Inundaciones
            </a>
        </div>
    </div>

    <div>
        {{-- <a href="mailto:jchilelaime38@gmail.com">Hola como estas
        </a> --}}
        {{-- <a href = "mailto:jchilelaime38@gmail.com?subject = ALERTA & body = Hola como estas">
            Send Email
        </a> --}}
        <a href = "mailto:jchilelaime38@gmail.com,diego@gmail.com?subject=ALERTA%20IMPORTANTE%20&body=Inundacion%20inminente%20">
            Send Feedback
        </a>
        <a href="www.google.com" target="_self" onclick="sendMail(); return false">Link</a>
    </div>

    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                {{ __('Incendios Estructurales') }}
            </x-buttonp>
        </div>
    </div>

    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                {{ __('Deslizamientos') }}
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                {{ __('Heladas') }}
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                {{ __('Sequias') }}
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                {{ __('Sismos/Terremotos') }}
            </x-buttonp>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttonp class="ml-4">
                {{ __('Otros Eventos Adversos') }}
            </x-buttonp>
        </div>

    </div>
</div>

<div class="bg-green bg-opacity-25 grid grid-cols-3 md:grid-cols-3 gap-6 lg:gap-8 p-6 lg:p-8">
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

    <div>
        <div class="flex items-center">
            <x-buttona class="ml-2">
                {{ __('Blog de articulos') }}
            </x-buttona>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttona class="ml-2">
                {{ __('Numeros de Contingencias') }}
            </x-buttona>
        </div>

    </div>
    <div>
        <div class="flex items-center">
            <x-buttona class="ml-2">
                {{ __('Otras opciones') }}
            </x-buttona>
        </div>

    </div>
</div>
<div class="bg-green bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8 ">
    <div>
        <div class="flex items-center ">
            <x-button class="ml-4">
                {{ __('Comunícate con Emergencias Gubernamentales: 800148139') }}
            </x-button>
        </div>
    </div>
</div>
<script>
    function sendMail() {
    var link = "mailto:myemail@testemail.com.hk"
         + "&subject=" + escape("This is my subject")
         + "&body=" + escape("This is my body");
    window.open(link, "_blank");   
    }
</script>
