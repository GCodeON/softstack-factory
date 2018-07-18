<div class="column column-block card-block">
    @if(($loop->iteration  % 5 == 0) and ($card->image))
        <div class="card with-image" style='background-image: url("{{$card->image}}")'>
            @else
                <div class="card">
                    <img class="quote" src="/images/quote.svg">
                    <div class="card-section">
                        <p>{{$card->message}}</p>
                        <h4>{{$card->fullname}}</h4>
                        <sub>
                            @if(!empty($card->location))
                                {{$card->location}}
                            @else
                                {{$card->zip}}
                            @endif
                        </sub>
                    </div>
                    @endif
                </div>
        </div>

