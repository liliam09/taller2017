<?php
namespace EspectaculosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity
*@ORM\Table(name="tipos_espectaculo")
*/
class TipoEspectaculo
{
	/**
	*@ORM\Id
	*@ORM\Column(type="integer")
	*@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	*@ORM\Column(type="string",length=100)
	*/
	protected $nombre;

	public function getId(){
		return $this->id;
			}

	public function getNombre(){
		return $this->nombre;
			}

	public function setNombre($aNombre){
		$this->nombre=$aNombre;
	}

}