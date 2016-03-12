<?php 

namespace BikeeShop\APIBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
*  @ORM\Entity()
*  @ORM\Table(name="client")
*/
class client
{
	/**
	*  @ORM\Column(name="id", type="integer", nullable=false)
	*  @ORM\Id
	*  @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	*  @ORM\Column(name="firstName", type="string", length=255, nullable=false)
	*  @Assert\NotBlank()
	*/
	private $firstName;

	/**
	*  @ORM\Column(name="lastName", type="string", length=255, nullable=false)
	*  @Assert\NotBlank()
	*/
	private $lastName;

	/**
	*  @ORM\Column(name="address", type="string", length=255, nullable=false)
	*  @Assert\NotBlank()
	*/
	private $address;

	/**
	*  @ORM\Column(name="password", type="string", length=255, nullable=false)
	*  @Assert\NotBlank()
	*/
	private $password;

	/**
	*  @ORM\Column(name="email", type="string", length=255, nullable=false)
	*  @Assert\Email(message = "L'email '{{ value }}' n'est pas valide.", checkMX = true)
	*/
	private $email;

	public function getEmail()
	{
		return $this->email;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function getFirstName()
	{
		return $this->firstName;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}	
	public function setId($id)
	{
		$this->id = $id;
	}
}
