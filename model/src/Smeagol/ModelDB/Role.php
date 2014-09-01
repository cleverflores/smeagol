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
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Permission", inversedBy="roleType")
     * @ORM\JoinTable(name="role_permission",
     *   joinColumns={
     *     @ORM\JoinColumn(name="role_type", referencedColumnName="type")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="permission_resource", referencedColumnName="resource")
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

}
