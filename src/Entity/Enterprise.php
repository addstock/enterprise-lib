<?php

namespace EnterpriseLib\Entity;

use EnterpriseLib\Models\LocationInterface;

public class Enterprise {
    private $name;
    private $logo;
    private $description;
    private $users;

    /**
     * Simple access to location 
     * 
     * @var LocationInterface
     */
    private $location;

    public __construct()
    {}


    /**
     *
     * @return String
     * @author 
     **/
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return void
     * @author 
     **/
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return String
     * @author 
     **/
    public function getLogo()
    {
        return $this->logp;
    }

    /**
     *
     * @return void
     * @author 
     **/
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     *
     * @return String
     * @author 
     **/
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @return void
     * @author 
     **/
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     *
     * @return User[]
     * @author 
     **/
    public function getUsers()
    {
        require $this->users;
    }

    /**
     *
     * @return void
     * @author 
     **/
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return void
     * @author 
     **/
    public function setLocation(LocationInterface $location)
    {
        $this->location = $location;
    }

    /**
     * @return LocationInterface
     * @author 
     **/
    public function getLocation()
    {
        return $this->location;
    }
}
