@extends('layouts.admin-site', ['bodyClass' => ''])

@section ('content')

    <div class="row column large-6 medium-8 small-12">
        <div class="margin-top-2">
            <h2>
                Edit Support Card
            </h2>
        </div>

        <form method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-12 cell">
                        <label>Name
                            <input type="text" name="fullname" value="{{$card->fullname}}">
                        </label>
                    </div>

                    <div class="medium-12 cell">
                        <label>Message
                            <textarea name="message">{{$card->message}}</textarea>
                        </label>
                    </div>

                    <div class="medium-12 cell">
                        <label>Zip
                            <input type="text" name="zip" value="{{$card->zip}}">
                        </label>
                    </div>

                    <div class="medium-12 cell">
                        <label>Location
                            <input type="text" name="location" value="{{$card->location}}">
                        </label>
                    </div>

                    <div class="medium-12 cell">
                        <label>Image
                            <input type="text" name="image" value="{{$card->image}}">
                        </label>
                    </div>

                    <div class="medium-12 cell">
                        <input type="submit" class="button" name="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>

@stop