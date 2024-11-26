@props([
    'grupo' => 'Home',
])
<x-pagina._partials.hero-one />

<x-pagina._partials.randomize :random='$random_posts' /> <!-- Alpine.js -->

<x-pagina._partials.lasts-card-home  :datos='$posts_lasts' />
