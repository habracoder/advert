<?php
namespace App\UserBundle\Entity;

use App\StorageBundle\Entity\Image;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Util\SecureRandom;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    const GENDER_MALE   = 'male';
    const GENDER_FEMALE = 'female';
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=64, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=64, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(name="gender", type="string", columnDefinition="ENUM('female', 'male')", nullable=false)
     */
    private $gender;

    /**
     * @ORM\OneToMany(targetEntity="App\AdvertBundle\Entity\Advert", mappedBy="user")
     **/
    private $adverts;

    /**
     * @ORM\ManyToMany(targetEntity="App\AdvertBundle\Entity\Advert", inversedBy="userBookmarks")
     * @ORM\JoinTable(name="user_to_advert_bookmark")
     **/
    private $advertBookmarks;

    /**
     * Avatar image
     *
     * @var Image
     *
     * @ORM\OneToOne(targetEntity="App\StorageBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    protected $image;

    public function __construct()
    {
        parent::__construct();

        if (null === $this->getUsername()) {
            $generator = new SecureRandom();
            $this->setUsername(md5(bin2hex($generator->nextBytes('32'))));
        }
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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    public function getFullName()
    {
        return sprintf('%s %s', $this->getLastName(), $this->getFirstName());
    }

    /**
     * Add adverts
     *
     * @param \App\AdvertBundle\Entity\Advert $adverts
     * @return User
     */
    public function addAdvert(\App\AdvertBundle\Entity\Advert $adverts)
    {
        $this->adverts[] = $adverts;

        return $this;
    }

    /**
     * Remove adverts
     *
     * @param \App\AdvertBundle\Entity\Advert $adverts
     */
    public function removeAdvert(\App\AdvertBundle\Entity\Advert $adverts)
    {
        $this->adverts->removeElement($adverts);
    }

    /**
     * Get adverts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdverts()
    {
        return $this->adverts;
    }

    /**
     * Set image
     *
     * @param \App\StorageBundle\Entity\Image $image
     * @return User
     */
    public function setImage(\App\StorageBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \App\StorageBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    public function getAvatar()
    {
        return null !== $this->getImage() ? $this->getImage()->getWebPath() : 'assets/img/no_photo.png' ;
    }

    /**
     * Add advertBookmarks
     *
     * @param \App\AdvertBundle\Entity\Advert $advertBookmarks
     * @return User
     */
    public function addAdvertBookmark(\App\AdvertBundle\Entity\Advert $advertBookmarks)
    {
        $this->advertBookmarks[] = $advertBookmarks;

        return $this;
    }

    /**
     * Remove advertBookmarks
     *
     * @param \App\AdvertBundle\Entity\Advert $advertBookmarks
     */
    public function removeAdvertBookmark(\App\AdvertBundle\Entity\Advert $advertBookmarks)
    {
        $this->advertBookmarks->removeElement($advertBookmarks);
    }

    /**
     * Get advertBookmarks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdvertBookmarks()
    {
        return $this->advertBookmarks;
    }
}
