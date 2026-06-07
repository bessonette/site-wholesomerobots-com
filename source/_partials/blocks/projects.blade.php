<section id="projects" class="relative py-20 sm:py-28 px-4 sm:px-6">
    <div class="absolute inset-0 bg-[#e5dfd0] mix-blend-multiply pointer-events-none" aria-hidden="true"></div>

    <div class="relative max-w-6xl mx-auto">

        @if(($block['heading'] ?? false) || ($block['subheading'] ?? false))
            <div class="text-center mb-16">
                @if($block['heading'] ?? false)
                    <h2 class="text-3xl sm:text-4xl font-bold text-stone-800 mb-3">{{ $block['heading'] }}</h2>
                @endif
                @if($block['subheading'] ?? false)
                    <p class="text-stone-500 italic max-w-xl mx-auto font-serif">{{ $block['subheading'] }}</p>
                @endif
                <div class="mt-6 flex items-center justify-center gap-3">
                    <div class="h-px w-16 bg-[#948265]"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-[#948265]"></div>
                    <div class="h-px w-16 bg-[#948265]"></div>
                </div>
            </div>
        @endif

        <div class="grid md:grid-cols-3 gap-8">

            {{-- Jitney --}}
            <div class="flex flex-col items-center text-center bg-white/20 border border-[#948265]/70 p-8 hover:border-[#b87333]/60 hover:shadow-lg transition-all duration-300 shadow-sm">
                <div class="w-48 h-48 rounded-full border border-[#948265]/70 flex items-center justify-center mb-6 p-4">
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-jitney.png"
                         alt="Jitney"
                         class="w-full h-full object-contain">
                </div>
                <h3 class="text-xl font-bold text-stone-800 mb-3">Jitney</h3>
                <p class="text-stone-600 leading-relaxed text-sm flex-1 font-sans">
                    A content shuttle for the modern web. Jitney pairs a simple CMS with a static site generator, built for speed and security from the ground up.
                </p>
                <div class="mt-6 pt-6 border-t border-[#948265]/70 w-full">
                    <span class="text-xs font-semibold text-stone-500 uppercase tracking-widest">CMS &amp; Static Sites</span>
                </div>
            </div>

            {{-- LithoPixel --}}
            <div class="flex flex-col items-center text-center bg-white/20 border border-[#948265]/70 p-8 hover:border-[#b87333]/60 hover:shadow-lg transition-all duration-300 shadow-sm">
                <div class="w-48 h-48 rounded-full border border-[#948265]/70 flex items-center justify-center mb-6 p-5">
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-lithopixel.png"
                         alt="LithoPixel"
                         class="w-full h-full object-contain mix-blend-multiply">
                </div>
                <h3 class="text-xl font-bold text-stone-800 mb-3">LithoPixel</h3>
                <p class="text-stone-600 leading-relaxed text-sm flex-1 font-sans">
                    A digital asset manager and results platform for agencies, businesses, and creatives who need their work organised, accessible, and shareable.
                </p>
                <div class="mt-6 pt-6 border-t border-[#948265]/70 w-full">
                    <span class="text-xs font-semibold text-stone-500 uppercase tracking-widest">Digital Asset Management</span>
                </div>
            </div>

            {{-- Penrose Commerce --}}
            <div class="flex flex-col items-center text-center bg-white/20 border border-[#948265]/70 p-8 hover:border-[#b87333]/60 hover:shadow-lg transition-all duration-300 shadow-sm">
                <div class="w-48 h-48 rounded-full border border-[#948265]/70 flex items-center justify-center mb-6 p-4">
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-penrose.png"
                         alt="Penrose Commerce"
                         class="w-full h-full object-contain mix-blend-multiply">
                </div>
                <h3 class="text-xl font-bold text-stone-800 mb-3">Penrose Commerce</h3>
                <p class="text-stone-600 leading-relaxed text-sm flex-1 font-sans">
                    Shopify apps that enhance the experience of merchants and customers alike — thoughtful tools that make ecommerce feel effortless.
                </p>
                <div class="mt-6 pt-6 border-t border-[#948265]/70 w-full">
                    <span class="text-xs font-semibold text-stone-500 uppercase tracking-widest">Shopify Apps</span>
                </div>
            </div>

        </div>
    </div>
</section>
