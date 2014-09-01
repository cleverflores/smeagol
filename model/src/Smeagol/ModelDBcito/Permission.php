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
     * @ORM\Column(name="resource", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Role", mappedBy="permissionResource")
     */
    private $roleType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roleType = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
