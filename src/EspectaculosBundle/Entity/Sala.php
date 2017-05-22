<?php
namespace EspectaculosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity
*@ORM\Table(name="sala")
*/
class Sala
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

	/**
	*@ORM\Column(type="text")
	*/
	protected $descripcion;

	/**
	*@ORM\Column(type="text")
	*/
	protected $direccion;

	/**
	*@ORM\Column(type="string",length=100)
	*/
	protected $imagen;

	/**
	*@ORM\Column(type="integer")
	*/
	protected $latitud;

	/**
	*@ORM\Column(type="integer")
	*/
	protected $longitud;

	public function getId(){
		return $this->id;
			}

	public function getNombre(){
		return $this->nombre;
			}

	public function setNombre($aNombre){
		$this->nombre=$aNombre;
	}

	public function getDescripcion(){
		return $this->descripcion;
			}

	public function setDescripcion($aDescripcion){
		$this->descripcion=$aDescripcion;
	}
	
	public function getDireccion(){
		return $this->direccion;
			}

	public function setDireccion($aDireccion){
		$this->direccion=$aDireccion;
	}
	
	public function getImagen(){
		return $this->imagen;
			}

	public function setImagen($aImagen){
		$this->imagen=$aImagen;
	}

	public function getLatitud(){
		return $this->latitud;
			}

	public function setLatitud($aLatitud){
		$this->latitud=$aLatitud;
	}

	public function getLongitud(){
		return $this->longitud;
			}

	public function setLongitud($aLongitud){
		$this->longitud=$aLongitud;
	}

}