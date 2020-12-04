<?php

namespace EnterpriseLib\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
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
     * @ORM\ManyToOne(targetEntity="EnterpriseLib\Entity\Enterprise", inversedBy="users")
     * @ORM\JoinColumn(name="enterprise_id", referencedColumnName="id")
     * @var Enterprise|null
     */
    private $enterprise;

    /**
     * @ORM\OneToOne(targetEntity="EnterpriseLib\Entity\Role", inversedBy="user", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id", nullable=false)
     * @var Role
     */
    private $role;

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

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Role $role
     *
     * @return self
     */
    public function setRole(Role $role)
    {
        $this->role = $role;
    }
}
