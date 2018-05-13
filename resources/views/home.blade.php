@extends('layouts.site', ['bodyClass' => 'home'])

@section ('content')
    <header>
        @include('partials.hero', $hero)
    </header>

    <section class="two-in-three-youth">
        <div class="row">
            <div class="columns text-center large-7 medium-8 small-12 medium-centered">
                <img src="/images/three_youth.png" class="three-youth" alt="Two in three youth say they use non-cigarette tobacco products like e-cigs, little cigars, and chew because they come in the candy flavors they like">
                <p>
                    Two in three youth who use tobacco say they use non-cigarette tobacco products 
                    like e-cigs, little cigars, and chew because they come in the candy flavors they like. 
                    These products entice kids into a lifetime of tobacco addiction.
                </p>
                <a href="/get-the-facts" class="button">Learn more</a>
            </div>
        </div>
    </section>

    <a name="get-involved"></a>
    <section class="get-involved" data-analytics-label="getinvolvedandsupport" data-analytics-category="digital experience">
        <div class="row">
            <div class="columns text-center large-8 medium-10 small-12 medium-centered">
                <h2 class="section-title">Get Involved</h2>
                <p class="margin-1 margin-bottom-2">See why others support CounterBalance, then write and share your own reason below.</p>
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
                        VERMONT’S YOUTH NEED YOUR HELP
                    </h3>
                    <p class="main-fact">
                        Underage tobacco use won’t go away on its own. In fact, it’s a big problem across our state. The numbers speak for themselves.
                    </p>
                </div>
            </div>
            <div class="row stats-row">
                <div class="columns large-3 large-offset-3 small-8 small-centered">
                    <h2 class="stat-header text-center">25%</h2>
                    <p class="fact text-center">of Vermont youth who use tobacco believe flavored tobacco products are safer.</p>
                </div>
                <div class="columns large-3 small-8 small-centered">
                    <h2 class="stat-header text-center">2x</h2>
                    <p class="fact text-center">Vermont youth are TWICE as likely to try a flavored tobacco product over a non-flavored one than an adult is.</p>
                </div>
                <div class="columns large-3 small-8 small-centered">
                    <h2 class="stat-header text-center">66%</h2>
                    <p class="fact text-center">of Vermont adults believe that ALL flavored tobacco products should be illegal.</p>
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
                <h2 class="section-title h2">Spread the Word</h2>
                <p class="margin-bottom-1">Sign up to learn more about how you can help protect Vermont's youth from tobacco.</p>
                <spread-word></spread-word>
            </div>
        </div>
    </section>
@stop