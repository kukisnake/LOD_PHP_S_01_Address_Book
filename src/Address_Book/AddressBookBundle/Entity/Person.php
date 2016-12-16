<?php

namespace Address_Book\AddressBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="Address_Book\AddressBookBundle\Repository\PersonRepository")
 */
class Person {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var type 
     * @ORM\ManyToMany(targetEntity="Groups", inversedBy="person")
     * @ORM\JoinTable(name="person_groups")
     */
    private $groups;

    /**
     * @var type 
     * @ORM\OneToMany(targetEntity="Email", mappedBy="person")
     */
    private $email;

    /**
     * @var type 
     * 
     * @ORM\OneToMany(targetEntity="Phone", mappedBy="person")
     */
    private $phone;

    /**
     *
     * @var type 
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="person")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname) {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Person
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set address
     *
     * @param \Address_Book\AddressBookBundle\Entity\Address $address
     * @return Person
     */
    public function setAddress(\Address_Book\AddressBookBundle\Entity\Address $address = null) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \Address_Book\AddressBookBundle\Entity\Address 
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->phone = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add phone
     *
     * @param \Address_Book\AddressBookBundle\Entity\Phone $phone
     * @return Person
     */
    public function addPhone(\Address_Book\AddressBookBundle\Entity\Phone $phone) {
        $this->phone[] = $phone;

        return $this;
    }

    /**
     * Remove phone
     *
     * @param \Address_Book\AddressBookBundle\Entity\Phone $phone
     */
    public function removePhone(\Address_Book\AddressBookBundle\Entity\Phone $phone) {
        $this->phone->removeElement($phone);
    }

    /**
     * Get phone
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhone() {
        return $this->phone;
    }


    /**
     * Add email
     *
     * @param \Address_Book\AddressBookBundle\Entity\Email $email
     * @return Person
     */
    public function addEmail(\Address_Book\AddressBookBundle\Entity\Email $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * Remove email
     *
     * @param \Address_Book\AddressBookBundle\Entity\Email $email
     */
    public function removeEmail(\Address_Book\AddressBookBundle\Entity\Email $email)
    {
        $this->email->removeElement($email);
    }

    /**
     * Get email
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add groups
     *
     * @param \Address_Book\AddressBookBundle\Entity\Groups $groups
     * @return Person
     */
    public function addGroup(\Address_Book\AddressBookBundle\Entity\Groups $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \Address_Book\AddressBookBundle\Entity\Groups $groups
     */
    public function removeGroup(\Address_Book\AddressBookBundle\Entity\Groups $groups)
    {
        $this->groups->removeElement($groups);
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
}
