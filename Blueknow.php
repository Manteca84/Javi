<?php

namespace Mpwar;

/**
 * Class RecomendadorExternoBlueknow
 *
 * Encargada de la gestión de recomendaciones en base al sistema externo 'Blueknow'.
 * Al ser un proveedor externo, necesita inicializarse antes de intentar obtener las recomendaciones.
 *
 * @package Mpwar
 */
class Blueknow extends ReproductorExterno
{

	public function obtenerRecomendaciones( $nombre_cancion_base )
	{
		if ( !$this->sistema_externo_inicializado )
		{
			throw new \RuntimeException( "Error al intentar obtener recomendaciones de la clase " . __CLASS__ . ": Al ser un servicio de recomendaciones externo, primero debe ser inicializado." );
		}

		return array(
				'Prophets in the Sky',
				'54-46 Was My Number'
		);
	}
}