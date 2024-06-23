@if ($paginator->hasPages())
    <nav class="flex justify-center mt-2 font-medium text-sm text-gray-800">
        <div class="flex gap-2">
            {{-- PREVIOUS BUTTON --}}
            <div>
                @if ($paginator->onFirstPage())
                    <span
                        aria-disabled="true"
                        class="flex justify-center items-center w-20 h-10 rounded-lg bg-slate-200 cursor-default"
                    >
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </span>
                @else
                    <a
                        href="{{ $paginator->previousPageUrl() }}"
                        class="flex justify-center items-center w-20 h-10 rounded-lg bg-slate-200"
                    >
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </a>
                @endif
            </div>

            {{-- PAGES ARRAY  --}}
            <div class="flex justify-evenly gap-2">
                @php
                    $totalPages = $paginator->lastPage();
                    $currentPage = $paginator->currentPage();

                    if ($totalPages <= 5) {
                        $start = 1;
                        $end = $totalPages;
                    } else {
                        if ($currentPage <= 3) {
                            $start = 1;
                            $end = 5;
                        } elseif ($currentPage > $totalPages - 3) {
                            $start = $totalPages - 4;
                            $end = $totalPages;
                        } else {
                            $start = $currentPage - 2;
                            $end = $currentPage + 2;
                        }
                    }
                @endphp

                @foreach ($paginator->getUrlRange($start, $end) as $page => $url)
                    @if ($paginator->currentPage() == $page)
                        <span
                            class="size-10  flex items-center justify-center text-white bg-slate-800 rounded-lg cursor-default"
                        >
                            {{ $page }}
                        </span>
                    @else
                        <a
                            href="{{ $url }}"
                            class="size-10 flex items-center justify-center bg-slate-200 rounded-lg"
                        >
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            </div>

            {{-- NEXT BUTTON --}}
            <div>
                @if ($paginator->onLastPage())
                    <span
                        aria-disabled="true"
                        class="flex justify-center items-center w-20 h-10 rounded-lg bg-slate-200 cursor-default"
                    >
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </span>
                @else
                    <a
                        href="{{ $paginator->nextPageUrl() }}"
                        class="flex justify-center items-center w-20 h-10 rounded-lg bg-slate-200"
                    >
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                @endif
            </div>
        </div>
    </nav>
@endif
