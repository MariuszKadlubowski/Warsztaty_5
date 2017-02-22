<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adres
 *
 * @ORM\Table(name="adres")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdresRepository")
 */
class Adres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=50)
     */
    private $street;

    /**
     * @var int
     *
     * @ORM\Column(name="homeNo", type="integer")
     */
    private $homeNo;

    /**
     * @var int
     *
     * @ORM\Column(name="homeNoExt", type="integer", nullable=true)
     */
    private $homeNoExt;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Contact", inversedBy="addresses")
     */
    private $contact;


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
     * Set city
     *
     * @param string $city
     * @return Adres
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Adres
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set homeNo
     *
     * @param integer $homeNo
     * @return Adres
     */
    public function setHomeNo($homeNo)
    {
        $this->homeNo = $homeNo;

        return $this;
    }

    /**
     * Get homeNo
     *
     * @return integer 
     */
    public function getHomeNo()
    {
        return $this->homeNo;
    }

    /**
     * Set homeNoExt
     *
     * @param integer $homeNoExt
     * @return Adres
     */
    public function setHomeNoExt($homeNoExt)
    {
        $this->homeNoExt = $homeNoExt;

        return $this;
    }

    /**
     * Get homeNoExt
     *
     * @return integer 
     */
    public function getHomeNoExt()
    {
        return $this->homeNoExt;
    }

    /**
     * Set contact
     *
     * @param \AppBundle\Entity\Contact $contact
     * @return Adres
     */
    public function setContact(\AppBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \AppBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }
}
