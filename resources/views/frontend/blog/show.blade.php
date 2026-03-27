<x-frontend.frontend-layout>
    <x-slot:title>{{ $blog->title }}</x-slot:title>

    {{-- Static Section Hero --}}
    <x-frontend.blog-hero title="Health Blog" />

    {{-- Article Content --}}
    <x-frontend.blog-detail.content
     :blog="$blog" 
     :blogs="$blogs" />
</x-frontend.frontend-layout>