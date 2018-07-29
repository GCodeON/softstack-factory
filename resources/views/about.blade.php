@extends('layouts.site', ['bodyClass' => 'about'])

@section ('content')
<header>
    @include('partials.hero-about', $hero)
</header>

<section class="grid-like">
    <div class="mission row">
        <div class="column small-12 medium-7 medium-centered text-center">
            <h3>
                 Our Mission
            </h3>
            <p>
                SoftStack Factory is a nonprofit focused on the technology job skills gap, applying an immersion bootcamp model with an on the job training spin, to train qualified young adults to meet the high demand jobs of the digital economy.
            </p>
        </div>
    </div>
    @include('partials.gear')
    <div class="team row">
        <div class="columns text-center large-6 medium-6 small-12 medium-centered text-col">
            <!-- <img src="images/magnet.svg" alt="ATTRACTIVE" /> -->
            <!-- <h3 class="section-title">SoftStack  Factory Team</h3> -->

            <!-- Should use a seperated module -->
            <div class="orbit retailer-orbit" role="region" aria-label="retailers" data-orbit>
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                        <li class="orbit-slide is-active">
                            <div class="slide-content">
                                <img class="quote" src="/images/team/harold.jpeg"></img>
                                <h3>
                                    <strong>Harold Gottschalk</strong>
                                </h3>
                                <p>Founder</p>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <img class="quote" src="/images/team/peter.jpg"></img>
                                <h3>
                                    <strong>Peter Horton</strong>
                                </h3>
                                <p>Program Director</p>
                            </div>
                        </li>

                        <li class="orbit-slide">
                            <div class="slide-content">
                                <img class="quote" src="/images/team/julia.jpeg"></img>
                                <h3>
                                    <strong>Julia Gottschalk</strong>
                                </h3>
                                <p>Executive Assistant</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <nav class="orbit-bullets">
                    <button data-slide="0"><span class="show-for-sr">First slide details.</span></button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                </nav>
            </div>
        </div>
    </div>
    <div class="involve row">
        <div class="column medium-7">
        <h3>
                More than a Coding Bootcamp!
            </h3>
            <p>
                SoftStack Factory is a network of students, volunteers, sponsors and partners empowering the local San Diego community.
            </p>
            <a href="/get-involved" class="button">Get Involved</a>
        </div>
        <div class="column medium-5 hide-for-small-only">
            <img src="/images/banner-img-volunteer.png" alt="" />
        </div>
    </div>

</section>
@stop