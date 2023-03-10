<div class="table-responsive">
    <table id="data-table-default" class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Nombre</th>
                <th style="text-align: center">Detalle</th>
                <th style="text-align: center">Fecha</th>
                <th style="text-align: center">Hora</th>
                <th style="text-align: center">Evento</th>
                <th style="text-align: center">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alertas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->detalle}}</td>
                    <td>{{$item->fecha}}</td>
                    <td>{{$item->hora}}</td>
                    <td>{{$item->eventos_nombre}}</td>
                    {{-- <td>{{$item->estados_nombre}}</td> --}}
                    <td style="text-align: center">
                        {{-- <a class="btn btn-sm btn-primary me-1" href="#">
                            <i class="fas fa-pencil-alt fa-fw"></i> Editar
                        </a> --}}
                        
                        <a class="btn btn-sm btn-green me-1" href="#" target="_blank">
                            <i class="ion-md-cloud-download"></i> {{$item->estados_nombre}}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>