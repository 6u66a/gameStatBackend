<?php

namespace Application\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $loginCount = 0;

    /**
     * @var \Application\Entity\Address
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $phonenumbers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phonenumbers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return User
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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set loginCount
     *
     * @param integer $loginCount
     *
     * @return User
     */
    public function setLoginCount($loginCount)
    {
        $this->loginCount = $loginCount;

        return $this;
    }

    /**
     * Get loginCount
     *
     * @return integer
     */
    public function getLoginCount()
    {
        return $this->loginCount;
    }

    /**
     * Set address
     *
     * @param \Application\Entity\Address $address
     *
     * @return User
     */
    public function setAddress(\Application\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Application\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add phonenumber
     *
     * @param \Application\Entity\Phonenumber $phonenumber
     *
     * @return User
     */
    public function addPhonenumber(\Application\Entity\Phonenumber $phonenumber)
    {
        $this->phonenumbers[] = $phonenumber;

        return $this;
    }

    /**
     * Remove phonenumber
     *
     * @param \Application\Entity\Phonenumber $phonenumber
     */
    public function removePhonenumber(\Application\Entity\Phonenumber $phonenumber)
    {
        $this->phonenumbers->removeElement($phonenumber);
    }

    /**
     * Get phonenumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhonenumbers()
    {
        return $this->phonenumbers;
    }

    /**
     * Add group
     *
     * @param \Application\Entity\Group $group
     *
     * @return User
     */
    public function addGroup(\Application\Entity\Group $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Application\Entity\Group $group
     */
    public function removeGroup(\Application\Entity\Group $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups()
    {
        return $this->groups;
    }
    /**
     * @ORM\PrePersist
     */
    public function doStuffOnPrePersist()
    {
        // Add your code here
    }

    /**
     * @ORM\PrePersist
     */
    public function doOtherStuffOnPrePersistToo()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function doStuffOnPostPersist()
    {
        // Add your code here
    }
}

