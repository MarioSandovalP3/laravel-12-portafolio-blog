

    @if ($paginator->hasPages())

        <nav>

            <ul class="pagination">

                {{-- Previous Page Link --}}

                @if ($paginator->onFirstPage())

                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">

                        <span class="page-link" aria-hidden="true">‹</span>

                    </li>

                @else

                    <li class="page-item">

                        <button type="button" dusk="previousPage" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">Anterior</button>

                    </li>

                @endif



                {{-- Pagination Elements --}}

                @foreach ($elements as $element)

                    {{-- "Three Dots" Separator --}}

                    @if (is_string($element))

                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>

                    @endif



                    {{-- Array Of Links --}}

                    @if (is_array($element))

                        @foreach ($element as $page => $url)

                            @if ($page == $paginator->currentPage())

                                <li class="page-item active" wire:key="paginator-page-{{ $page }}" aria-current="page"><span class="page-link">{{ $page }}</span></li>

                            @else

                                <li class="page-item" wire:key="paginator-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>

                            @endif

                        @endforeach

                    @endif

                @endforeach



                {{-- Next Page Link --}}

                @if ($paginator->hasMorePages())

                    <li class="page-item">

                        <button type="button" dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">Próximo</button>

                    </li>

                @else

                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">

                        <span class="page-link" aria-hidden="true">›</span>

                    </li>

                @endif

            </ul>

        </nav>

    @endif

