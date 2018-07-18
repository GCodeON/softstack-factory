@extends('layouts.admin-site', ['bodyClass' => 'admin-support'])

@section ('content')
    <div class="row column small-12">
        <div class="margin-top-2">
            <h2>
                {{ucfirst($type)}}
                Support Cards

                @if($type != 'pending')
                <a class="header-link" href="?type=pending">
                    pending
                </a>
                @endif

                @if($type != 'published')
                <a class="header-link" href="?type=published">
                    published
                </a>
                @endif

                @if($type != 'deleted')
                <a class="header-link" href="?type=deleted">
                    deleted
                </a>
                @endif
            </h2>
        </div>
        <div class="scrolling">
            <table>
                <thead>
                <tr>
                    <th>User</th>
                    <th>Message</th>
                    <th>Location</th>
                    <th>Zip</th>
                    <th>Approval</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php /** @var $card \App\Support */ ?>
                @foreach ($support as $card)
                    <tr>
                        <td>
                            {{$card->fullname}}
                        </td>
                        <td>
                            {{$card->message}}
                        </td>
                        <td>
                            {{$card->location}}
                        </td>
                        <td>
                            {{$card->zip}}
                        </td>
                        <td>
                            @if($type != 'published')
                            <a href="/admin/edit-support/?id={{$card->id}}&action=approve&from={{$type}}">
                                Approve</a>
                            @endif
                            &nbsp;&nbsp;
                            @if($type != 'deleted')
                            <a href="/admin/edit-support/?id={{$card->id}}&action=delete&from={{$type}}">
                                Delete</a>
                            @endif
                        </td>
                        <td>
                            <a href="/admin/support/{{$card->id}}">
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@stop

@push('scripts')
