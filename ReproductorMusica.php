<?php

namespace Mpwar;

/**
 * Class ReproductorMusica
 *
 * Clase responsable de la reproducción de música.
 * Sabemos que pueden haber 3 tipos de reproductores: 'local', 'spotify' o 'google_play'.
 *
 * Delega la obtención de recomendaciones en las clases RecomendadorLocal, RecomendadorExternoBlueknow y RecomendadorExternoRedknow.
 *
 * @package Mpwar
 */
abstract class ReproductorMusica
{

    protected  $recomendacion;

    public function __construct(  )
    {

    }

	public abstract function obtenerRecomendaciones( $recomendacion );

    public function reproducir(  ){
        echo "hola";
    }

}