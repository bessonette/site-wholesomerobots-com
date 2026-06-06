<section class="relative overflow-hidden">
    {{-- Background color blends with paper; content sits above on z-10 so it's unaffected --}}
    <div class="absolute inset-0 bg-[#e5dfd0] mix-blend-multiply pointer-events-none" aria-hidden="true"></div>

    <div class="relative z-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-20 sm:py-28 lg:py-36">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div class="max-w-2xl">
                    @if($block['heading'] ?? false)
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-stone-900 mb-6 leading-tight">
                            {{ $block['heading'] }}
                        </h1>
                    @endif

                    @if($block['subheading'] ?? false)
                        <p class="text-lg sm:text-xl text-stone-600 mb-10 leading-relaxed font-sans">
                            {{ $block['subheading'] }}
                        </p>
                    @endif

                    @if(($block['cta_label'] ?? false) && ($block['cta_url'] ?? false))
                        <a href="{{ str_starts_with($block['cta_url'], 'http') ? $block['cta_url'] : $page->baseUrl . $block['cta_url'] }}"
                           class="inline-flex items-center gap-2 px-7 py-3.5 bg-stone-800 hover:bg-stone-700 text-[#ede8da] font-semibold uppercase tracking-widest transition-colors text-xs shadow-md">
                            {{ $block['cta_label'] }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif
                </div>

                <div class="flex justify-center lg:justify-end order-first lg:order-last">
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-robot.png"
                         alt="Wholesome Robots"
                         class="w-52 sm:w-72 lg:w-88 xl:w-96 drop-shadow-2xl select-none">
                </div>

            </div>
        </div>

        {{-- Vintage divider --}}
        <div class="max-w-6xl mx-auto px-4 sm:px-6 pb-2">
            <div class="border-t border-[#c8bfa8]/50"></div>
        </div>
    </div>
</section>
