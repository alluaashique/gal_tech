@if ($paginator->hasPages())
    <div class="pagination">
        @if ($paginator->onFirstPage())
            {{-- <span class="dot disabled"></span> --}}
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="dot"></a>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="dot">...</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="dot active"></span>
                    @else
                        {{-- <a href="{{ $url }}" class="dot"></a> --}}
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="dot"></a>
        @else
            {{-- <span class="dot disabled"></span> --}}
        @endif
    </div>
@endif


<style>

.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.dot {
    height: 15px;
    width: 15px;
    margin: 0 5px;
    background-color: #171447;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.3s ease;
}
.dot:hover {
    background-color: #080000;
    cursor: pointer;
}
.dot-active {
    background-color: #717171;
}
</style>
