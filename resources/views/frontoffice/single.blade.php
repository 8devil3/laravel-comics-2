@extends('frontoffice.template.base')

@section('title', $title)


@section('mainContent')
<main>
   <section id="jumbotron">
      <img src="{{ asset('images/jumbotron.jpg') }}" alt="DC Comics">
   </section>

   <div id="blue-banner">
      <div class="container">
         <div class="single-thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
         </div>
      </div>
   </div>

   <section id="single">
      <div class="container">
         <div class="left">
            <h1>{{ $comic['title'] }}</h1>
            <div class="green-wrap">
               <div>
                  <div>
                     <span class="green-label">U.S. Price:&nbsp;</span><span class="green-price">{{ $comic['price'] }}</span>
                  </div>

                  <span class="green-availability">{{ $comic['available'] ? 'available' : 'not available'}}</span>
               </div>
               <select name="available">
                  <option value="0">check availability</option>
                  <option value="1">available</option>
                  <option value="2">not available</option>
               </select>
            </div>
            <p>{!! $comic['description'] !!}</p>
         </div>
         <div class="right">
            <img src="{{ asset('/images/adv.jpg') }}" alt="Adv">
         </div>
      </div>
   </section>

   <section id="comic-data">
      <div class="container">
         <div class="data-left">
            <h3>Talent</h3>
            <div class="data-row">
               <span class="comic-data-title">Art By:&nbsp;</span>
               <span class="comic-data-blue">{{ implode(', ', $comic['artists']) }}</span>
            </div>
            <div class="data-row">
               <span class="comic-data-title">Written By:&nbsp;</span>
               <span class="comic-data-blue">{{ implode(', ', $comic['writers']) }}</span>
            </div>
         </div>

         <div class="data-right">
            <h3>Specs</h3>
            <div class="data-row">
               <span class="comic-data-title">Series:&nbsp;</span>
               <span class="comic-data-blue">{{ $comic['series'] }}</span>
            </div>
            <div class="data-row">
               <span class="comic-data-title">U.S. Price:&nbsp;</span>
               <span class="comic-data-content">{{ $comic['price'] }}</span>
            </div>
            <div class="data-row">
               <span class="comic-data-title">On Sales Date:&nbsp;</span>
               <span class="comic-data-content">{{ $comic['sale_date'] }}</span>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection
