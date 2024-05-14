<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <article class="py-8 max-w-screen-md">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-900">{{ $post['title'] }}</h2>

        <div class="text-base text-grey-500">
            <a href="#">{{ $post['author'] }}</a> | January 1, 2024
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 opacity-70 hover:opacity-100">Back to posts
            &laquo;</a>
    </article>
</x-layout>
