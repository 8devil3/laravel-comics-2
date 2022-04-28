@extends('frontoffice.template.base')

@section('title', $title)


@section('mainContent')
<main>
   <section id="jumbotron">
      <img src="{{ asset('images/jumbotron.jpg') }}" alt="DC Comics">
   </section>

   <div class="blue-banner">
      <div class="single-thumb">
         <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
      </div>
   </div>

   <section id="single" class="container">
      <h1>{{ $comic['title'] }}</h1>
      <p>{!! $comic['description'] !!}</p>
   </section>

   <section id="comic-data">
      <div class="container">
         <div>
            <h2>Talent</h2>
            <div>
               <p class="comic-data-title">Art By: </p>
               <p class="comic-data-content">{{ implode(', ', $comic['artists']) }}</p>
            </div>
            <div>
               <p class="comic-data-title">Written By: </p>
               <p class="comic-data-content">{{ implode(', ', $comic['writers']) }}</p>
            </div>
         </div>

         <div>
            <h2>Specs</h2>
            <div>
               <p class="comic-data-title">Series: </p>
               <p class="comic-data-content">{{ $comic['series'] }}</p>
            </div>
            <div>
               <p class="comic-data-title">U.S. Price: </p>
               <p class="comic-data-content">{{ $comic['price'] }}</p>
            </div>
            <div>
               <p class="comic-data-title">On Sales Date: </p>
               <p class="comic-data-content">{{ $comic['sale_date'] }}</p>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection
