@extends('layouts.site', ['bodyClass' => 'about'])

@section ('content')
<header>
    @include('partials.hero-about', $hero)
</header>

<section class="grid-like">
    <div class="row">
        <div class="column small-12 medium-7 medium-push-5">
            <h3>
                 Our Mission
            </h3>
            <p>
                SoftStack Factory is a nonprofit focused on the technology job skills gap, applying an immersion bootcamp model with an on the job training spin, to train qualified young adults to meet the high demand jobs of the digital economy.
            </p>
        </div>
        <div class="column small-12 medium-5 medium-pull-7 image-full">
            <img src="/images/banner-img-volunteer.png" alt="" />
        </div>
    </div>
    <div class="row margin-top-2">
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
            <img src="/images/banner-group.png" alt=""/>
        </div>
    </div>

</section>
@stop