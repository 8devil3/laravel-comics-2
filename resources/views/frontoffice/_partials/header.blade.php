<header>
   <div class='container'>
      <img src="{{ asset('/images/dc-logo.png') }}" alt="DC logo">
      <nav>
        <a href="#"><span>characters</span></a>

        <a href="{{ route('comics') }}" class="{{ Route::current()->getName() == 'comics' || Route::current()->getName() == 'singleComic' ? 'active' : '' }}"><span>comics</span></a>

        <a href="#"><span>movies</span></a>

        <a href="#"><span>games</span></a>

        <a href="#"><span>collectibles</span></a>

        <a href="#"><span>videos</span></a>

        <a href="#"><span>fans</span></a>

        <a href="#"><span>news</span></a>

        <a href="#"><span>shop</span></a>
      </nav>
    </div>
</header>
