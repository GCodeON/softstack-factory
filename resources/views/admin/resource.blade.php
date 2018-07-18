@extends('layouts.admin-site', ['bodyClass' => ''])

@section ('content')

    <?php

    $categories = [
        "Flavored Tobacco",
        "Retailers",
        "Past",
        "Ecig and Juul",
        "Video",
        "Toolkit",
        "CounterBalance",
        "Webinar",
        "Training"
    ];

    ?>

    <div class="row column large-4 medium-8 small-12">
        <div class="margin-top-2">
            <h2>
                @if($id === -1)
                    Add
                @else
                    Edit
                @endif

                Resource
            </h2>
        </div>

        <form method="post" action="/admin/save-resource" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input name="id" value="{{$id}}" type="hidden">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-12 cell">
                        <label>Resource Title
                            <input type="text" name="title" placeholder=".medium-6.cell">
                        </label>
                    </div>
                    <div class="medium-12 cell">
                        <label>Resource Type
                            <select name="type">
                                <option value="file">File</option>
                                <option value="link">Link</option>
                            </select>
                        </label>
                    </div>
                    <div class="medium-12 cell">
                        <label>Resource URL (for links only)
                            <input type="text" name="url" placeholder=".medium-6.cell">
                        </label>
                    </div>
                    <div class="medium-12 cell">
                        <label>Resource Category
                            <select name="category">
                                @foreach($categories as $category)
                                    <option value="{{$category}}">{{$category}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="medium-12 cell">
                        <label for="thumbnailUpload">
                            Thumbnail File
                            <input type="file" name="thumbnail" id="thumbnailUpload">
                        </label>

                    </div>
                    <div class="medium-12 cell">
                        <label for="fileUpload">
                            Resource File
                            <input type="file" name="file" id="fileUpload" class="">
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