@extends('_layouts.main')

@section('content')
    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-16">
        <article>
            <header class="mb-10">
                <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-4">
                    {{ $page->title }}
                </h1>

                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                    <time datetime="{{ $page->date }}">
                        {{ date('F j, Y', strtotime($page->date)) }}
                    </time>

                    @if($page->tags)
                        <ul class="flex flex-wrap gap-2" aria-label="Tags">
                            @foreach($page->tags as $tag)
                                <li class="px-2.5 py-0.5 bg-indigo-50 text-indigo-700 rounded-full text-xs font-medium">
                                    {{ $tag }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                @if($page->featured_image)
                    <img src="{{ $page->baseUrl }}/{{ $page->featured_image }}"
                         alt="{{ $page->title }}"
                         class="mt-8 w-full rounded-xl object-cover aspect-video">
                @endif
            </header>

            <div class="text-gray-700 leading-relaxed
                        [&>p]:mb-5
                        [&>h2]:text-2xl [&>h2]:font-bold [&>h2]:text-gray-900 [&>h2]:mt-10 [&>h2]:mb-4
                        [&>h3]:text-xl [&>h3]:font-semibold [&>h3]:text-gray-900 [&>h3]:mt-8 [&>h3]:mb-3
                        [&>ul]:mb-5 [&>ul]:list-disc [&>ul]:pl-6 [&>ul>li]:mb-1
                        [&>ol]:mb-5 [&>ol]:list-decimal [&>ol]:pl-6 [&>ol>li]:mb-1
                        [&>blockquote]:border-l-4 [&>blockquote]:border-indigo-300 [&>blockquote]:pl-4 [&>blockquote]:text-gray-600 [&>blockquote]:italic [&>blockquote]:my-6
                        [&>pre]:bg-gray-950 [&>pre]:text-gray-100 [&>pre]:rounded-xl [&>pre]:p-4 [&>pre]:overflow-x-auto [&>pre]:text-sm [&>pre]:my-6
                        [&>code]:bg-gray-100 [&>code]:text-gray-800 [&>code]:px-1.5 [&>code]:py-0.5 [&>code]:rounded [&>code]:text-sm
                        [&>img]:rounded-xl [&>img]:my-8 [&>img]:w-full
                        [&>a]:text-indigo-600 [&>a:hover]:underline">
                @yield('postBody')
            </div>
        </article>
    </div>
@endsection
