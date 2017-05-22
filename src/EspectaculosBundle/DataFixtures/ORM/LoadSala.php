<?php
namespace EspectaculosBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EspectaculosBundle\Entity\Sala;

class LoadSala extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$salas=array();

		$salaAdmin=new Sala();
		$salaAdmin->setNombre('Nombre Sala 1');
		$salaAdmin->setDescripcion('Descripcion Sala');	
		$salaAdmin->setDireccion('Florida 3822, CF');
		$salaAdmin->setImagen('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwGZBWvML3O07kI5-Endn_qY6SIuGr_3Fs6qq83uonVY_z49iaDw');
		$salaAdmin->setLatitud(10);
		$salaAdmin->setLongitud(20);
		$salas[]=$salaAdmin;
		$this->addReference('Nombre-Sala-1',$salaAdmin);

		$salaAdmin=new Sala();
		$salaAdmin->setNombre('Nombre Sala 2');
		$salaAdmin->setDescripcion('Descripcion Sala 2');	
		$salaAdmin->setDireccion('Direccion Sala 2');
		$salaAdmin->setImagen('http://www.arqhys.com/construcciones/fotos/construcciones/Escenarios-para-salas-de-espectaculos.jpg');
		$salaAdmin->setLatitud(10);
		$salaAdmin->setLongitud(20);
		$salas[]=$salaAdmin;
		$this->addReference('Nombre-Sala-2',$salaAdmin);

		$salaAdmin=new Sala();
		$salaAdmin->setNombre('Nombre Sala 3');
		$salaAdmin->setDescripcion('Descripcion Sala 3');	
		$salaAdmin->setDireccion('Direccion Sala 3');
		$salaAdmin->setImagen(
			'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQza3E3YQ_JzltLfQ_oCZ_7FklEf1sfzrJfUwsBQMFnFt7N7ok2');
		$salaAdmin->setLatitud(10);
		$salaAdmin->setLongitud(20);
		$salas[]=$salaAdmin;
		$this->addReference('Nombre-Sala-3',$salaAdmin);

		$salaAdmin=new Sala();
		$salaAdmin->setNombre('Nombre Sala 4');
		$salaAdmin->setDescripcion('Descripcion Sala 4');	
		$salaAdmin->setDireccion('Direccion Sala 4');
		$salaAdmin->setImagen('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDTMYqC-WAKvMF88tIMxZRXbqZNg3FuQaH4mWKK4l34jKoPMYN');
		$salaAdmin->setLatitud(10);
		$salaAdmin->setLongitud(20);
		$salas[]=$salaAdmin;
		$this->addReference('Nombre-Sala-4',$salaAdmin);

		foreach($salas as $sala) {
			$manager->persist($sala);
		}
		
		$manager->flush();
	}


	public function getOrder()
	{
		return 1;
	}

}