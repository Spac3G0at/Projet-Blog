<?php 
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @vich\Uploadable
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     *
     * @var string
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     *
     * @var string
     */
    private $lastName;

    /**
     * @Assert\Image(
     *      maxSize="2M",
     *      mimeTypes={"image/png", "image/jpeg", "image/pjpeg"}
     * )
     * @Vich\UploadableField(mapping="user_avatar", fileNameProperty="avatar")
     *
     * @var File $avatarFile
     */
    protected $avatarFile;

    /**
     * @var string
     * 
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    protected $avatar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime $updatedAt
     */
    protected $updatedAt;


    /**
     * @param string $firstName
     *
     * @return static
     */
    public function setFirstName($firstName)
    {
    	$this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    

    /**
     * @param string $lastName
     *
     * @return static
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }



    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }


    public function setAvatarFile($avatarFile)
    {
        $this->avatarFile = $avatarFile;

        if ($avatarFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->setUpdatedAt(new \DateTime());
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getAvatarFile()
    {
        return $this->avatarFile;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Gets the value of updatedAt.
     *
     * @return \DateTime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Sets the value of updatedAt.
     *
     * @param \DateTime $updatedAt $updatedAt the updated at
     *
     * @return self
     */
    protected function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}