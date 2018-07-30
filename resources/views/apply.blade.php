@extends('layouts.site', ['bodyClass' => 'get-involved'])

@section ('content')
<header>
    @include('partials.hero', $hero)
</header>
<section data-analytics-label="getinvolvedandsupport" data-analytics-category="digital experience">
    @include('partials.involved-cards')
    <div class="row">
        <div class="columns text-center large-10 medium-10 small-12 medium-centered">
            <support-form data-analytics-visibility data-analytics-action="element visible"></support-form>
        </div>
    </div>
    <div class="row">
        <div class="columns text-center large-10 medium-10 small-12 medium-centered">
        <testimonials-form></testimonials-form>
        </div>
    </div>
</section>


@stop