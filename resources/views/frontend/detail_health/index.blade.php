<x-frontend.frontend-layout>
    <x-slot:title>{{ $blog->title }}</x-slot:title>

    <x-frontend.blog-hero title="Health Blog" />

    <x-frontend.blog-detail.content :blog="$blog" />
</x-frontend.frontend-layout>