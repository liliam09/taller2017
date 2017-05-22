<?php
namespace EspectaculosBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EspectaculosBundle\Entity\Espectaculo;

class LoadEspectaculo extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$espectaculos=array();

		$sala=$this->getReference('Nombre-Sala-1');
		$tipoespectaculo=$this->getReference('Cine');
		$espectaculoAdmin=new Espectaculo();
		$espectaculoAdmin->setNombre('NombreEspectaculo1');
		$espectaculoAdmin->setInicio(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setFin(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setClasificacion('ATP');
		$espectaculoAdmin->setImagen('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwGZBWvML3O07kI5-Endn_qY6SIuGr_3Fs6qq83uonVY_z49iaDw');
		$espectaculoAdmin->setMonto(100);
		$espectaculoAdmin->setSala($sala);
		$espectaculoAdmin->setTipoEspectaculo($tipoespectaculo);
		$espectaculos[]=$espectaculoAdmin;
		
		$sala=$this->getReference('Nombre-Sala-2');
		$tipoespectaculo=$this->getReference('Teatro');
		$espectaculoAdmin=new Espectaculo();
		$espectaculoAdmin->setNombre('NombreEspectaculo2');
		$espectaculoAdmin->setInicio(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setFin(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setImagen('http://www.arqhys.com/construcciones/fotos/construcciones/Escenarios-para-espectaculos-de-espectaculos.jpg');
		$espectaculoAdmin->setClasificacion('ATP');
		$espectaculoAdmin->setMonto(200);
		$espectaculoAdmin->setSala($sala);
		$espectaculoAdmin->setTipoEspectaculo($tipoespectaculo);
		$espectaculos[]=$espectaculoAdmin;
		

		$sala=$this->getReference('Nombre-Sala-3');
		$tipoespectaculo=$this->getReference('Circo');
		$espectaculoAdmin=new Espectaculo();
		$espectaculoAdmin->setNombre('NombreEspectaculo3');
		$espectaculoAdmin->setInicio(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setFin(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setImagen(
			'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQza3E3YQ_JzltLfQ_oCZ_7FklEf1sfzrJfUwsBQMFnFt7N7ok2');
		$espectaculoAdmin->setClasificacion('ATP');
		$espectaculoAdmin->setMonto(300);
		$espectaculoAdmin->setSala($sala);
		$espectaculoAdmin->setTipoEspectaculo($tipoespectaculo);
		$espectaculos[]=$espectaculoAdmin;
		

		$sala=$this->getReference('Nombre-Sala-4');
		$tipoespectaculo=$this->getReference('Espectaculo-Musical');
		$espectaculoAdmin=new Espectaculo();
		$espectaculoAdmin->setNombre('Nombre Espectaculo 4');
		$espectaculoAdmin->setInicio(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setFin(new \DateTime('2018-01-01'));
		$espectaculoAdmin->setImagen('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDTMYqC-WAKvMF88tIMxZRXbqZNg3FuQaH4mWKK4l34jKoPMYN');
		$espectaculoAdmin->setClasificacion('ATP');
		$espectaculoAdmin->setMonto(400);
		$espectaculoAdmin->setSala($sala);
		$espectaculoAdmin->setTipoEspectaculo($tipoespectaculo);
		$espectaculos[]=$espectaculoAdmin;
		
		
		foreach($espectaculos as $espectaculo) {
			$manager->persist($espectaculo);
		}
		
		$manager->flush();
	}


	public function getOrder()
	{
		return 3;
	}

}