<?php

namespace Mpwar;

abstract class ReproductorExterno extends ReproductorMusica
{
    protected  $sistema_externo_inicializado = false;

    public function __construct(  )
    {
        $this->sistema_externo_inicializado = true;
    }

    public  function obtenerRecomendaciones($recomendacion)
	{

	}

}

