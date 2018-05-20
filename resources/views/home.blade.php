@extends('layouts.site', ['bodyClass' => 'home'])

@section ('content')
    <header>
        @include('partials.home-hero', $hero)
    </header>

    <section class="two-in-three-youth">
        <div class="row">
            <div class="columns text-center large-7 medium-8 small-12 medium-centered">
                <img src="/images/logo_vertical.jpg" class="banner-img-passion" alt="">
                <p>
                    So you want to start a career in the Technology industry? If you are motivated and want to find a new passion for software development SoftStack Factory maybe the program for you!
                </p>
                <a href="/get-the-facts" class="button">Learn more</a>
            </div>
        </div>
    </section>

    <a name="get-involved"></a>
    <section class="get-involved" data-analytics-label="getinvolvedandsupport" data-analytics-category="digital experience">
        <div class="row">
            <div class="columns text-center large-8 medium-10 small-12 medium-centered">
                <h2 class="section-title">Student Testimonals</h2>
                <p class="margin-1 margin-bottom-2">Learn how SoftStack Factory impacts the local San Diego community.</p>
            </div>
        </div>
        @include('partials.involved-cards', $cards)

        <div class="row">
            <div class="columns text-center large-10 medium-10 small-12 medium-centered">
                <support-form></support-form>
            </div>
        </div>

    </section>


    <a name="need-your-help"></a>
    <section class="need-your-help">
        <div class="section-content">
            <div class="row">
                <div class="columns text-center large-6 large-offset-6 small-12">
                    <h3 class="section-title h3" data-analytics-visibility
                        data-analytics-label="home-vermontyouthneedyourhelp"
                        data-analytics-category="fact"
                        data-analytics-action="element visible">
                        Get your yourself <br>in gear!
                    </h3>
                    <p class="main-fact">
                        Because of the increasing demand for software developers, digital economy jobs provide an exceptional opportunity for wage growth that will persist for many years.
                    </p>
                    @include('partials.gears')
                </div>
            </div>
            <div class="row stats-row">
                <div class="columns large-3 large-offset-3 small-8 small-centered">
                    <h2 class="stat-header text-center">45%</h2>
                    <p class="fact text-center">Computer occupations made up nearly 45 percent of STEM employment.</p>
                </div>
                <div class="columns large-3 small-8 small-centered">
                    <h2 class="stat-header text-center">12-30%</h2>
                    <p class="fact text-center">STEM occupations out-earn non- STEM fields by 12-30% across all education levels.</p>
                </div>
                <div class="columns large-3 small-8 small-centered">
                    <h2 class="stat-header text-center">12.5%</h2>
                    <p class="fact text-center">Employment in computer occupations is projected to increase by 12.5 percent from 2014 to 2024</p>
                </div>
            </div>
            <div class="row button-row large-5 large-offset-6">
                <div class="columns small-8 small-centered text-center">
                    <a href="/get-involved" class="button learn-more-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="spread-the-word">
        <div class="row">
            <div class="columns text-center medium-8 small-12 medium-centered">
                <h2 class="section-title h2">Stay Tuned</h2>
                <p class="margin-bottom-1">Sign up to receive program updates, opportunities, and resources. </p>
                <spread-word></spread-word>
            </div>
        </div>
    </section>
@stop