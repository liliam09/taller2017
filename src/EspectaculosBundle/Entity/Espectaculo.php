<?php
namespace EspectaculosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity
*@ORM\Table(name="espectaculo")
*/
class Espectaculo
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
	*@ORM\Column(type="date")
	*/
	protected $inicio;

	/**
	*@ORM\Column(type="date")
	*/
	protected $fin;

	/**
	*@ORM\Column(type="string",length=100)
	*/
	protected $imagen;

	/**
	*@ORM\Column(type="string")
	*/
	protected $clasificacion;

	/**
	*@ORM\Column(type="decimal")
	*/
	protected $monto;

		/**
	*@ORM\ManyToOne(targetEntity="Sala")
	*/
	protected $sala;

	/**
	*@ORM\ManyToOne(targetEntity="TipoEspectaculo")
	*/
	protected $tipoespectaculo;


	public function getId(){
		return $this->id;
			}

	public function getNombre(){
		return $this->nombre;
			}

	public function setNombre($aNombre){
		$this->nombre=$aNombre;
	}

	public function getInicio(){
		return $this->inicio;
			}

	public function setInicio($aInicio){
		$this->inicio=$aInicio;
	}
	
	public function getFin(){
		return $this->fin;
			}

	public function setFin($aFin){
		$this->fin=$aFin;
	}
	
	public function getImagen(){
		return $this->imagen;
			}

	public function setImagen($aImagen){
		$this->imagen=$aImagen;
	}

	public function getClasificacion(){
		return $this->clasificacion;
			}

	public function setClasificacion($aClasificacion){
		$this->clasificacion=$aClasificacion;
	}

	public function getMonto(){
		return $this->monto;
			}

	public function setMonto($aMonto){
		$this->monto=$aMonto;
	}

	public function getSala(){
		return $this->sala;
			}

	public function setSala($aSala){
		$this->sala=$aSala;
	}

	public function getTipoEspectaculo(){
		return $this->tipoespectaculo;
			}

	public function setTipoEspectaculo($aTipoEspectaculo){
		$this->tipoespectaculo=$aTipoEspectaculo;
	}

}