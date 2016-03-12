<?php
	namespace BikeeShop\APIBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
		* @ORM\Entity()
		* @ORM\Table(name="saleDetail")
	*/
	class SaleDetail
	{
		/**
		* @ORM\Column(name="id", type="integer", nullable=false)
		* @ORM\Id
		* @ORM\GeneratedValue(strategy="AUTO")
		*/
		private $id;

		/**
		* @ORM\Column(name="quantity", type="integer", scale=2, nullable=false)
		*/
		private $quantity;

		/**
		* @ORM\Column(name="subTotal", type="decimal", scale=2, nullable=false)
		*/
		private $subTotal;

		/**
		* @ORM\Column(name="create_at", type="datetime", nullable=false)
		*/
		private $createAt;

		/**
		* @ORM\OneToOne(targetEntity="BikeeShop\APIBundle\Entity\Product", cascade={"persist"})
		* @ORM\JoinColumn(nullable=false)
		*/
		private $product;

		/**
		* @ORM\ManyToOne(targetEntity="BikeeShop\APIBundle\Entity\Sale", inversedBy="saleDetails")
		* @ORM\JoinColumn(nullable=false)
		*/
		private $sale;

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

		public function getQuantity()
		{
			return $this->quantity;
		} 

		public function setQuantity($quantity)
		{
			$this->quantity = $quantity;
		}

		public function getSubTotal()
		{
			return $this->subTotal;
		} 

		public function setSubTotal($subTotal)
		{
			$this->subTotal = $subTotal;
		}

		public function getCreateAt()
		{
			return $this->createAt;
		} 

		public function setCreateAt($createAt)
		{
			$this->createAt = $createAt;
		}

		public function getProduct()
		{
			return $this->product;
		} 

		public function setProduct($product)
		{
			$this->product = $product;
		}

		public function getSale()
		{
			return $this->sale;
		} 

		public function setSale($sale)
		{
			$this->sale = $sale;
		}
	}
?>