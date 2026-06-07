<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Josefin+Sans:wght@400;600;700&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css">
    <style type="text/tailwindcss">
        @theme {
            --font-family-sans: 'Josefin Sans', ui-sans-serif, system-ui, sans-serif;
            --font-family-serif: 'Libre Baskerville', ui-serif, Georgia, serif;
        }
        body { font-family: var(--font-family-sans); }
        h1, h2, h3 { font-family: var(--font-family-serif); }
    </style>
</head>
<body class="text-stone-900 antialiased">

    <a href="#main-content"
       class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-teal-600 focus:text-white focus:rounded-lg focus:text-sm focus:font-medium">
        Skip to content
    </a>

    <div class="absolute h-16 w-full bg-[#948265]"></div>

    <header class="sticky top-0 z-40 bg-[#ddd6c4]/40 backdrop-blur-md border-b border-[#c8bfa8]/50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-center">
            <a href="{{ $page->baseUrl }}/"
               class="flex items-center gap-3 shrink-0 group">
                <span class="font-semibold text-stone-800 tracking-widest uppercase text-sm">Wholesome</span>
                <img src="{{ $page->baseUrl }}/assets/media/wr-logos-robot-bulb.png"
                     alt=""
                     class="h-9 w-9 transition-transform duration-200 group-hover:scale-110"
                     aria-hidden="true">
                <span class="font-semibold text-stone-800 tracking-widest uppercase text-sm">Robots</span>
            </a>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="relative border-t border-[#948265]/70">
        <div class="absolute inset-0 bg-[#ddd6c4] mix-blend-multiply pointer-events-none" aria-hidden="true"></div>
        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 py-12">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                <div>
                    <div class="flex items-center gap-2.5 mb-2">
                        <span class="font-semibold text-stone-700 text-sm tracking-widest uppercase">Wholesome</span>
                        <img src="{{ $page->baseUrl }}/assets/media/wr-logos-robot-bulb.png"
                             alt="Wholesome Robots"
                             class="h-6 w-6">
                        <span class="font-semibold text-stone-700 text-sm tracking-widest uppercase">Robots</span>
                    </div>
                    <p class="text-xs text-stone-500">&copy; {{ date('Y') }} Wholesome Robots. All rights reserved.</p>
                </div>

                <div class="flex items-center gap-2.5">
                    <span class="text-xs text-stone-500 italic">A subsidiary of</span>
                    <a href="https://iteration7.com"
                       class="text-xs font-semibold text-stone-500 uppercase tracking-widest hover:text-stone-700 transition-colors" target="_blank"> 
                        <img src="{{ $page->baseUrl }}/assets/media/wr-logos-iteration7.png"
                         alt="iteration7"
                         class="h-7 w-auto mix-blend-multiply hover:opacity-80 transition-opacity">
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
