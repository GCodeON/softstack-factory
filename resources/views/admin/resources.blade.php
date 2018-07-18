@extends('layouts.admin-site', ['bodyClass' => 'admin-resources'])

@section ('content')

    <?php
    $lastCategory = "";
    ?>
    <div class="row column small-12">
        <div class="margin-top-2">
            <h1>
                Resources

                @role('admin')
                <a href="/admin/resource/new" class="header-link">
                    + New Resource
                </a>
                @endrole
            </h1>
            <br>
            <br>
        </div>

        @foreach($resources as $resource)
            @if($lastCategory !== $resource->category)
                <?php
                $lastCategory = $resource->category;

                //close last row
                if ($lastCategory !== "") {
                    echo "</div>";
                }
                //start new category
                echo "<div class=\"row\">"
                ?>

                <h2 class="small-12 columns">
                    {{$resource->category}}
                </h2>

            @endif
            <div class="resource" data-id="{{$resource->id}}">
                <div class="text-center">
                    <img src="{{asset(Storage::url($resource->thumbnail))}}" alt="">
                    <h3 class="title">
                        {{$resource->title}}
                    </h3>

                    @role('admin')

                    <a class="deleteResource" href="/admin/delete-resource/{{$resource->id}}">Delete</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="/admin/activity/?resource_id={{$resource->id}}">View Activity</a>
                    <br>
                    <br>
                    @endrole

                @if($resource->type === 'file')

                        <a href="{{asset(Storage::url($resource->resource))}}" download=""
                           class="resource-download button">
                            download
                        </a>
                    @else

                        <a href="{{$resource->url}}" target="_blank" download="" class="resource-download button">
                            view
                        </a>
                    @endif


                </div>
            </div>
        @endforeach

        <?php
        //close last div
        echo "</div>";
        ?>

    </div>

@stop