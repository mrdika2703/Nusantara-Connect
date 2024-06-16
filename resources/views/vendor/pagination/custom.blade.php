@if ($paginator->hasPages())
    <nav class="pagination py-2 d-inline-block">
        <div class="nav-links">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="page-numbers disabled"><i class="icofont-thin-double-left"></i></span>
            @else
                <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="icofont-thin-double-left"></i></a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="page-numbers disabled">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-numbers current">{{ $page }}</span>
                        @else
                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="icofont-thin-double-right"></i></a>
            @else
                <span class="page-numbers disabled"><i class="icofont-thin-double-right"></i></span>
            @endif
        </div>
    </nav>
@endif
