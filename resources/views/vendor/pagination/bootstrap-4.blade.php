@if ($paginator->hasPages())

        <ul class="t-list zol-pagination d-flex flex-wrap">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="zol-pagination__list disabled" aria-disabled="true"><span class="t-link zol-pagination__card">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="zol-pagination__list active" aria-current="page"><span class="t-link zol-pagination__card active">{{ $page }}</span></li>
                        @else
                            <li class="zol-pagination__list"><a class="t-link zol-pagination__card" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach


        </ul>

@endif
