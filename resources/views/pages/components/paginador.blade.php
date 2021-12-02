@php
    $link_limit = 6;
@endphp

@if ($paginator -> lastPage() > 1)
    <ul class="pagination">
        <li class="page-item {{ ($paginator -> currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $paginator -> url(1) }}"> < </a>
         </li>
        @for ($i = 1; $i <= $paginator -> lastPage(); $i++)
            @php
                $half_total_links = floor($link_limit / 2);
                $from = $paginator -> currentPage() - $half_total_links;
                $to = $paginator -> currentPage() + $half_total_links;

                if ($paginator -> currentPage() < $half_total_links) {
                    $to += $half_total_links - $paginator -> currentPage();
                }

                if ($paginator -> lastPage() - $paginator -> currentPage() < $half_total_links) {
                    $from -= $half_total_links - ($paginator -> lastPage() - $paginator -> currentPage()) - 1;
                }
            @endphp

            @if ($from < $i && $i < $to)
                <li class="page-item {{ ($paginator -> currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $paginator -> url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="page-item {{ ($paginator -> currentPage() == $paginator -> lastPage()) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $paginator -> url($paginator -> lastPage()) }}"> > </a>
        </li>
    </ul>
@endif