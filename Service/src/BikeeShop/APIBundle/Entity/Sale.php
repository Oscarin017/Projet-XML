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
		* @ORM\Column(name="total", type="decimal", scale=2, nullable=false)
		*/
		private $total;

		/**
		* @ORM\Column(name="create_at", type="datetime", nullable=false)
		*/
		private $createAt;

		/**
		* @ORM\OneToOne(targetEntity="BikeeShop\APIBundle\Entity\Client", cascade={"persist"})
		* @ORM\JoinColumn(nullable=false)
		*/
		private $client;

		/**
		* @ORM\OneToMany(targetEntity="BikeeShop\APIBundle\Entity\SaleDetail", mappedBy="sale")
		*/
		private $saleDetails;

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

		public function getTotal()
		{
			return $this->total;
		} 

		public function setTotal($total)
		{
			$this->total = $total;
		}

		public function getCreateAt()
		{
			return $this->createAt;
		} 

		public function setCreateAt($createAt)
		{
			$this->createAt = $createAt;
		}

		public function getClient()
		{
			return $this->client;
		} 

		public function setClient($client)
		{
			$this->client = $client;
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

		public function getSaleDetails()
		{
			return $this->saleDetails;
		}
	}
