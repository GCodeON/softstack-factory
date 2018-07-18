

<div class="small-12 medium-4 large-3 columns">
    <div class="text-center">
        <img src="{{$imageSrc}}" alt="{{$imageAlt || ''}}">
        <h3 class="title">{{$title}}</h3>
        <p>{{$content}} </p>

        @if( ! empty($downloadURL))
            <a href="{{$downloadURL}}" class="button" download>download</a>
        @elseif( ! empty($linkURL))
            <a href="{{$linkURL}}" class="button" target="_blank">View</a>
        @endif

    </div>
</div>

