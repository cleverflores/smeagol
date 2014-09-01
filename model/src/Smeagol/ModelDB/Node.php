<?php

namespace Smeagol\ModelDB;

use Doctrine\ORM\Mapping as ORM;

/**
 * Node
 *
 * @ORM\Table(name="node", indexes={@ORM\Index(name="fk_node_node_type1_idx", columns={"node_type_id"}), @ORM\Index(name="fk_node_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Node
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $modified;

    /**
     * @var \Smeagol\ModelDB\NodeType
     *
     * @ORM\ManyToOne(targetEntity="Smeagol\ModelDB\NodeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="node_type_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $nodeType;

    /**
     * @var \Smeagol\ModelDB\User
     *
     * @ORM\ManyToOne(targetEntity="Smeagol\ModelDB\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Node
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Node
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Node
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Node
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Node
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set nodeType
     *
     * @param \Smeagol\ModelDB\NodeType $nodeType
     * @return Node
     */
    public function setNodeType(\Smeagol\ModelDB\NodeType $nodeType = null)
    {
        $this->nodeType = $nodeType;

        return $this;
    }

    /**
     * Get nodeType
     *
     * @return \Smeagol\ModelDB\NodeType 
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * Set user
     *
     * @param \Smeagol\ModelDB\User $user
     * @return Node
     */
    public function setUser(\Smeagol\ModelDB\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Smeagol\ModelDB\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
