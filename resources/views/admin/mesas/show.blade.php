@extends('admin.layouts.layout') @section('content')

<div class="content-page">
    <div class="content">
        {{-- Start Content --}}
        <div class="container-fluid">
            {{-- start page title --}}
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Mesa</h4>
                    </div>
                </div>
            </div>
            {{-- end page title --}}
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="card-body">
                                <p>
                                    <strong class="font-weight-bold">
                                        Numero:
                                    </strong>
                                    {{ $mesa->numero }}
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Escuela:
                                    </strong>

                                    {{ $escuelas }}
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Fecha de Creacion:
                                    </strong>
                                    {{ $mesa->created_at->format('d/m/Y H:i')
                                    }}Hs.
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Fecha de Modificacion:
                                    </strong>
                                    @if ($mesa->updated_at == $mesa->created_at)
                                    No posee Modificaciones @else
                                    {{ $mesa->updated_at->diffForHumans() }}
                                    @endif
                                </p>
                                <p>
                                    <strong class="font-weight-bold">
                                        Cargada:
                                    </strong>

                                    @if ( $mesa->cargado == 1 ) Si @else No
                                    @endif
                                </p>

                                <p>
                                    <strong class="font-weight-bold">
                                        Cantidad de Electores:
                                    </strong>
                                    @foreach ($cantelectores as $item)
                                    {{$item->CantidadElectores}}
                                    @endforeach
                                </p>

                                <p></p>

                                <br />
                                @if ($mesa->cargado == 1)
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">
                                                Agrupacion Politica
                                            </th>
                                            <th scope="col">Presidente</th>
                                            <th scope="col">
                                                Diputado Nacional
                                            </th>
                                            <th scope="col">Gobernador Prov</th>
                                            <th scope="col">Diputado Prov</th>
                                            <th scope="col">Senador Prov</th>
                                            <th scope="col">Intendente Mun</th>
                                            <th scope="col">Concejal Mun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                @foreach ($listas as $item)
                                                {{$item->nombre}}
                                                @endforeach
                                            </td>
                                            <td style="background:#d3d3d3">
                                                No Presenta
                                            </td>
                                            <td style="background:#d3d3d3">
                                                No Presenta
                                            </td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>GEM</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                        </tr>
                                        <tr>
                                            <th 1scope="row">3</th>
                                            <td>1GEM</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                        </tr>
                                    </tbody>
                                </table>

                                {{-- -------------------------------------------------------- --}}

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">
                                                Agrupacion Politica
                                            </th>
                                            <th scope="col">Presidente</th>
                                            <th scope="col">
                                                Diputado Nacional
                                            </th>
                                            <th scope="col">Gobernador Prov</th>
                                            <th scope="col">Diputado Prov</th>
                                            <th scope="col">Senador Prov</th>
                                            <th scope="col">Intendente Mun</th>
                                            <th scope="col">Concejal Mun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listas as $item)
                                        <tr>
                                            <td>
                                                {{$item->numero}}
                                            </td>

                                            <td>
                                                {{$item->nombre}}
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                @else @endif
                            </div>
                        </div>
                        {{-- end row --}}
                    </div>
                    <div class="mt-4 mb-3">
                        <div class="text-center d-print-none">
                            <a
                                href="javascript:window.print()"
                                class="btn btn-primary waves-effect waves-light"
                                ><i class="mdi mdi-printer mr-1"></i>
                                Imprimir</a
                            >
                        </div>
                    </div>
                    {{-- end card-box --}}
                </div>
                {{-- end col --}}
            </div>
            {{-- end row --}}
        </div>
        {{-- container --}}
    </div>
    {{-- content --}}
</div>

@endsection
