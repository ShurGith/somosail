<?php
    $siteTitle = config('general.site_tile');
    $metaDescription = config('general.site_metadescription');
    $nota =true;
    $notaContent ='Nota contenido <span class="text-green-400">Nota de la barra superior</span>';
    $notaHeader = false;
    $notaHeaderContent="NotaHeaderContent";
    $mostrar =$grupo ?? "post";
    $active =false;//Enlaces nav;
    $metaTitle = (isset($datos->name)) ?    $siteTitle . " - ".$datos->name :  $siteTitle;

    if(isset($datos->is_published)){
        $metaTitle = $siteTitle.' - '. $datos->title;
        $metaDescription .=' - '.strtoupper($datos->categories[0]->name).' - '.$datos->title;
    }

//  @props([
//         'siteTitle' => config('general.site_tile'),
//         'nota' => true,
//         'notaContent' => 'Nota contenido <span class="text-green-400">Nota de la barra superior</span>',
//         'notaHeader' => false,
//         'notaHeaderContent'=> "NotaHeaderContent",
//         'mostrar' => $grupo ?? "post",
//         'active' => false,//Enlaces nav,
//         'metaDescription' =>  $metaDescription ?? "Lugar de encencuentro Devs",
//         'metaTitle' =>  (isset($datos->name)) ?   config('general.site_tile') . " - ".$datos->name : config('general.site_tile'),
//         ])
