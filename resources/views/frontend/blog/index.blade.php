<x-frontend.frontend-layout>
    <x-slot:title>Health Blog</x-slot:title>

    <x-frontend.blog-hero title="Health Blog" />

    <x-frontend.blog-list :blogs="$blogs" />
</x-frontend.frontend-layout>
