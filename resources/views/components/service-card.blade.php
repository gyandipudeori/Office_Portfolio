<div class="col-lg-4 col-md-6 service-item mb-4">
    <a class wire navigate href="{{ route('servicePage', $service->id )}}">
        <div class="block p-4 border rounded shadow-sm h-100">
                                <!-- Icon class -->
                                <div class="mb-3">
                                    <i class="{{ $service->icon_class }}"></i>
                                </div>

                                <!-- Title -->
                                <h3 class="mb-3" style="color: navy;">{{ $service->title }}</h3>

                                <!-- Short Description -->
                                <p> {{ $service->short_desc }}</p>
                                <!-- Video -->
                                   @if ($service->video_path)
                                     <div class="mt-3" style="width: 2.7in; height: 2.7in; max-width: 100%; overflow: hidden; margin: 0 auto;">
                                       <video style="width: 100%; height: 100%; object-fit: cover;" controls>
                                         <source src="{{ asset('storage/' . $service->video_path) }}" type="video/mp4">
                                              Your browser does not support the video tag.
                                         </video>
                                      </div>
                                @endif


                                <!-- Full Description -->
                                <p> {!! $service->description !!}</p>

        </div>
    </a>
    </div>