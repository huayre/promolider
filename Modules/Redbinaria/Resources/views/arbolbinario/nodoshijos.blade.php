<ul>
    @php $nodoDerecha=1;$nodoIzquierda=1;
     @endphp
    @foreach($nodopadre->sortBy('orden') as $nodo)
            @if($nodo->orden==1)
                <li>
                    <span class="tf-nc">{{$nodo->nombre}}</span>
                    @if(count($nodo->hijos))
                        @include('redbinaria::arbolbinario.nodoshijos',['nodopadre' => $nodo->hijos])
                    @endif
                </li>
                @php $nodoIzquierda=2; @endphp
            @endif

            @if($nodoIzquierda==1)
                    <li>
                        <span class="tf-nc invisible">JAJA</span>
                    </li>
            @endif
            @if($nodo->orden==2)
                    <li>
                        <span class="tf-nc">{{$nodo->nombre}}</span>
                        @if(count($nodo->hijos))
                            @include('redbinaria::arbolbinario.nodoshijos',['nodopadre' => $nodo->hijos])
                        @endif
                    </li>
                    @php $nodoDerecha=2; @endphp
            @endif
            @if($nodoIzquierda==2 && count($nodopadre)!=2)
                    <li>
                        <span class="tf-nc invisible">No existe</span>
                    </li>
            @endif
    @endforeach
</ul>

