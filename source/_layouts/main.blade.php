<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css">
</head>
<body class="bg-stone-50 text-stone-900 antialiased">

    <a href="#main-content"
       class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-teal-600 focus:text-white focus:rounded-lg focus:text-sm focus:font-medium">
        Skip to content
    </a>

    <header class="sticky top-0 z-40 bg-stone-50/95 backdrop-blur border-b border-stone-200/80">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between gap-8">
            <a href="{{ $page->baseUrl }}/"
               class="flex items-center gap-3 shrink-0 group">
                <img src="{{ $page->baseUrl }}/assets/media/wr-logos-robot.png"
                     alt=""
                     class="h-9 w-9 transition-transform duration-200 group-hover:scale-110"
                     aria-hidden="true">
                <span class="font-semibold text-stone-900 tracking-tight">Wholesome Robots</span>
            </a>

            @if($page->navigation['primary'] ?? false)
                <nav aria-label="Primary navigation">
                    <ul class="flex items-center gap-1">
                        @foreach($page->navigation['primary'] as $item)
                            <li>
                                <a href="{{ $item['url'] }}"
                                   target="{{ $item['target'] }}"
                                   class="px-3 py-2 text-sm text-stone-500 hover:text-stone-900 hover:bg-stone-100 rounded-md transition-colors">
                                    {{ $item['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            @endif
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="border-t border-stone-200 bg-stone-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                <div>
                    <div class="flex items-center gap-2.5 mb-2">
                        <img src="{{ $page->baseUrl }}/assets/media/wr-logos-robot.png"
                             alt="Wholesome Robots"
                             class="h-6 w-6">
                        <span class="font-semibold text-stone-700 text-sm">Wholesome Robots</span>
                    </div>
                    <p class="text-xs text-stone-400">&copy; {{ date('Y') }} Wholesome Robots. All rights reserved.</p>
                </div>

                <div class="flex items-center gap-2.5">
                    <span class="text-xs text-stone-400">A subsidiary of</span>
                    <img src="{{ $page->baseUrl }}/assets/media/wr-logos-iteration7.png"
                         alt="iteration7"
                         class="h-7 w-auto mix-blend-multiply opacity-80 hover:opacity-100 transition-opacity">
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
