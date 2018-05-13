@extends('layouts.site', ['bodyClass' => 'resources'])

@section ('content')
    <header>
        <h1>Resources</h1>
    </header>

    <section class="general-resources">
        <h2>General Resources</h2>
        <div class="row">
            @foreach($generalCards as $cards)
                <div class="column">
                    @include('partials.nav-card', $cards)
                </div>
            @endforeach
        </div>


    </section>

    <section class="flavored-tobacco-resources">
        <h2>Flavored Tobacco Resources</h2>
        <div class="row">
            @foreach($flavoredCards as $cards)
                <div class="column">
                    @include('partials.nav-card', $cards)
                </div>
            @endforeach
        </div>
    </section>


    <hr class="bottom">
@stop