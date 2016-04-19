<?php

namespace HliveBundle\Entity;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $enfantCategories;

    /**
     * @var \HliveBundle\Entity\Categorie
     */
    private $categorieParent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enfantCategories = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Categorie
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
     * Set active
     *
     * @param boolean $active
     *
     * @return Categorie
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Add enfantCategory
     *
     * @param \HliveBundle\Entity\Categorie $enfantCategory
     *
     * @return Categorie
     */
    public function addEnfantCategory(\HliveBundle\Entity\Categorie $enfantCategory)
    {
        $this->enfantCategories[] = $enfantCategory;

        return $this;
    }

    /**
     * Remove enfantCategory
     *
     * @param \HliveBundle\Entity\Categorie $enfantCategory
     */
    public function removeEnfantCategory(\HliveBundle\Entity\Categorie $enfantCategory)
    {
        $this->enfantCategories->removeElement($enfantCategory);
    }

    /**
     * Get enfantCategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfantCategories()
    {
        return $this->enfantCategories;
    }

    /**
     * Set categorieParent
     *
     * @param \HliveBundle\Entity\Categorie $categorieParent
     *
     * @return Categorie
     */
    public function setCategorieParent(\HliveBundle\Entity\Categorie $categorieParent = null)
    {
        $this->categorieParent = $categorieParent;

        return $this;
    }

    /**
     * Get categorieParent
     *
     * @return \HliveBundle\Entity\Categorie
     */
    public function getCategorieParent()
    {
        return $this->categorieParent;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $biens;


    /**
     * Add bien
     *
     * @param \HliveBundle\Entity\Bien $bien
     *
     * @return Categorie
     */
    public function addBien(\HliveBundle\Entity\Bien $bien)
    {
        $this->biens[] = $bien;

        return $this;
    }

    /**
     * Remove bien
     *
     * @param \HliveBundle\Entity\Bien $bien
     */
    public function removeBien(\HliveBundle\Entity\Bien $bien)
    {
        $this->biens->removeElement($bien);
    }

    /**
     * Get biens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBiens()
    {
        return $this->biens;
    }
}
