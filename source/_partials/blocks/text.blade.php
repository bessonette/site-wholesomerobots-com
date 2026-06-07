<section class="relative py-16 sm:py-16 px-4 sm:px-6">
    <div class="absolute inset-0 bg-[#e5dfd0] mix-blend-multiply pointer-events-none" aria-hidden="true"></div>
    <div class="relative z-10 max-w-2xl mx-auto text-center">

        {{-- Decorative large opening quotation mark --}}
        <div class="font-serif text-[9rem] leading-[0.25] text-[#948265]/60 select-none mb-4" aria-hidden="true">&ldquo;</div>

        {{-- Content --}}
        <div class="font-serif text-stone-700 leading-relaxed
                    [&>p]:mb-5 [&>p]:text-xl [&>p]:italic
                    [&>p:last-child]:not-italic [&>p:last-child]:font-sans [&>p:last-child]:text-sm [&>p:last-child]:text-stone-500 [&>p:last-child]:tracking-wide [&>p:last-child]:mt-8 [&>p:last-child]:mb-0
                    [&>h2]:text-2xl [&>h2]:font-bold [&>h2]:not-italic [&>h2]:text-stone-800 [&>h2]:mt-10 [&>h2]:mb-4
                    [&>h3]:text-xl [&>h3]:font-semibold [&>h3]:not-italic [&>h3]:text-stone-800 [&>h3]:mt-8 [&>h3]:mb-3
                    [&>ul]:mb-5 [&>ul]:list-disc [&>ul]:pl-6 [&>ul>li]:mb-1 [&>ul]:not-italic [&>ul]:text-left
                    [&>ol]:mb-5 [&>ol]:list-decimal [&>ol]:pl-6 [&>ol>li]:mb-1 [&>ol]:not-italic [&>ol]:text-left
                    [&>blockquote]:border-l-4 [&>blockquote]:border-[#b87333]/50 [&>blockquote]:pl-4 [&>blockquote]:text-stone-600 [&>blockquote]:italic [&>blockquote]:my-6 [&>blockquote]:text-left
                    [&_a]:underline [&_a:hover]:underline">
            {!! $block['content'] ?? '' !!}
        </div>
    </div>
</section>
