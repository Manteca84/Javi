<?php

namespace Mpwar;

class ReproductorLocal extends ReproductorMusica
{

	public function obtenerRecomendaciones( $nombre_cancion_base )
	{
		return array(
				'Se ven venir (quítate la venda)',
				'Cigarrito'
		);
	}
    public function reproducir(  ){
        echo "hola 2";
    }
}

