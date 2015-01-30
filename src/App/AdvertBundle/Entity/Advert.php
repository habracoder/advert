<?php

namespace App\AdvertBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="App\AdvertBundle\Entity\AdvertRepository")
 */
class Advert
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=500, nullable=false)
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_of_views", type="integer")
     */
    private $countOfViews;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="adverts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     **/
    private $category;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\UserBundle\Entity\User", inversedBy="adverts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     **/
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @ORM\OneToMany(targetEntity="App\StorageBundle\Entity\Image", mappedBy="advert")
     **/
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity="App\UserBundle\Entity\User", mappedBy="advertBookmarks")
     **/
    private $userBookmarks;

    public function __construct()
    {
        $this->userBookmarks = new ArrayCollection();
        $this->countOfViews = 0;
        $this->isEnabled = false;
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
     * Set title
     *
     * @param string $title
     * @return Advert
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
     * @return Advert
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
     * Set countOfViews
     *
     * @param integer $countOfViews
     * @return Advert
     */
    public function setCountOfViews($countOfViews)
    {
        $this->countOfViews = $countOfViews;

        return $this;
    }

    /**
     * @return $this
     */
    public function countOfViewsAddOne()
    {
        $this->countOfViews++;

        return $this;
    }

    /**
     * Get countOfViews
     *
     * @return integer 
     */
    public function getCountOfViews()
    {
        return $this->countOfViews;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Advert
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Advert
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Advert
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     * @return Advert
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean 
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set user
     *
     * @param \App\UserBundle\Entity\User $user
     * @return Advert
     */
    public function setUser(\App\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set category
     *
     * @param \App\AdvertBundle\Entity\Category $category
     * @return Advert
     */
    public function setCategory(\App\AdvertBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \App\AdvertBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add images
     *
     * @param \App\StorageBundle\Entity\Image $images
     * @return Advert
     */
    public function addImage(\App\StorageBundle\Entity\Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \App\StorageBundle\Entity\Image $images
     */
    public function removeImage(\App\StorageBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add userBookmarks
     *
     * @param \App\UserBundle\Entity\User $userBookmarks
     * @return Advert
     */
    public function addUserBookmark(\App\UserBundle\Entity\User $userBookmarks)
    {
        $this->userBookmarks[] = $userBookmarks;

        return $this;
    }

    /**
     * Remove userBookmarks
     *
     * @param \App\UserBundle\Entity\User $userBookmarks
     */
    public function removeUserBookmark(\App\UserBundle\Entity\User $userBookmarks)
    {
        $this->userBookmarks->removeElement($userBookmarks);
    }

    /**
     * Get userBookmarks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserBookmarks()
    {
        return $this->userBookmarks;
    }
}
