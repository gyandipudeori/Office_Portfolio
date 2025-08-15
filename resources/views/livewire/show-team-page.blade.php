<div>

<section class="page-header bg-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-auto">
             <div class="col-8 mx-auto text-center">
  				<h2 class="mb-3 text-capitalize">Our Team</h2>
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

 
		<div class="row position-relative">

            @if ($members->isNotEmpty())
                   @foreach ($members as $member )
                   			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">

                       <x-team-card :member="$member"/> 

                       	</div>
                       	
                   @endforeach
                @endif
				
		

		</div>
	</div>
</section>

</div>
