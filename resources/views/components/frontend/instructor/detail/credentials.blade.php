<div class="pt-credential-card">

    @if($certificates)
        <h5 class="pt-credential-title">Certified</h5>

        <ul class="pt-credential-list mb-4">
            @foreach($certificates as $certificate)
                <li>{{ $certificate }}</li>
            @endforeach
        </ul>
    @endif

    @if($specialists)
        <h5 class="pt-credential-title">Specialist</h5>

        <ul class="pt-credential-list">
            @foreach($specialists as $specialist)
                <li>{{ $specialist }}</li>
            @endforeach
        </ul>
    @endif

</div>