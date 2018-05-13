@extends('layouts.site', ['bodyClass' => 'get-the-facts'])

@section ('content')
<header>
    @include('partials.hero', $hero)
</header>

<section class="control-act">
    <div class="row">
        <div class="column small-12 medium-4 medium-centered">
            <h2 class="section-title">The 2009 Tobacco Control Act</h2>
        </div>
        <div class="column small-12 medium-8 medium-centered">
            <p>
                The 2009 Tobacco Control Act took a critical step in ending one of the tactics used to target and addict children because it prohibited candy and other fruit flavored cigarettes.
            </p>
            <p>
                But the law <a href="https://www.fda.gov/TobaccoProducts/GuidanceComplianceRegulatoryInformation/ucm246129.htm#governments" target="_blank" class="highlight">left out</a> non-cigarette tobacco products. That means little cigars, cigarillos, chew, e-cigarettes, and other non-cigarette tobacco products are still sold in flavors like strawberry, cotton candy, bubble gum, chocolate, and more.
            </p>
            <p>
                The law also allows menthol flavored tobacco products of all types, making menthol the sole remaining flavor allowed in cigarettes.
            </p>
        </div>
    </div>
</section>

<section class="flavored-tobacco">
    <div class="row">
        <div class="column text-center medium-10 small-12 medium-centered">
            <h2 class="section-title">Flavored Tobacco Is:</h2>
        </div>
        <div class="columns text-center large-6 medium-6 small-12 medium-centered text-col">
            <img src="images/magnet.svg" alt="ATTRACTIVE" />
            <h3 class="section-title">Attractive to and Dangerous for Youth</h3>

            <!-- Should use a seperated module -->
            <div class="orbit retailer-orbit" role="region" aria-label="retailers" data-orbit>
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                        <li class="orbit-slide is-active">
                            <div class="slide-content">

                                <p>
                                    Two-thirds of tobacco-using youth report using non-cigarette tobacco products like e-cigarettes, cigars, and chew because <strong>they like the flavors.</strong>
                                </p>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <p>
                                    The majority of youth (ages 12—17) who report ever trying tobacco <strong>started with a flavored product.</strong>
                                </p>
                            </div>
                        </li>

                        <li class="orbit-slide">
                            <div class="slide-content">
                                <p>
                                    Nationwide, <strong>more than half</strong> (53.6%) of youth who smoke cigarettes report using menthol flavored cigarettes—the only kind of flavored cigarette that’s still legal.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
                <nav class="orbit-bullets">
                    <button data-slide="0"><span class="show-for-sr">First slide details.</span></button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                </nav>
            </div>

        </div>
        <div class="columns text-center large-6 medium-6 small-12 medium-centered text-col">
            <img src="images/money.svg" alt="ACCESSIBLE" />
            <h3 class="section-title">EASY TO ACCESS & CHEAP FOR YOUTH</h3>

            <!-- Should use a seperated module -->
            <div class="orbit retailer-orbit" role="region" aria-label="retailers" data-orbit>
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                        <li class="orbit-slide is-active">
                            <div class="slide-content">
                                <p>
                                    85% of Vermont tobacco retailers sell <strong>at least one kind</strong> of flavored tobacco product.
                                </p>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <p>
                                    Unlike cigarettes, tobacco products like chew, cigars, and e-cigarettes can be purchased individually, <strong>making them cheaper for kids to buy</strong>.
                                </p>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <p>
                                    Almost 40% of retail stores selling single cigarillos advertise them for <strong>less than $1</strong>, when the average price of a pack of cigarettes in Vermont is $8.12.
                                </p>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <p>
                                    Single cigarillos are widely available, frequently advertised, often discounted, and <strong>more likely to be sold in stores near schools</strong> in Vermont.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
                <nav class="orbit-bullets">
                    <button data-slide="0"><span class="show-for-sr">First slide details.</span></button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Fourth slide details.</span></button>
                </nav>
            </div>

        </div>
        <div class="columns text-center large-8 medium-8 small-12 medium-centered">
            <p class="closing margin-2">
                The more often your children are exposed to flavored tobacco products and advertising, the more likely they are to start using tobacco.
            </p>
        </div>
    </div>
</section>

<section class="by-the-num text-center">
    <h2 class="section-title">Vermont by the numbers</h2>
    <div class="row stats-row">
        <div class="columns large-3 small-8 small-centered large-centered">
            <h2 class="stat-header text-center">24<span class="percent">%</span></h2>
            <p class="fact lead text-center">
                Nearly a quarter (24%) of all Vermont high school students have tried a flavored tobacco product.
            </p>
        </div>
        <div class="columns large-3 small-8 small-centered large-centered">
            <h2 class="stat-header text-center">25<span class="percent">%</span></h2>
            <p class="fact lead text-center">
                Overall, 25% of all Vermont high school youth currently use some kind of tobacco (cigarettes, cigars, chew, or e-cigarettes).
            </p>
        </div>
        <div class="columns large-3 small-8 small-centered large-centered">
            <h2 class="stat-header text-center">10<span class="percent">%</span></h2>
            <p class="fact lead text-center">
                Overall, 10% of Vermont high school students report smoking cigars, cigarillos, or little cigars compared to 5% of Vermont adults.
            </p>
        </div>
        <div class="columns large-10 small-10 small-centered large-centered text-center">
            <a class="button download-fact-btn" target="_blank" href="/images/CounterBalance_Fact_Sheet.pdf" download="/images/CounterBalance_Fact_Sheet.pdf">Download the
                Facts</a>
        </div>
    </div>
</section>

<section class="what-youth-see">
    <h2 class="section-title text-center">What our youth see</h2>
    <div class="row">
        <div class="columns text-center large-10 medium-10 small-12 medium-centered">
            <p class="margin-bottom-2">
                The tobacco industry spends almost $8.8 billion every year to market their products. That’s an average of $24 million per day.   The bulk of this advertising takes place in retail stores that are frequented by young people. Here is what our youth see all the time in retail stores across the state, and here is what Vermonters are doing to protect Vermont’s youth from the tobacco industry.
            </p>
            <!-- need component -->
            @include('partials.store', $stores)


            <p class="margin-top-2 margin-bottom-2">Seventy percent of youth visit convenience stores at least once a week.
                Although other types
                of
                tobacco marketing have been restricted, convenience stores, pharmacies, gas stations, and other retail outlets remain places where kids are certain to see colorful tobacco products and advertising. These ads and products (that look like candy and are sold in candy flavors) are often placed near candy and ice cream and/or at the eye level of youth. It is no coincidence that 85% of teenagers prefer Marlboro, Camel, and Newport, which are the three most heavily advertised brands.</p>
        </div>
    </div>
    <div class="row dont-need-inside">
        <div class="columns left-text text-center large-6 medium-6 small-12 medium-centered">
            <div class="center-content">
                <h3 class="section-title font-32 margin-bottom-2">YOU DON’T EVEN NEED TO BE INSIDE THE STORE</h3>
                <p>Youth don’t need to go inside the store to be bombarded by tobacco advertisements—tobacco marketing is highly visible to youth from outside the store as well. According to their own internal documents, tobacco companies try to attract new, young smokers by targeting retail stores near schools and parks.</p>
            </div>
        </div>
        <div class="columns text-center large-6 medium-6 small-12 medium-centered">
            @include('partials.image-slider', $slides)
        </div>
    </div>
</section>

<section class="what-retailers-doing" id="retailers-doing">
    <h2 class="section-title text-center">WHAT RETAILERS ARE DOING</h2>
    <div class="row">
        <div class="columns text-center large-10 medium-10 small-12 medium-centered large-centered">
            <p class="retailer-text">Vermonters are taking a stand against the tobacco industry’s influence. Watch the video and check out the quotes below to see what these Vermonters are doing to reduce tobacco’s impact on our state’s young people.</p>
            <div class="responsive-embed">
                <iframe class="full-video" src="https://www.youtube.com/embed/oP9MkdBMZ9k" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="columns text-center large-10 medium-10 small-12 medium-centered large-centered">
            <!-- Should use a seperated module -->
            <div class="orbit retailer-orbit" role="region" aria-label="retailers" data-orbit>
                <div class="orbit-wrapper">
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                    <ul class="orbit-container">
                        <li class="orbit-slide is-active">
                            <div class="slide-content">
                                <div class="text-center circle-img">
                                    <img class="circle-div owner-pic" src="/images/v_sterns.jpg" alt="Vaneasa Sterns">
                                </div>
                                <p class="text-center owner-desc">“I’ve seen everyone who smokes struggle in the 21 years I’ve owned the store. I do not carry the one packet cigars or dip. I have chosen not to use any sandwich boards or posters or any other marketing tool that the tobacco companies have put out that I can pick up at a trade show or get through my distributors. Wouldn’t it be great to see the next generation of Vermont children tobacco-free?”</p>
                                <div class="text-center">
                                    <span class="owner-name">Vaneasa Sterns</span>
                                    <span class="owner-role">Owner, Lincoln General Store</span>
                                    <span class="owner-city">Lincoln</span>
                                </div>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <div class="text-center circle-img">
                                    <img class="circle-div owner-pic" src="/images/s_hochberg.jpg" alt="Steve Hochberg">
                                </div>
                                <p class="text-center owner-desc">“We gave up selling tobacco well over 20 years ago. We promote healthcare and smoking is just so against that.”</p>
                                <div class="text-center">
                                    <span class="owner-name">Steve Hochberg</span>
                                    <span class="owner-role">Owner & Pharmacist, Rutland Pharmacy</span>
                                    <span class="owner-city">Rutland</span>
                                </div>
                            </div>
                        </li>

                        <li class="orbit-slide">
                            <div class="slide-content">
                                <div class="text-center circle-img">
                                    <img class="circle-div owner-pic" src="/images/b_hartley.jpg" alt="Brad Hartley">
                                </div>
                                <p class="text-center owner-desc">“In the last seven and a half years, a half a dozen of our regular customers who were cigarette smokers passed away. We decided to keep a limited selection, to display them as marginally as possible, and to do no secondary advertising — no posters, no plastic boxes, no kids’ characters of tobacco mascots.”</p>
                                <div class="text-center">
                                    <span class="owner-name">Brad Hartley</span>
                                    <span class="owner-role">Vermont Energy Co</span>
                                    <span class="owner-city">Ferrisburg</span>
                                </div>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <div class="text-center circle-img">
                                    <img class="circle-div owner-pic" src="/images/j_marmar.jpg" alt="James Marmar">
                                </div>
                                <p class="text-center owner-desc">“We decided to stop selling cigarettes. I really care about people’s health and I could not in good conscious sell cigarettes. Grocery stores, chain stores, they should all stop selling cigarettes. I would love to see the next generation of Vermont children tobacco-free.”</p>
                                <div class="text-center">
                                    <span class="owner-name">James Marmar</span>
                                    <span class="owner-role">Woodstock Pharmacy</span>
                                    <span class="owner-city">Ferrisburg</span>
                                </div>
                            </div>
                        </li>
                        <li class="orbit-slide">
                            <div class="slide-content">
                                <div class="text-center circle-img">
                                    <img class="circle-div owner-pic" src="/images/d_mazza.jpg" alt="Senator Dick Mazza">
                                </div>
                                <p class="owner-desc text-center">“I’ve been at the store for 61 years. My dad had a policy to never advertise or discount cigarettes. He never touched tobacco his whole life. I’ve kept that tradition all these years. I always discourage people from buying the products. I will not advertise it or discount it. I don’t want to see youth get hooked on something that’s going to be a real detriment to their health.”</p>
                                <div class="text-center">
                                    <span class="owner-name">Senator Dick Mazza</span>
                                    <span class="owner-role">Owner, Dick Mazza’s General Store & State Senator</span>
                                    <span class="owner-city">Colchester</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <nav class="orbit-bullets">
                    <button data-slide="0"><span class="show-for-sr">First slide details.</span></button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                    <button data-slide="3"><span class="show-for-sr">Third slide details.</span></button>
                    <button data-slide="4"><span class="show-for-sr">Third slide details.</span></button>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="find-retailers">
    <div class="row">

        <div class="column info-col small-12 large-7 large-push-5 relative-div">
            <div class="center-content">
                <div class="row ">
                    <div class="column small-12 medium-8 medium-offset-2">

                        <h3 class="section-title font-32 text-center">TOBACCO RETAILERS BY THE NUMBERS</h3>
                        <hr/>
                        <p class="text-center">Flavored tobacco products are accessible and affordable for youth according to the 2015 Counter Tools Store Audit Report.</p>

                    </div>
                </div>
                <div class="row stats-row">
                    <div class="columns large-4  small-8 small-centered">
                        <h2 class="stat-header text-center margin-bottom-1">65%</h2>
                        <p class="fact lead text-center"> of Vermont tobacco retail stores (nearly 2 in 3) sold single cigarillos.</p>
                    </div>
                    <div class="columns large-4 small-8 small-centered">
                        <h2 class="stat-header text-center margin-bottom-1">72%</h2>
                        <p class="fact lead text-center">of Vermont tobacco retail stores sold flavored cigarillos.</p>
                    </div>
                    <div class="columns large-4 small-8 small-centered">
                        <h2 class="stat-header text-center margin-bottom-1">39%</h2>
                        <p class="fact lead text-center">of Vermont tobacco retail stores selling single cigarillos advertise them for less than $1.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column map-col small-12 large-5 large-pull-7 text-center">
            <img src="/images/number-map.png" alt="retailer-map">
        </div>

    </div>

</section>

<section class="connect">
    @include('partials.content-links')
</section>

@stop