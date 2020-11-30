@extends('plantilla.index')
@section('contenido')

    <link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
    <style>
        .tf-nc{
            width: 100px;
            height: 100px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #00ff00;

        }
    </style>
    <div class="tf-tree example bg-google">
        <ul>
            @foreach($nodopadre as $nodo)
                @if($nodo)
                    <li class="row">
                        <span class="tf-nc">{{$nodo->nombre}}</span>
                        @if(count($nodo->hijos))
                            @include('redbinaria::arbolbinario.nodoshijos',['nodopadre' => $nodo->hijos])
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection
