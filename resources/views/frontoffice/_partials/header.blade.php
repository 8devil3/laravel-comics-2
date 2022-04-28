<header>
   <div class='container'>
      <img src="{{ asset('/images/dc-logo.png') }}" alt="DC logo">
      <nav>
        <a href="{{ route('characters') }}" class="{{ Route::current()->getName() == 'characters' ? 'active' : '' }}"><span>characters</span></a>

        <a href="{{ route('comics') }}" class="{{ Route::current()->getName() == 'comics' ? 'active' : '' }}"><span>comics</span></a>

        <a href="{{ route('movies') }}" class="{{ Route::current()->getName() == 'movies' ? 'active' : '' }}"><span>movies</span></a>

        <a href="{{ route('games') }}" class="{{ Route::current()->getName() == 'games' ? 'active' : '' }}"><span>games</span></a>

        <a href="{{ route('collectibles') }}" class="{{ Route::current()->getName() == 'collectibles' ? 'active' : '' }}"><span>collectibles</span></a>

        <a href="{{ route('videos') }}" class="{{ Route::current()->getName() == 'videos' ? 'active' : '' }}"><span>videos</span></a>

        <a href="{{ route('fans') }}" class="{{ Route::current()->getName() == 'fans' ? 'active' : '' }}"><span>fans</span></a>

        <a href="{{ route('news') }}" class="{{ Route::current()->getName() == 'news' ? 'active' : '' }}"><span>news</span></a>

        <a href="{{ route('shop') }}" class="{{ Route::current()->getName() == 'shop' ? 'active' : '' }}"><span>shop</span></a>
      </nav>
    </div>
</header>
