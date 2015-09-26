<?php
// src/JonBirdsall/MenuBundle/Entity/Item.php

namespace JonBirdsall\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="JonBirdsall\MenuBundle\Entity\ItemRepository")
 * @ORM\Table(name="item")
 */
class Item
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $description;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $spicy;
    
    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="items")
     * @ORM\JoinTable(name="items_categories")
     */
    private $categories;
    
    public function __construct() {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
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
     * Set spicy
     *
     * @param boolean $spicy
     *
     * @return Item
     */
    public function setSpicy($spicy)
    {
        $this->spicy = $spicy;

        return $this;
    }

    /**
     * Get spicy
     *
     * @return boolean
     */
    public function getSpicy()
    {
        return $this->spicy;
    }

    /**
     * Add category
     *
     * @param \JonBirdsall\MenuBundle\Entity\Category $category
     *
     * @return Item
     */
    public function addCategory(\JonBirdsall\MenuBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \JonBirdsall\MenuBundle\Entity\Category $category
     */
    public function removeCategory(\JonBirdsall\MenuBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
