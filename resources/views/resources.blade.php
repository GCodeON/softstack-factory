@extends('layouts.site', ['bodyClass' => 'resources'])

@section ('content')
    <header>
        <div class="row text-center">
            <h1 class="small-12 columns">Resources</h1>
        </div>
    </header>

    <section class="ecig-resources no-padding">
        <div class="row">
            <h2 class="small-12 columns">Video</h2>
        </div>
        <div class="row">
            @foreach($videoCards as $cards)
                @include('partials.nav-card', $cards)
            @endforeach
        </div>
    </section>

    <section class="ecig-resources no-padding">
        <div class="row">
            <h2 class="small-12 columns">Ecig</h2>
        </div>
        <div class="row">
            @foreach($ecigCards as $cards)
                @include('partials.nav-card', $cards)
            @endforeach
        </div>
    </section>

    <section class="flavored-tobacco-resources no-padding">
        <div class="row">
            <h2 class="small-12 columns">Flavored Tobacco</h2>
        </div>
        <div class="row">
            @foreach($flavoredCards as $cards)
                @include('partials.nav-card', $cards)
            @endforeach
        </div>
    </section>

    <section class="general-resources no-padding">
        <div class="row">
            <h2 class="small-12 columns">Retailer</h2>
        </div>
        <div class="row">
            @foreach($generalCards as $cards)
                @include('partials.nav-card', $cards)
            @endforeach
        </div>
    </section>

    <section class="past-resources no-padding">
        <div class="row">
            <h2 class="small-12 columns">Additional</h2>
        </div>
        <div class="row">
            @foreach($pastCards as $cards)
                @include('partials.nav-card', $cards)
            @endforeach
        </div>
    </section>



@stop