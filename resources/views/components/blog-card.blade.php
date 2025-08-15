 <article class="blog-post shadow rounded p-3 bg-white">
                        <div class="post-slider slider-sm rounded">
					           	<div class="post-image-wrapper">
                                      @if ($article->image != "")
                                      <img loading="lazy" decoding="async" src="{{ asset('storage/'.$article->image) }}" alt="Post Thumbnail">
                                       @else
                                       <img loading="lazy" decoding="async" src="{{ asset('images/placeholder.jpg') }}" alt="No image available">
                                          @endif
                                 </div>
                            
								</div>
								<div class="pt-4">
                                    <li class="list-inline-item">
                                       <a class="spotify" target="_blank" href="{{ $article->spotify_url }}">
                                       <i class="fab fa-spotify"></i>
                                       </a>
                                      </li>
                                        <li class="list-inline-item">
                                       <a class="youtube" target="_blank" href="{{ $article->youtube_url }}">
                                        <i class="fab fa-youtube" style="color: #FF0000;"></i>

                                    </a>
                                       </li>
									<p class="mb-3">{{\Carbon\Carbon::parse($article->created_at)->format('d,M,Y')}}</p>
									<h2 class="h4"><a class="text-black" wire:navigate href="{{route('blogDetails',$article->id)}}">{{$article->title}}</a></h2>
									<a wire:navigate href="{{route('blogDetails',$article->id)}}" class="text-primary fw-bold" aria-label="Read the full article by clicking here">Read More</a>
								</div>
							</article>