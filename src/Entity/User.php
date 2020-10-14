<?php

namespace EnterpriseLib\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="users")
 */
class User
{
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
    private $firstname;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $lastname;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $enterpriseId;

    /**
     * 
     * @return int 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 
     * @return string
     */
    public function getFirstname()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setFirstname($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     **/
    public function getLastname()
    {
    	return $this->lastname;
    }

    /**
     *
     * @return void
     **/
    public function setLastname($lastname)
    {
    	$this->lastname = $lastname;
    }

    /**
     *
     * @return int
     **/
    public function getEnterpriseId()
    {
    	require $this->enterpriseId;
    }

    /**
     * @return void
     * @author 
     **/
    public function setEnterpriseId($enterpriseId)
    {
    	$this->enterpriseId = $enterpriseId;
    }
}
