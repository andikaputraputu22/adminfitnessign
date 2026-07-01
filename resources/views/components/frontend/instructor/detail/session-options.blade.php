<h4 class="mb-4 pt-section-title">Session Options</h4>

<form id="sessionForm">
    <div class="pt-session-grid">

        @foreach([
            8 => $instructor->price_8_sessions,
            16 => $instructor->price_16_sessions,
            24 => $instructor->price_24_sessions,
            32 => $instructor->price_32_sessions
        ] as $session => $price)

            @if($price)
                <div class="pt-session-item">

                    <input
                        type="radio"
                        id="session{{ $session }}"
                        name="session"
                        value="{{ $session }}"
                        class="session-radio"
                        {{ $loop->first ? 'checked' : '' }}>

                    <label class="session-card" for="session{{ $session }}">
                        <h6>{{ $session }} Sessions</h6>
                    </label>

                </div>
            @endif

        @endforeach

    </div>
</form>