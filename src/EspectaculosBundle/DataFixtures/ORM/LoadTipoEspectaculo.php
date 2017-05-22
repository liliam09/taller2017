<?php
namespace EspectaculosBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EspectaculosBundle\Entity\TipoEspectaculo;

class LoadTipoEspectaculo extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$tipoespectaculos=array();

		$tipoespectaculoAdmin=new TipoEspectaculo();
		$tipoespectaculoAdmin->setNombre('Cine');
		$tipoespectaculos[]=$tipoespectaculoAdmin;
		$this->addReference('Cine',$tipoespectaculoAdmin);

		$tipoespectaculoAdmin=new TipoEspectaculo();
		$tipoespectaculoAdmin->setNombre('Teatro');
		$tipoespectaculos[]=$tipoespectaculoAdmin;
		$this->addReference('Teatro',$tipoespectaculoAdmin);

		$tipoespectaculoAdmin=new TipoEspectaculo();
		$tipoespectaculoAdmin->setNombre('Espectaculo-Musical');
		$tipoespectaculos[]=$tipoespectaculoAdmin;
		$this->addReference('Espectaculo-Musical',$tipoespectaculoAdmin);

		$tipoespectaculoAdmin=new TipoEspectaculo();
		$tipoespectaculoAdmin->setNombre('Circo');
		$tipoespectaculos[]=$tipoespectaculoAdmin;
		$this->addReference('Circo',$tipoespectaculoAdmin);

		foreach($tipoespectaculos as $TipoEspectaculo) {
			$manager->persist($TipoEspectaculo);
		}
		
		$manager->flush();
	}

	public function getOrder()
	{
		return 2;
	}
}