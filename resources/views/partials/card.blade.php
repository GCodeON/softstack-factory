<div class="column column-block card-block">
    @if(($loop->iteration  % 5 == 0) and ($imageSrc))
    <div class="card with-image" style='background-image: url("{{$imageSrc}}")'>
    @else
    <div class="card">
        <img class="quote" src="/images/quote.svg">
        <div class="card-section">
            <p>{{$content}}</p>
            <h4>{{$name}}</h4>
            <sub>{{$location}}</sub>
        </div>
    @endif
    </div>
</div>

