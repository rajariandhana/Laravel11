<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <section class="bg-white dark:bg-gray-900"> --}}
    <div class="max-w-screen-xl py-4 mx-auto lg:py-4 lg:px-0">
        <div class="grid gap-8 px-4 lg:grid-cols-3 md:grid-cols-2">
            @foreach ($posts as $post)
                {{-- <article class="max-w-screen-md py-8 border-b border-gray-300">
                        <a href="/posts/{{$post['slug']}}" class="hover:underline">
                            <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
                        </a>
                        <div>
                            By
                            <a href="/authors/{{$post->author->username}}" class="hover:underline">{{ $post->author->name }}</a>
                            in
                            <a href="/categories/{{$post->category->slug}}" class="text-base text-gray-500 hover:underline">{{$post->category->name }}</a>
                            | {{$post->created_at->format('j F Y') }}
                        </div>
                        <p class="my-4 font-light">
                            {{ Str::limit($post['body'], 100) }}
                        </p>
                        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
                    </article> --}}
                <article
                    class="p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <a href="/categories/{{ $post->category->slug }}">
                            <span
                                class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $post->category->slug }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->format('j F Y') }}</span>
                    </div>
                    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $post['title'] }}
                        </h2>

                    </a>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        {{ Str::limit($post['body'], 100) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="/authors/{{$post->author->username}}">
                            <div class="flex items-center space-x-3">
                                <img class="rounded-full w-7 h-7"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                    alt="{{ $post->author->name }}" />
                                <span class="text-xs font-medium dark:text-white">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                        </a>
                        <a href="/posts/{{ $post->slug }}"
                            class="inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach

        </div>
    </div>
    {{-- </section> --}}

</x-layout>
