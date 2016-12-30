<?php

namespace DidUngar\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DidUngar\MenuBundle\Entity\MenuRepository")
 */
class Menu
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
     * @ORM\Column(name="id_site", type="integer")
     */
    private $idSite;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=255)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="sub", type="string", length=255)
     */
    private $sub;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_sub", type="string", length=255)
     */
    private $subSub;

    /**
     * @var string
     *
     * @ORM\Column(name="www", type="integer")
     */
    private $www;

    /**
     * @var integer
     *
     * @ORM\Column(name="user", type="integer")
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
     * Set idSite
     *
     * @param integer $idSite
     *
     * @return Menu
     */
    public function setIdSite($idSite)
    {
        $this->idSite = $idSite;

        return $this;
    }

    /**
     * Get idSite
     *
     * @return integer
     */
    public function getIdSite()
    {
        return $this->idSite;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Menu
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
     * Set module
     *
     * @param string $module
     *
     * @return Menu
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set sub
     *
     * @param string $sub
     *
     * @return Menu
     */
    public function setSub($sub)
    {
        $this->sub = $sub;

        return $this;
    }

    /**
     * Get sub
     *
     * @return string
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * Set subSub
     *
     * @param string $subSub
     *
     * @return Menu
     */
    public function setSubSub($subSub)
    {
        $this->subSub = $subSub;

        return $this;
    }

    /**
     * Get subSub
     *
     * @return string
     */
    public function getSubSub()
    {
        return $this->subSub;
    }

    /**
     * Set www
     *
     * @param string $www
     *
     * @return Menu
     */
    public function setWww($www)
    {
        $this->www = $www;

        return $this;
    }

    /**
     * Get www
     *
     * @return string
     */
    public function getWww()
    {
        return $this->www;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Menu
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }
}

