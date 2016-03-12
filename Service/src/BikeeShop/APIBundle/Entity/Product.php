<?php
	namespace BikeeShop\APIBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
		* @ORM\Entity()
		* @ORM\Table(name="product")
	*/
	class Product
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
		* @ORM\Column(name="description", type="text", nullable=false)
		*/
		private $description;

		/**
		* @ORM\Column(name="price", type="decimal", scale=2, nullable=false)
		*/
		private $price;

		/**
		* @ORM\Column(name="stock", type="integer", scale=2, nullable=false)
		*/
		private $stock;

		/**
		* @ORM\Column(name="create_at", type="datetime", nullable=false)
		*/
		private $createAt;

		/**
		* @ORM\OneToOne(targetEntity="BikeeShop\APIBundle\Entity\Image", cascade={"persist"})
		* @ORM\JoinColumn(nullable=false)
		*/
		private $image;

		/**
		* @ORM\ManyToOne(targetEntity="BikeeShop\APIBundle\Entity\Category", inversedBy="products")
		* @ORM\JoinColumn(nullable=false)
		*/
		private $category;

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

		public function getName()
		{
			return $this->name;
		} 

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getDescription()
		{
			return $this->description;
		} 

		public function setDescription($description)
		{
			$this->description = $description;
		}

		public function getPrice()
		{
			return $this->price;
		} 

		public function setPrice($price)
		{
			$this->price = $price;
		}

		public function getStock()
		{
			return $this->stock;
		} 

		public function setStock($stock)
		{
			$this->stock = $stock;
		}

		public function getCreateAt()
		{
			return $this->createAt;
		} 

		public function setCreateAt($createAt)
		{
			$this->createAt = $createAt;
		}

		public function getImage()
		{
			return $this->image;
		} 

		public function setImage($image)
		{
			$this->image = $image;
		}

		public function getCategory()
		{
			return $this->category;
		} 

		public function setCategory($category)
		{
			$this->category = $category;
		}
	}
?>