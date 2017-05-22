<?php

namespace Untdf\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/posts")
     */
    public function indexAction()
    {/*
        return $this->render('UntdfBlogBundle:Default:index.html.twig', array(
        	'posts'=> $this->getPosts()
        ));*/

        $posts=$this->getDoctrine()
        			->getRepository('UntdfBlogBundle:Post')
        			->findAll();

        return $this->render('UntdfBlogBundle:Default:index.html.twig',
        	array(
        		'posts'=>$posts
        		)
        	);
    }

    /**
     * @Route("/post/{id}", name="show_post")
     */
    public function showAction($id)
    {
        /*return $this->render('UntdfBlogBundle:Default:show.html.twig', array(
        	'id' => $id)):*/
       
       $post=$this->getDoctrine()
        			->getRepository('UntdfBlogBundle:Post')
        			->find($id);
       return $this->render('UntdfBlogBundle:Default:show.html.twig',
       		array('post' => $post
        )
       );
    }
    /* este metodo es estatico
    private function getPosts()
    {
     return array(
      array(
       'id'=>0,
       'title'=>'Tsumani destruye una ciudad',
       'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
       'image'=>'http://static.cronica.com.ar/FileAccessHandler.ashx?code=636297676878870201-w680'
       ),
       array(
       'id'=>1,
       'title'=>'UNTDF en Tolhuin',
       'content'=>'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
       'image'=>'http://www.tvnotas.com.mx/sites/default/files/styles/imagenprincipal_1024x576/public/articulos/2017/05/05/tvn-05052017180403.jpg?itok=GbSaB3bT'
       ) 
      );
    }*/ 
}
