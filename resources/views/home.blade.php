@php
    require('main-config.php');
    // if(isset($datos->is_published)){
    //     $metaTitle = $siteTitle.' - '. $datos->title;
    //     $metaDescription .=' - '.strtoupper($datos->categories[0]->name).' - '.$datos->title;
    // }
    //phpinfo();
    @endphp
<x-pagina.html :metaTitle='ucfirst($metaTitle)' :metaDescription='$metaDescription' />
<body>
    <div class="min-h-screen grid grid-rows-[auto_1fr_auto]">
        <!-- Seccion Header -->
        <section>
            <x-pagina._partials.nav  :nota="$nota" :notaContent="$notaContent" />
            @if($notaHeader)
            <x-pagina._partials.header :notaHeaderContent='$notaHeaderContent' />
            @endif
        </section>
        <!-- Seccion Contenido -->
        <main>
            <div class="mx-auto max-w-screen-2xl px-4 py-6 sm:px-6 l">
                @include('includes.'.$mostrar)
            </div>
        </main>
        <!-- Seccion Footer -->
        <section>
            <x-pagina.footer />
        </section>
    </div>
    <x-pagina._partials.footer-scripts />
</body>
</html
