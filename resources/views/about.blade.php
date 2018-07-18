@extends('layouts.site', ['bodyClass' => 'about'])

@section ('content')
<header>
    @include('partials.hero', $hero)
</header>

<section class="grid-like">
    <div class="row">
        <div class="column small-12 medium-7 medium-push-5">
            <h3>
                More than a Coding Bootcamp!
            </h3>
            <p>
                SoftStack Factory is a network of students, volunteers, sponsors and partners empowering the local San Diego community.
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
@stop