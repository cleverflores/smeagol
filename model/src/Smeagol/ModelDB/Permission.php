<?php

namespace Smeagol\ModelDB;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 *
 * @ORM\Table(name="permission")
 * @ORM\Entity
 */
class Permission
{
    /**
     * @var string
     *
     * @ORM\Column(name="resource", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Smeagol\ModelDB\Role", mappedBy="permissionResource")
     */
    private $roleType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roleType = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get resource
     *
     * @return string 
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Permission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add roleType
     *
     * @param \Smeagol\ModelDB\Role $roleType
     * @return Permission
     */
    public function addRoleType(\Smeagol\ModelDB\Role $roleType)
    {
        $this->roleType[] = $roleType;

        return $this;
    }

    /**
     * Remove roleType
     *
     * @param \Smeagol\ModelDB\Role $roleType
     */
    public function removeRoleType(\Smeagol\ModelDB\Role $roleType)
    {
        $this->roleType->removeElement($roleType);
    }

    /**
     * Get roleType
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoleType()
    {
        return $this->roleType;
    }
}
