<h4 class="mb-4 pt-section-title">Session Options</h4>

<form id="sessionForm">
    <div class="pt-session-grid">

        @foreach([
            4 => $instructor->price_4_sessions,
            8 => $instructor->price_8_sessions,
            16 => $instructor->price_16_sessions,
            24 => $instructor->price_24_sessions
        ] as $session => $price)

            @if($price)
                <div class="pt-session-item">

                    <input
                        type="radio"
                        id="session{{ $session }}"
                        name="session"
                        value="{{ $session }}"
                        class="session-radio">

                    <label class="session-card" for="session{{ $session }}">
                        <h6>{{ $session }} Sessions</h6>
                        <p>Rp {{ number_format($price,0,',','.') }}</p>
                    </label>

                </div>
            @endif

        @endforeach

    </div>
</form>