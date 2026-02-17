<x-frontend.frontend-layout>
    <x-slot:title>{{ $blog->title }}</x-slot:title>

    <x-frontend.blog-detail.hero :title="$blog->title" />

    <x-frontend.blog-detail.content :blog="$blog" />
</x-frontend.frontend-layout>
