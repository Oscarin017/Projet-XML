<?php
	namespace BikeeShop\APIBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\ORM\Mapping as ORM;

	/**
		* @ORM\Entity()
		* @ORM\Table(name="category")
	*/
	class Category
	{
		/**
		* @ORM\Column(name="id", type="integer", nullable=false)
		* @ORM\Id
		* @ORM\GeneratedValue(strategy="AUTO")
		*/
		private $id;

		/**
		* @ORM\Column(name="name", type="string", length=255, nullable=false)
		*/
		private $name;

		/**
		* @ORM\Column(name="create_at", type="datetime", nullable=false)
		*/
		private $createAt;

		/**
		* @ORM\OneToMany(targetEntity="BikeeShop\APIBundle\Entity\Product", mappedBy="category")
		*/
		private $products;

		public function __construct()
		{
			$this->createAt = new \DateTime();
			$this->products = new ArrayCollection();
		}

		public function getId()
		{
			return $this->id;
		} 

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getName()
		{
			return $this->name;
		} 

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getCreateAt()
		{
			return $this->createAt;
		} 

		public function setCreateAt($createAt)
		{
			$this->createAt = $createAt;
		}

		public function addProduct(\BikeeShop\APIBundle\Entity\Product $product)
		{
			$this->products[] = $product;
			return $this;
		}

		public function removeProduct(\BikeeShop\APIBundle\Entity\Product $product)
		{
			$this->products->removeElement($product);
		}

		public function getProducts()
		{
			return $this->products;
		}
	}
