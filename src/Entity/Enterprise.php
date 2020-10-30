<?php

namespace EnterpriseLib\Entity;

use Doctrine\ORM\Mapping as ORM;
use EnterpriseLib\Models\LocationInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="enterprise")
 */
class Enterprise {
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    
    /** 
     * @ORM\Column(type="string", length=100) 
     */
    private $name;
    
    /** 
     * @ORM\Column(type="string") 
     */
    private $logo;
    
    /** 
     * @ORM\Column(type="text") 
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="user", mappedBy="enterprise", indexBy="enterpriseId")
     * @var User[]
     */
    private $users;

    /**
     * Simple access to location 
     * 
     * @var LocationInterface
     */
    private $location;

    public function __construct() {
        $this->users = new ArrayCollection();
    }

    /**
     *
     * @return String
     **/
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return void
     **/
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return String
     **/
    public function getLogo()
    {
        return $this->logp;
    }

    /**
     *
     * @return void
     **/
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     *
     * @return String
     **/
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @return void
     **/
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     *
     * @return User[]
     **/
    public function getUsers()
    {
        require $this->users;
    }

    /**
     *
     * @return void
     **/
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return void
     **/
    public function setLocation(LocationInterface $location)
    {
        $this->location = $location;
    }

    /**
     * @return LocationInterface
     **/
    public function getLocation()
    {
        return $this->location;
    }
}
