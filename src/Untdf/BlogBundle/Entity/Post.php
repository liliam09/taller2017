<?php
namespace Untdf\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
*@ORM\Entity
*@ORM\Table(name="post")
*/
class Post
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
	protected $title;

	/**
	*@ORM\Column(type="text",name="col_cont")
	*/
	protected $content;

	/**
	*@ORM\Column(type="string",length=100)
	*/
	protected $imagen;

	public function getId(){
		return $this->id;
			}

	public function getTitle(){
		return $this->title;
			}

	public function setTitle($aTitle){
		$this->title=$aTitle;
	}

	public function getContent(){
		return $this->content;
			}

	public function setContent($aContent){
		$this->content=$aContent;
	}
	public function getImagen(){
		return $this->imagen;
			}

	public function setImagen($aImagen){
		$this->imagen=$aImagen;
	}

}