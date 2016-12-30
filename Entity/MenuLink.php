<?php

namespace DidUngar\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuLink
 *
 * @ORM\Table("menu_lnk")
 * @ORM\Entity(repositoryClass="DidUngar\MenuBundle\Entity\MenuLinkRepository")
 */
class MenuLink
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_menu", type="integer")
     */
    private $idMenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parent", type="integer")
     */
    private $idParent;

    /**
     * @var string
     *
     * @ORM\Column(name="acl", type="string", length=255)
     */
    private $acl;

    /**
     * @var string
     *
     * @ORM\Column(name="html", type="string", length=50)
     */
    private $html;

    /**
     * @var string
     *
     * @ORM\Column(name="href", type="string", length=150)
     */
    private $href;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=50)
     */
    private $class;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;


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
     * Set idMenu
     *
     * @param integer $idMenu
     *
     * @return MenuLink
     */
    public function setIdMenu($idMenu)
    {
        $this->idMenu = $idMenu;

        return $this;
    }

    /**
     * Get idMenu
     *
     * @return integer
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    /**
     * Set idParent
     *
     * @param integer $idParent
     *
     * @return MenuLink
     */
    public function setIdParent($idParent)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent
     *
     * @return integer
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set acl
     *
     * @param string $acl
     *
     * @return MenuLink
     */
    public function setAcl($acl)
    {
        $this->acl = $acl;

        return $this;
    }

    /**
     * Get acl
     *
     * @return string
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * Set html
     *
     * @param string $html
     *
     * @return MenuLink
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set href
     *
     * @param string $href
     *
     * @return MenuLink
     */
    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Get href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return MenuLink
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return MenuLink
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }
}

