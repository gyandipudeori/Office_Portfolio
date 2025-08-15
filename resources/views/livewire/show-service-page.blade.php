
<div>
    <section class="section">
        <div class="container">
            <div class="row">
                
                <!-- Section title -->
                <div class="col-12 mb-5">
                    <div class="col-8 mx-auto text-center">
  				<h2 class="mb-3 text-capitalize">Our Services</h2>
  					 <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
         					 <li class="list-inline-item ">
          						  <a href="https://www.youtube.com/channel/UCucLDfzuPmowxWEnxNIa9tA" target="_blank" style="text-decoration: none; color: inherit;">
           						   <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="YouTube" style="height:24px; vertical-align:middle; margin-right:5px;">
           						 </a>
								  <span style="margin: 0 8px;">/</span>
								 <a href="https://open.spotify.com/show/3Y7es6o69ogppcxH5HJT9Z?si=nAVo0BHXTVWgxSyqgtN2Rw" target="_blank" style="text-decoration: none; color: inherit;">
            					  <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spotify" style="height:24px; vertical-align:middle; margin-right:5px;">
          						  </a>
         						 </li>
       						   <li class="list-inline-item">
           
        					  </li>
       				 </ul>
				</div>
                </div>

                <!-- Services list -->
                @php
                    $videoServices = $services->whereNotNull('video_path')->sortByDesc('created_at');
                @endphp

                @if ($videoServices->isNotEmpty())
                    @foreach ($videoServices as $service)
                        <div class="col-lg-4 col-md-6 service-item mb-4">
                            <x-service-page-card :service="$service"/>  

                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <p>No services with videos found.</p>
                    </div>
                @endif

            </div>
        </div>
    </section>
</div>


