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
            <img src="" alt="icon.text">
            <p>{{ icon.text }}</p>
         </div>
      </div>
   </section>

</main>
@endsection
