<div class="col-lg-8">
    <div class="pt-right-content">

        @unless($isPersonalTraining)

            <x-frontend.class-meta
                :level="$instructor->level_class"
                :participants="$instructor->participants_number"
                :className="$service->name"
            />

        @endunless

        <div class="coach-description mb-4">
            {!! $instructor->description !!}
        </div>

        @if($isPersonalTraining)
            <div class="divider-line my-4"></div>
            
            <x-frontend.instructor.detail.session-options :instructor="$instructor" />
        @endif

        <div class="pt-cta-inline mt-4 text-center">
            <x-frontend.whatsapp-button :text="$waText" />
        </div>

    </div>
</div>