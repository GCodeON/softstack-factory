<div class="title-bar" data-hide-for="medium" data-analytics-category="main">
    <div class="title-bar-left">
        <div class="logo">
            <a class="ga-logo" href="/" data-analytics-click data-analytics-label="Counter Balance Logo">
                <img src="/images/blank.png" data-interchange="[{{ asset('/images/CB_Logo.svg') }}, small],
                [{{ asset('/images/CB_Logo.svg') }}, medium]" alt="Counter Balance logo">
            </a>
        </div>
    </div>
    <div class="title-bar-right" data-analytics-category="main">
        <button type="button" id="hamburger" data-toggler=".open" class="show-for-small-only clear button" data-toggle="hamburger mobileMenu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="hide-for-small-only menu">
            @foreach($menu as $item)
                <li class="{{ $item['active'] ? 'active' : '' }}">
                    <a data-analytics-click data-analytics-label="{{$item['name']}}" href="{{$item['url']}}">{{$item['name']}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="top-bar" id="mobileMenu" data-toggler=".open" data-analytics-category="main">
    <ul class="dropdown menu vertical medium-horizontal ">
        @foreach($menu as $item)
            <li class="{{ $item['active'] ? 'active' : '' }}">
                <a data-analytics-click data-analytics-label="{{$item['name']}}" href="{{$item['url']}}">{{$item['name']}}</a>
            </li>
        @endforeach
    </ul>
</div>
