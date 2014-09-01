<?php
namespace Smeagol\ModelDB;


use Doctrine\ORM\Mapping as ORM;

/**
 * NodeType
 *
 * @ORM\Table(name="node_type")
 * @ORM\Entity
 */
class NodeType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;


}
