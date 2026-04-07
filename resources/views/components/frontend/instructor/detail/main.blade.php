<div class="col-lg-7">
    <div class="pt-right-content">

        <div class="coach-description mb-4">
            {!! $instructor->description !!}
        </div>

        @if($isPersonalTraining)
            <div class="divider-line my-4"></div>
            
            <x-frontend.instructor.detail.session-options :instructor="$instructor" />
        @endif

        <div class="pt-cta-inline mt-5 text-center">
            <x-frontend.whatsapp-button :text="$waText" />
        </div>

    </div>
</div>