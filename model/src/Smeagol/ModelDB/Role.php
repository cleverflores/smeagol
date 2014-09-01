<?php

namespace Smeagol\ModelDB;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Smeagol\ModelDB\Permission", inversedBy="roleType")
     * @ORM\JoinTable(name="role_permission",
     *   joinColumns={
     *     @ORM\JoinColumn(name="role_type", referencedColumnName="type", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="permission_resource", referencedColumnName="resource", nullable=true)
     *   }
     * )
     */
    private $permissionResource;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permissionResource = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Role
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
     * Add permissionResource
     *
     * @param \Smeagol\ModelDB\Permission $permissionResource
     * @return Role
     */
    public function addPermissionResource(\Smeagol\ModelDB\Permission $permissionResource)
    {
        $this->permissionResource[] = $permissionResource;

        return $this;
    }

    /**
     * Remove permissionResource
     *
     * @param \Smeagol\ModelDB\Permission $permissionResource
     */
    public function removePermissionResource(\Smeagol\ModelDB\Permission $permissionResource)
    {
        $this->permissionResource->removeElement($permissionResource);
    }

    /**
     * Get permissionResource
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPermissionResource()
    {
        return $this->permissionResource;
    }
}
