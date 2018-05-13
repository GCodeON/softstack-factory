@component('styleguide::code-head')
    typography
@endcomponent


@component('styleguide::code', [
'title' => 'paragraphs',
'note' => ''
])
<p>
    Even though opioids are prescribed by a doctor, using them in any way other than prescribed, even occasionally, is dangerous. The way prescription opioids affect your brain
    is the same as heroin, making them both dangerous and highly addictive. In fact, addiction rates skyrocket after just 4 days of use.
</p>

<p class="lead">
    Opioids are found in some prescription medications used to mask pain. This highly addictive drug is also found on the black market in various forms.
</p>

<p class="lead text-secondary">
    Explore the many names and forms of this drug through the interactive family tree.
</p>

@endcomponent

@component('styleguide::code', [
'title' => 'headers',
'note' => ''
])

<h1>h1. very large header.</h1>
<h2>h2. large header.</h2>
<h3>h3. medium header.</h3>
<h4>h4. moderate header.</h4>
<h5>h5. small header.</h5>
<h6>h6. tiny header.</h6>

@endcomponent

@component('styleguide::code', [
'title' => 'header small segments',
'note' => ''
])
    <h1>h1.
        <small>With some small text</small>
    </h1>
    <h2>h2.
        <small>With some small text</small>
    </h2>
    <h3>h3.
        <small>With some small text</small>
    </h3>
    <h4>h4.
        <small>With some small text</small>
    </h4>
    <h5>h5.
        <small>With some small text</small>
    </h5>
    <h6>h6.
        <small>With some small text</small>
    </h6>

@endcomponent





