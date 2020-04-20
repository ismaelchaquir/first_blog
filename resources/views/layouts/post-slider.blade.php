
<h1 class="slider-title">Trending Posts</h1>

        <i class="fas fa-chevron-left prev"></i>
        <div class="post-wrapper">

         @foreach($post_carousel as $post)
          <div class="post">
            <img
              src="{{Storage::disk('local')->url($post->image)}}"
              alt="post image"
              class="slider-image"
            />
            <div class="post-info">
              <h4 class="h4-size">
                <a href="single.html"
                  >{{ str_limit(strip_tags($post->title), 50)   }}</a
                >
              </h4>
              <i class="fas fa-user"> Awa Malvine</i>
              &nbsp;
              <i class="fas fa-calendar"> {{$post->created_at->now()->format('M Y')}}</i>
            </div>
          </div>
          @endforeach

         

        </div>

        <i class="fas fa-chevron-right next"></i>

     
