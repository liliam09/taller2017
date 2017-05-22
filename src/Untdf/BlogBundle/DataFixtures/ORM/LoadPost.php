<?php
namespace Untdf\BlogBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Untdf\BlogBundle\Entity\Post;

class LoadPost implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$posts=array();

		$postAdmin=new Post();
		$postAdmin->setTitle('Tsumani destruye una ciudad');
		$postAdmin->setContent('Un terremoto de 8,9 en la escala de Richter desencadenó un tsunami que se llevó por delante la vida de más de 15.000 personas y provocó un accidente en la central nuclear de Fukushima el 11 de marzo de 2011.');	
		$postAdmin->setImagen('http://static.cronica.com.ar/FileAccessHandler.ashx?code=636297676878870201-w680');
		$posts[]=$postAdmin;

		$postAdmin=new Post();
		$postAdmin->setTitle('Terremoto en Tierra del Fuego');
		$postAdmin->setContent('El terremoto de Tierra del Fuego de 1949 fue un movimiento sísmico que tuvo lugar en el archipiélago de Tierra del Fuego, que comprende la provincia argentina de Tierra del Fuego, Antártida e Islas del Atlántico Sur y las chilenas de Tierra del Fuego y de Antártica Chilena. El sismo se registró el 17 de diciembre de 1949 y estuvo compuesto por una serie de movimientos sísmicos, que se iniciaron a las 6:53:30 (GMT) y finalizaron con uno a las 22:30:48 (GMT). Estos sismos tuvieron una magnitud de 7.7 ');	
		$postAdmin->setImagen('http://www.tvnotas.com.mx/sites/default/files/styles/imagenprincipal_1024x576/public/articulos/2017/05/05/tvn-05052017180403.jpg?itok=GbSaB3bT');
		$posts[]=$postAdmin;

		$postAdmin=new Post();
		$postAdmin->setTitle('Alud arrasa un pueblo');
		$postAdmin->setContent('Las fuertes lluvias, inundaciones, deslaves y derrumbes causados en México por dos fenómenos meteorológicos simultáneos, una tormenta en el Pacífico y un huracán que se degradó a tormenta tropical en el Golfo de México, han dejado al menos 172 muertos y miles de damnificados ');	
		$postAdmin->setImagen('http://www.tvnotas.com.mx/sites/default/files/styles/imagenprincipal_1024x576/public/articulos/2017/05/05/tvn-05052017180403.jpg?itok=GbSaB3bT');
		$posts[]=$postAdmin;

		$postAdmin=new Post();
		$postAdmin->setTitle('Arqueologos descubren 17 momias');
		$postAdmin->setContent('Un grupo de arqueólogos acaba de determinar que una casa descubierta en la década de 1880 ... Arqueologos descubren la casa de Jesus de Nazareth 01.');	
		$postAdmin->setImagen('http://www.tvnotas.com.mx/sites/default/files/styles/imagenprincipal_1024x576/public/articulos/2017/05/05/tvn-05052017180403.jpg?itok=GbSaB3bT');
		$posts[]=$postAdmin;

		foreach($posts as $post) {
			$manager->persist($post);
		}
		
		$manager->flush();
	}
}