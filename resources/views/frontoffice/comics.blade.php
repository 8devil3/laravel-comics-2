@extends('frontoffice.template.base')

@section('title', 'Official DC | Comics')


@section('mainContent')
<main>
   <section id="jumbotron">
      <img src="{{ asset('images/jumbotron.jpg') }}" alt="DC Comics">
   </section>

   <section id="comics" class="container">
      <div class="lbl">current series</div>

      @foreach ($comicsThumbs as $ct)
         <article>
            <a href="{{ route('singleComic', $ct['id']) }}">
               <img src="{{ $ct['thumb'] }}" alt="{{ $ct['series'] }}"/>
               <p class="comic-title">{{ $ct['series'] }}</p>
               <p class="comic-title">{{ $ct['price'] }}</p>
            </a>
         </article>
      @endforeach
   </section>

   <section id="blue-icons">
      <div class='container'>
         <div class="icon">
            <img src="{{ asset('/images/icons/buy-comics-digital-comics.png') }}" alt="Digital Comics">
            <p>digital comics</p>
         </div>
         <div class="icon">
            <img src="{{ asset('/images/icons/buy-comics-merchandise.png') }}" alt="Merchandise">
            <p>dc merchandise</p>
         </div>
         <div class="icon">
            <img src="{{ asset('/images/icons/buy-comics-subscriptions.png') }}" alt="Subscriptions">
            <p>subscriptions</p>
         </div>
         <div class="icon">
            <img src="{{ asset('/images/icons/buy-comics-shop-locator.png') }}" alt="Shop locator">
            <p>comic shop locator</p>
         </div>
         <div class="icon">
            <img src="{{ asset('/images/icons/buy-dc-power-visa.svg') }}" alt="Power Visa">
            <p>dc power visa</p>
         </div>
      </div>
   </section>

</main>
@endsection
