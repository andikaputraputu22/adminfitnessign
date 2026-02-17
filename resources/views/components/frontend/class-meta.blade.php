@props(['level', 'participants'])

<div class="class-meta d-flex gap-4 mt-3">
  <div class="meta-item">
    <i class="bi bi-star-fill text-success me-2"></i>
    {{ ucfirst($level) }}
  </div>
  <div class="meta-item">
    <i class="bi bi-people-fill text-success me-2"></i>
    Maks {{ $participants }} peserta
  </div>
</div>
