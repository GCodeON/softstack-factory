@extends('layouts.site', ['bodyClass' => 'contact-us'])

@section ('content')
    <h1 class="section-title text-center">Contact Us</h1>

    <div class="row">
        <div class="column small-12 medium-12 medium-centered large-12 large-centered text-center">
            <contact-form></contact-form>
        </div>
    </div>
@stop