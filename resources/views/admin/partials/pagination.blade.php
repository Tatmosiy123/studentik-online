@if ($paginate->hasPages())
    <div class="ht-80 d-flex align-items-center justify-content-center mg-t-20">
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm float-right">
                @if ($paginate->onFirstPage())
                    <li class="page-item disabled"><span class="page-link"> &laquo; </span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $paginate->previousPageUrl() }}" rel="prev"> &laquo; </a></li>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginate->currentPage())
                                <li class="page-item active my-active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginate->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $paginate->nextPageUrl() }}" rel="next"> &raquo; </a></li>
                @else
                    <li class="page-item disabled"><span class="page-link"> &raquo; </span></li>
                @endif
            </ul>
        </nav>
    </div>
@endif
