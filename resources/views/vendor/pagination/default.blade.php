<div class="paginate">
    <ul>
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <li><span class="disabled">⟨</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">⟨</a></li>
        @endif

    <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li><span class="more">{{ $element }}</span></li>
            @endif

        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><span class="active">{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

    <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">⟩</a></li>
        @else
            <li><span class="disabled">⟩</span></li>
        @endif
    </ul>

</div>