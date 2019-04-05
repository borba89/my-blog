<?php

namespace App\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 *
 * @Gedmo\Tree(type="nested")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nameCategory;

    /**
     * @Gedmo\TreeLeft()
     * @ORM\Column(type="integer")
     */
    private $left;

    /**
     * @Gedmo\TreeRight()
     * @ORM\Column(type="integer")
     */
    private $right;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="children")
     *
     * @Gedmo\TreeParent()
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="parent")
     */
    private $children;

    /**
     *
     * @ORM\Column(type="string", length=255)
     * @Gedmo\Slug(fields={"nameCategory"})
     */
    private $slug;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Post", mappedBy="category",cascade={"persist", "remove"})
     */
    private $posts;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNameCategory(): ?string
    {
        return $this->nameCategory;
    }

    /**
     * @param string $nameCategory
     * @return Category
     */
    public function setNameCategory(string $nameCategory): self
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    /**
     * @return int
     */
    public function getLeft(): ?int
    {
        return $this->left;
    }

    /**
     * @param int $left
     * @return Category
     */
    public function setLeft(int $left): self
    {
        $this->left = $left;

        return $this;
    }

    /**
     * @return int
     */
    public function getRight(): ?int
    {
        return $this->right;
    }

    /**
     * @param int $right
     * @return Category
     */
    public function setRight(int $right): self
    {
        $this->right = $right;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param $parent
     * @return Category
     */
    public function setParent($parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param $children
     * @return Category
     */
    public function setChildren($children): self
    {
        $this->children = $children;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Category
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param $posts
     * @return Category
     */
    public function setPosts($posts): self
    {
        $this->posts = $posts;

        return $this;
    }
}
