<x-frontend.frontend-layout>
    <x-slot:title>Blog</x-slot:title>

    <x-frontend.blog-hero title="Blog" />

    <x-frontend.blog-list :blogs="$blogs" />
</x-frontend.frontend-layout>
