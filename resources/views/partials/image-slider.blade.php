
<!-- Should use a seperated module  -->
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <div class="orbit-wrapper">
        <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        </div>
        <ul class="orbit-container">
            <li class="is-active orbit-slide">
                <figure class="orbit-figure">
                    <img class="orbit-image" src="{{$img1}}" alt="inside">
                </figure>
            </li>
            <li class="is-active orbit-slide">
                <figure class="orbit-figure">
                    <img class="orbit-image" src="{{$img2}}" alt="inside">
                </figure>
            </li>
            <li class="is-active orbit-slide">
                <figure class="orbit-figure">
                    <img class="orbit-image" src="{{$img3}}" alt="inside">
                </figure>
            </li>
        </ul>
    </div>
    <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="1"><span class="show-for-sr">Third slide details.</span></button>
    </nav>
</div>