<section id="projects" class="py-20 sm:py-28 px-4 sm:px-6 bg-white">
    <div class="max-w-6xl mx-auto">

        @if(($block['heading'] ?? false) || ($block['subheading'] ?? false))
            <div class="text-center mb-16">
                @if($block['heading'] ?? false)
                    <h2 class="text-3xl sm:text-4xl font-bold text-stone-900 mb-4">{{ $block['heading'] }}</h2>
                @endif
                @if($block['subheading'] ?? false)
                    <p class="text-stone-500 text-lg max-w-xl mx-auto">{{ $block['subheading'] }}</p>
                @endif
            </div>
        @endif

        <div class="grid md:grid-cols-3 gap-8">

            {{-- Jitney --}}
            <div class="group flex flex-col bg-stone-50 rounded-2xl p-8 border border-stone-100 hover:border-teal-200 hover:shadow-lg transition-all duration-300">
                <div class="h-24 flex items-center mb-6">
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-jitney.png"
                         alt="Jitney"
                         class="h-16 w-auto object-contain">
                </div>
                <h3 class="text-xl font-bold text-stone-900 mb-3">Jitney</h3>
                <p class="text-stone-500 leading-relaxed text-sm flex-1">
                    A content shuttle for the modern web. Jitney pairs a simple CMS with a static site generator, built for speed and security from the ground up.
                </p>
                <div class="mt-6 pt-6 border-t border-stone-200">
                    <span class="inline-flex items-center text-xs font-medium text-teal-700 bg-teal-50 px-2.5 py-1 rounded-full">
                        CMS &amp; Static Sites
                    </span>
                </div>
            </div>

            {{-- LithoPixel --}}
            <div class="group flex flex-col bg-stone-50 rounded-2xl p-8 border border-stone-100 hover:border-violet-200 hover:shadow-lg transition-all duration-300">
                <div class="h-24 flex items-center mb-6">
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-lithopixel.png"
                         alt="LithoPixel"
                         class="h-10 w-auto object-contain">
                </div>
                <h3 class="text-xl font-bold text-stone-900 mb-3">LithoPixel</h3>
                <p class="text-stone-500 leading-relaxed text-sm flex-1">
                    A digital asset manager and results platform for agencies, businesses, and creatives who need their work organised, accessible, and shareable.
                </p>
                <div class="mt-6 pt-6 border-t border-stone-200">
                    <span class="inline-flex items-center text-xs font-medium text-violet-700 bg-violet-50 px-2.5 py-1 rounded-full">
                        Digital Asset Management
                    </span>
                </div>
            </div>

            {{-- Penrose Commerce --}}
            <div class="group flex flex-col bg-stone-50 rounded-2xl p-8 border border-stone-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300">
                <div class="h-24 flex items-center mb-6">
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-penrose.png"
                         alt="Penrose Commerce"
                         class="h-20 w-auto object-contain">
                </div>
                <h3 class="text-xl font-bold text-stone-900 mb-3">Penrose Commerce</h3>
                <p class="text-stone-500 leading-relaxed text-sm flex-1">
                    Shopify apps that enhance the experience of merchants and customers alike — thoughtful tools that make ecommerce feel effortless.
                </p>
                <div class="mt-6 pt-6 border-t border-stone-200">
                    <span class="inline-flex items-center text-xs font-medium text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full">
                        Shopify Apps
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>
