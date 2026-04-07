<div class="col-lg-5">

    <img
        src="{{ $instructor->photo }}"
        class="img-detail-coach rounded-4 mb-3"
        alt="{{ $instructor->name }}">

    <div class="pt-coach-name">
        {{ strtoupper($instructor->name) }}
    </div>

    @if($certificates || $specialists)
        <x-frontend.instructor.detail.credentials
            :certificates="$certificates"
            :specialists="$specialists"
        />
    @endif

</div>