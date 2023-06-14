@extends('layouts.frontend')

@section('content')
 <!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <section class="islands swiper-slide">
              <img src="{{ asset('frontend/assets/img/desertpic.jpg') }}" alt="" class="islands__bg" />

              <div class="islands__container container">
                <div class="islands__data">
                  <h1 class="islands__title">Offers</h1>
                  <h2 class="islands__subtitle">In the mountains, in town or in the countryside, as a couple, in a group or with the family... we offer you the most interesting offers for your stays in Ouarzazate. Get inspired and book your next adventure.</h2>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <!--==================== POPULAR ====================-->
      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center">All</span>
          <h2 class="section__title" style="text-align: center">
            OFFERS
          </h2>

          <div class="popular__all">
            @foreach($travel_packages as $travel_package)
                <article class="popular__card">
                <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                    <img
                    src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                    alt=""
                    class="popular__img"
                    />
                    <div class="popular__data">
                    <h2 class="popular__price"><span>$</span>{{ number_format($travel_package->price,2) }}</h2>
                    <h3 class="popular__title">{{ $travel_package->location }}</h3>
                    <p class="popular__description">{{ $travel_package->type }}</p>
                    </div>
                </a>
                </article>
            @endforeach
          </div>
        </div>
      </section>
@endsection