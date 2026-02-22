@props([
  'text',
  'number' => '6289637883174'
])

<form 
  action="https://wa.me/{{ $number }}"
  method="GET"
  target="_blank"
  class="mt-4"
>
  <input type="hidden" name="text" id="waTextInput" value="{{ $text }}" data-base-text="{{ $text }}">
  <button id="waSubmit" class="btn btn-success px-4 py-2">
    BOOK NOW
  </button>
</form>