<div class="block p-4 border rounded shadow-sm h-100">
    <!-- Icon -->
    <div class="mb-3">
        <i class="{{ $service->icon_class }}" style="font-size: 2rem;"></i>
    </div>

    <!-- Title -->
    <h3 class="mb-3" style="color: navy;">{{ $service->title }}</h3>

    <!-- Short Description -->
    <p>{{ $service->short_desc }}</p>

    <!-- Video -->
    @if ($service->video_path)
        <div class="mt-3" style="width: 2.7in; height: 2.7in; max-width: 100%; overflow: hidden; margin: 0 auto; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <video style="width: 100%; height: 100%; object-fit: cover;" controls>
        <source src="{{ asset('storage/' . $service->video_path) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

    @endif

    <!-- Full Description -->
    <div class="mb-3">
        {!! $service->description !!}
    </div>

    <!-- View Details Button -->
    <a class="btn btn-sm btn-outline-primary" wire:navigate href="{{ route('servicePage', $service->id) }}">
        View Details <i class="las la-arrow-right ms-1"></i>
    </a>
</div>
