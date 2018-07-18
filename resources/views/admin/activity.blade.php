@extends('layouts.admin-site', ['bodyClass' => 'users'])

@section ('content')
    <div class="row column small-12">
        <div class="margin-top-2">
            <h2>
                {{$title}}
                - {{$activity->count()}}
                @if($title !== 'Activity')
                    <a href="?" class="header-link">
                        All Activity
                    </a>
                @endif
            </h2>
        </div>
        <div class="scrolling">
            <table>
                <thead>
                <tr>
                    <th>Activity</th>
                    <th>Time</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($activity as $action)
                    <tr>
                        <td>
                            @if(empty($action->user))
                                Unknown User #{{$action->user_id}}
                            @else
                                {{$action->user->name}}
                            @endif
                            {{$action->action}}

                            @if($action->resource)
                                <a href="?resource_id={{$action->resource->id}}">
                                    {{$action->resource->title}}
                                </a>

                            @endif
                        </td>
                        <td>{{ prettyTime($action->created_at)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@stop

@push('scripts')
