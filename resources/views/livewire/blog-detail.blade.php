<div>
<div class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="mb-5">
          <h2 class="mb-4" style="line-height:1.5">{{$article->title}}</h2>
          <span>{{\Carbon\Carbon::parse($article->created_at)->format('d,M,Y')}} <span class="mx-2">/</span> </span>
          <p class="list-inline-item">Category : <a href="#!" class="ml-1">{{$article->category_name}} </a>
          </p>
           {{-- <p class="list-inline-item">Author : <a href="#!" class="ml-1">{{$article->author}} </a>
          </p> --}}
          {{-- <p class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!"
              class="ml-1">Image </a>
          </p> --}}
        </div>
      @if ($article->image != "")       
  <div class="mb-5 text-center">
    <div class="post-slider rounded overflow-hidden" style="max-width: 90%; max-height: 400px; margin: auto;">
      <img
        loading="lazy"
        decoding="async"
        src="{{ asset('storage') . '/' . $article->image }}"
        alt="Post Thumbnail"
        style="
          width: 100%;
          max-height: 500px;
          object-fit: cover;
          border-radius: 8px;
          box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        "
      >      
    </div>
    <div class="text-center mt-4">
  <ul class="list-inline d-flex justify-content-center gap-3" style="list-style: none; padding-left: 0;">
    <li class="list-inline-item">
      <a class="spotify" target="_blank" href="{{ $article->spotify_url }}" style="font-size: 32px; color: #1DB954;">
        <i class="fab fa-spotify"></i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="youtube" target="_blank" href="{{ $article->youtube_url }}" style="font-size: 32px; color: #FF0000;">
        <i class="fab fa-youtube"></i>
      </a>
    </li>
  </ul>
</div>

  </div>
@endif

        <div class="content">

          {!!  $article->content !!}
        </div>
      </div>
    </div>
  </div>
</div></div>
