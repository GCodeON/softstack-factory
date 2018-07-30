@extends('layouts.site', ['bodyClass' => 'program'])

@section ('content')
<header>
    @include('partials.hero', $hero)
</header>

<section class="control-act">
    <div class="row">
        <div class="column info-col small-12 large-10 large-centered">
            <div class="center-content">
                <div class="row ">
                    <div class="column small-12 medium-8 medium-offset-2">

                        <h3 class="section-title font-32 text-center">SOFTSTACK FACTORY<br>CODING BOOTCAMP</h3>
                        <hr/>
                        <p class="text-center"><strong> Program Overview:</strong></p>

                    </div>
                </div>
                <div class="row stats-row">
                    <div class="columns large-3  small-8 small-centered">
                        <h2 class="stat-header text-center margin-bottom-1">JS/HTML/CSS</h2>
                        <p class="fact lead text-center">Learn programming fundamentals using Vanilla Javascript and basic HTML/CSS.</p>
                    </div>
                    <div class="columns large-3 small-8 small-centered">
                        <h2 class="stat-header text-center margin-bottom-1">MEAN Stack</h2>
                        <p class="fact lead text-center">Create single page apps using a the MEAN Stack.</p>
                    </div>
                    <div class="columns large-3 small-8 small-centered">
                        <h2 class="stat-header text-center margin-bottom-1">Ionic Framework</h2>
                        <p class="fact lead text-center">Learn how to create a hyrbid application.</p>
                    </div>
                    <div class="columns large-3 small-8 small-centered">
                        <h2 class="stat-header text-center margin-bottom-1">Ionic App</h2>
                        <p class="fact lead text-center">Collaborate to create a cross-platform application.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="connect">
    @include('partials.content-links')
</section> -->

@stop