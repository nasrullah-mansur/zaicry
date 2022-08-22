@if ($paginator->hasPages())
<nav>
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li><a href="javascript::void()"><i class="page-item disabled fas fa-angle-left"></i></a></li>
        </li>
        @else
        <li class="page-item">
        <li><a href="{{ $paginator->previousPageUrl() }}"><i class="page-item disabled fas fa-angle-left"></i></a></li>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true"><span class="">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="active" aria-current="page"><a href="javascrirpt::void()"><span class="">{{ $page }}</span></a></li>
        @else
        <li class="page-item"><a class="" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
        @else

        <li><a href="javascript::void()"><i class="fas fa-angle-right"></i></a></li>


        @endif
    </ul>
</nav>
@endif