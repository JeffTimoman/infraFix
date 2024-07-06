{{-- resources/views/vendor/pagination/custom.blade.php --}}

@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" style="color: grey;"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" style="color: #a50000;">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" style="color: #a50000;"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    {{-- Show first and last pages --}}
                    @if ($page == 1 || $page == $paginator->lastPage())
                        @if ($page == $paginator->currentPage())
                            <li class="active" style="background-color: lightblue; color: white;"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" style="color: #a50000;">{{ $page }}</a></li>
                        @endif
                    {{-- Show pages around the current page --}}
                    @elseif ($page >= $paginator->currentPage() - 1 && $page <= $paginator->currentPage() + 1)
                        @if ($page == $paginator->currentPage())
                            <li class="active" style="background-color: lightblue; color: white;"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" style="color: #a50000;">{{ $page }}</a></li>
                        @endif
                    {{-- Show ellipsis --}}
                    @elseif ($page == 2 || $page == $paginator->lastPage() - 1)
                        <li class="disabled" style="color: #a50000;"><span>...</span></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" style="color: #a50000;">&raquo;</a></li>
        @else
            <li class="disabled" style="color:  #a50000;"><span>&raquo;</span></li>
        @endif
    </ul>
@endif

<style>
    .pagination {
        display: flex;
        list-style-type: none;
        padding: 0;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a,
    .pagination li span {
        display: block;
        padding: 8px 12px;
        text-decoration: none;
        color: #a50000;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .pagination li.active span {
        background-color: #a50000;
        color: white;
        border-color: #a50000;
    }

    .pagination li.disabled span {
        color: grey;
    }
</style>
