@php if(View::exists('home')){ @endphp
<div class="search section">
            <h2 class="section-title">Search</h2>
            <form action="index.html" method="post">
              <input
                type="text"
                name="search-term"
                class="text-input"
                placeholder="Search..."
              />
            </form>
</div>

          <div class="section topics">
            <h2 class="section-title">Popular Topics</h2>
            <ul>
              <li><a href="#"><i class="fas fa-map-pin fa-rotate-45"></i> Poems</a></li>
              <li><a href="#"><i class="fas fa-map-pin fa-rotate-45"></i> Poems</a></li>
              <li><a href="#"><i class="fas fa-map-pin fa-rotate-45"></i> Poems</a></li>
              <li><a href="#"><i class="fas fa-map-pin fa-rotate-45"></i> Poems</a></li>
              <li><a href="#"><i class="fas fa-map-pin fa-rotate-45"></i> Poems</a></li>
            </ul>
          </div>
 @php } else { @endphp
<p></p>
  @php } @endphp 
