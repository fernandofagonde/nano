@if ($paginator->total())
    <div class="pagination-info mb-2 mb-md-0">
        @php
            $from = ($paginator->perPage() * $paginator->currentPage()) - ($paginator->perPage() - 1);

            if (($paginator->perPage() * $paginator->currentPage()) > $paginator->total()) {
                $to = $paginator->total();
            } else {
                $to = $paginator->perPage() * $paginator->currentPage();
            }

            if ($paginator->total() > $paginator->perPage()) {
                echo 'Exibindo do <strong>' . $from . '</strong> ao <strong>' . $to . '</strong> de <strong>' . $paginator->total() . '</strong> registros encontrados';
            } else {
                echo '<strong>' . $paginator->total() . '</strong>' . ($paginator->total() > 1 ? ' registros encontrados' : ' registro encontrado');
            }
        @endphp
    </div>

    <div class="pagination-wrapper">
        <ul class="pagination pagination-sm mb-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><a href="javascript: void(0);" class="page-link">Primeira</a></li>
                <li class="page-item disabled"><a href="javascript: void(0);" class="page-link">Anterior</a></li>
            @else
                <li class="page-item"><a href="{{ $paginator->url(1) }}" class="page-link">Primeira</a></li>
                <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link">Anterior</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled">
                        <a href="javascript: void(0);" class="page-link">{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a href="javascript: void(0);" class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link">Próxima</a></li>
                <li class="page-item">
                    <a href="{{ $paginator->url($paginator->lastPage()) }}" class="page-link">Última</a>
                </li>
            @else
                <li class="page-item disabled"><a href="javascript: void(0);" class="page-link">Próxima</a></li>
                <li class="page-item disabled"><a href="javascript: void(0);" class="page-link">Última</a></li>
            @endif
        </ul>
    </div>
@endif
