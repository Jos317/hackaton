<div class="shadow-xl center table-responsive">

    <table id="data-table-default" class="min-w-full divide-y divide-gray-200">
        <thead class="bg-green-200">
            <tr>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nombre</th>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detalle</th>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wide">Fecha</th>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hora</th>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Evento</th>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gestión</th>
                
            </tr>
        </thead>
        <tbody  class="bg-white divide-y divide-gray-200">
            @foreach ($alertas as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-xs text-center text-gray-900">
                            {{ $item->id }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-xs text-center text-gray-900">
                            {{ $item->nombre }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-xs text-center text-gray-900">
                            {{ $item->detalle }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-pre-wrap">
                        <div class="text-xs text-center text-gray-900">
                            {{ $item->fecha }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-xs text-center text-gray-900">
                            {{ $item->hora }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-xs text-center text-gray-900">
                            {{ $item->eventos_nombre }}
                        </div>
                    </td>
                   
                    <td class="px-6 py-4 whitespace-normal" style="text-align: center">
                        @if ($item->estados_nombre == 'Critico')                         
                   
                        <a class="text-red-500 hover:text-indigo-900" href="#" target="_blank">
                            
                            <i class="ion-md-cloud-download"></i> {{$item->estados_nombre}}
                        </a>
                            
                        @endif
                        @if ($item->estados_nombre == 'Muy alto')                            
                        <a class="text-red-500 hover:text-indigo-900" href="#" target="_blank">
                            
                            <i class="ion-md-cloud-download"></i> {{$item->estados_nombre}}
                        </a>

                            
                        @endif
                        @if ($item->estados_nombre == 'Moderado')                            
                        <a class="text-yellow-500 hover:text-indigo-900" href="#" target="_blank">
                            
                            <i class="ion-md-cloud-download"></i> {{$item->estados_nombre}}
                        </a>

                            
                        @endif
                        @if ($item->estados_nombre == 'Bajo')                            
                        <a class="text-green-500 hover:text-indigo-900" href="#" target="_blank">
                            
                            <i class="ion-md-cloud-download"></i> {{$item->estados_nombre}}
                        </a>

                            
                        @endif
                       
                    </td>
                    <td style="text-align: center">

                        {{-- <a class="text-green-500 hover:text-indigo-900" href="#">
                            <i class="fas fa-pencil-alt fa-fw"></i> Fotos
                        </a>
                        
                        <a class="text-green-500 hover:text-indigo-900" href="#" target="_blank">
                            <i class="ion-md-cloud-download"></i> Video
                        </a> --}}

                        <a class="text-green-500 hover:text-indigo-900" href="#" target="_blank">
                            <i class="ion-md-cloud-download"></i> Ver Mapa
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>