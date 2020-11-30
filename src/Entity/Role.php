<?php

namespace EnterpriseLib\Entiry;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 */
class Role {
	/**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
	private $id;

	/**
     * @ORM\Column(type="string")
     * @var string
     */
	private $name;


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function getId()
	{
		return $this->id;
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function getName()
	{
		return $this->name;
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author
	 **/
	public function setName($name)
	{
		$this->name = $name;
	}
}