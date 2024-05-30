@if ($paginator->hasPages())
    <ul class="pagination pagination-rounded justify-content-center mt-4">
        {{-- previous page link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link" href="javascript:;">Prev</a></li>
        @else
            <li class="page-item"><a class="page-link" href="javascript:;" rel="prev" wire:click="previousPage">Prev</a>
            </li>
        @endif

        {{-- pagination element here --}}
        @foreach ($elements as $element)
            {{-- make dots here --}}
            @if (is_string($element))
                <li class="page-item disabled"><a class="page-link"><span>{{ $element }}</span></a></li>
            @endif
            {{-- links array here --}}
            @if (is_array($elements))
                @foreach ($element as $page->$url)
                    @if ($page == $paginator->currentPage())
                        <li aria-current="page" class="page-item active"><a class="page-link" href="javascript:;"
                                wire:click="gotoPage({{ $page }})"><span>{{ $page }}</span></a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="javascript:;"
                                wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- next page link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="javascript:;" wire:click="nextPage">Next</a></li>
        @else
            <li class="page-item disabled"><a class="page-link" href="javascript:;">Next</a></li>
        @endif
    </ul>
@endif
