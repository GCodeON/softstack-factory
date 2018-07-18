@extends('layouts.site', ['bodyClass' => 'about'])

@section ('content')
<header>
    @include('partials.hero', $hero)
</header>

<section class="grid-like">
    <div class="row">
        <div class="column small-12 medium-7 medium-push-5">
            <h3>
                Retail stores are the primary place where tobacco companies recruit new users.
            </h3>
            <p>
                Nearly 90% of new users are underage youth. In fact, according to their own internal documents,
                tobacco companies try to attract new, young smokers by targeting stores near schools and playgrounds.
            </p>
        </div>
        <div class="column small-12 medium-5 medium-pull-7 image-full">
            <img src="/images/retail-stores.png" alt="" />
        </div>
    </div>
    <div class="row margin-top-2">
        <div class="column medium-7">
            <h3>
                Currently CounterBalance is working to raise awareness about the dangers of flavored tobacco products.
            </h3>
            <p>
                The tobacco industry uses candy flavors and colorful packaging to make e-cigarettes, little cigars, and chew seem more appealing. In fact, two-thirds of
                tobacco-using youth said they use these products because they come in flavors they like.
            </p>
            <p>
                Find out what you can do to take a stand against flavored tobacco.
            </p>
            <a href="/get-involved" class="button">Get Involved</a>
        </div>
        <div class="column medium-5 hide-for-small-only">
            <img src="/images/currently.png" alt=""/>
        </div>
    </div>

</section>

<section class="what-youth-see no-padding" data-analytics-category="fact">
    <h2 class="section-title text-center" data-analytics-visibility data-analytics-action="element visible"
        data-analytics-label="getthefacts-whatouryouthsee">
        What our youth see
    </h2>
    <div class="row">
        <div class="columns text-center large-10 medium-10 small-12 medium-centered">
            <p class="margin-bottom-2">
                The tobacco industry spends almost $8.8 billion every year to market their products. That’s an average of $24 million per day. In Vermont, the tobacco industry spends an estimated $16.8 million per year or $46,000 per day. The bulk of this advertising takes place in retail stores that are frequented by young people. Here is what our youth see all the time in retail stores across the state, and here is what Vermonters are doing to protect Vermont’s youth from the tobacco industry.

            </p>
            <!-- need component -->
            @include('partials.store', $stores)


            <p class="margin-top-2 margin-bottom-2">Seventy percent of youth visit convenience stores at least once a week.
                Although other types
                of
                tobacco marketing have been restricted, convenience stores, pharmacies, gas stations, and other retail outlets remain places where kids are certain to see colorful tobacco products and advertising. These ads and products (that look like candy and are sold in candy flavors) are often placed near candy and ice cream and/or at the eye level of youth. It is no coincidence that 85% of teenagers prefer Marlboro, Camel, and Newport, which are the three most heavily advertised brands.</p>
        </div>
    </div>
    <div class="row dont-need-inside">
        <div class="columns left-text text-center large-6 medium-6 small-12 medium-centered">
            <div class="center-content">
                <h3 class="section-title font-32 margin-bottom-2">YOU DON’T EVEN NEED TO BE INSIDE THE STORE</h3>
                <p>Youth don’t need to go inside the store to be bombarded by tobacco advertisements—tobacco marketing is highly visible to youth from outside the store as well. According to their own internal documents, tobacco companies try to attract new, young smokers by targeting retail stores near schools and parks.</p>
            </div>
        </div>
        <div class="columns text-center large-6 medium-6 small-12 medium-centered">
            @include('partials.image-slider', $slides)
        </div>
    </div>
</section>

<section class="fact">
    <div class="row">
        <div class="column small-12 medium-12 medium-centered text-center">
            <p>
                The more often your children are exposed to flavored tobacco products and advertising, the more likely they are to start using tobacco. It’s time to end tobacco’s influence on Vermont’s kids.
            </p>
        </div>
    </div>
</section>

<section class="connect">
    @include('partials.content-links')
</section>

@stop