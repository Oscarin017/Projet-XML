<?php
	namespace BikeeShop\APIBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\ORM\Mapping as ORM;

	/**
		* @ORM\Entity()
		* @ORM\Table(name="sale")
	*/
	class Sale
	{
		/**
		* @ORM\Column(name="id", type="integer", nullable=false)
		* @ORM\Id
		* @ORM\GeneratedValue(strategy="AUTO")
		*/
		private $id;
		/**
		* @ORM\Column(name="create_at", type="datetime", nullable=false)
		*/
		private $createAt;

		/**
		* @ORM\OneToMany(targetEntity="BikeeShop\APIBundle\Entity\SaleDetail", mappedBy="category")
		*/
		private $saleDetais;

		public function __construct()
		{
			$this->createAt = new \DateTime();
			$this->saleDetails = new ArrayCollection();
		}

		public function getId()
		{
			return $this->id;
		} 

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getCreateAt()
		{
			return $this->createAt;
		} 

		public function setCreateAt($createAt)
		{
			$this->createAt = $createAt;
		}

		public function addSaleDetail(\BikeeShop\APIBundle\Entity\SaleDetail $saleDetail)
		{
			$this->saleDetails[] = $saleDetail;
			return $this;
		}

		public function removeSaleDetail(\BikeeShop\APIBundle\Entity\SaleDetail $saleDetail)
		{
			$this->saleDetails->removeElement($saleDetail);
		}

		public function getSaleDetails())
		{
			return $this->saleDetails;
		}
	}
