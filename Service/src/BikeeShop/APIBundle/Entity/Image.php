<?php
	namespace BikeeShop\APIBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
		* @ORM\Entity()
		* @ORM\Table(name="image")
	*/
	class Image
	{
		/**
		* @ORM\Column(name="id", type="integer", nullable=false)
		* @ORM\Id
		* @ORM\GeneratedValue(strategy="AUTO")
		*/
		private $id;

		/**
		* @ORM\Column(name="url", type="string", length=255, nullable=false)
		*/
		private $url;

		/**
		* @ORM\Column(name="alt", type="string", length=255, nullable=false)
		*/
		private $alt;
		
		/**
		* @ORM\Column(name="create_at", type="datetime", nullable=false)
		*/
		private $createAt;

		public function __construct()
		{
			$this->createAt = new \DateTime();
		}
		public function getId()
		{
			return $this->id;
		} 

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getURL()
		{
			return $this->url;
		} 

		public function setURL($url)
		{
			$this->url = $url;
		}

		public function getAlt()
		{
			return $this->alt;
		} 

		public function setAlt($alt)
		{
			$this->alt = $alt;
		}
	}
