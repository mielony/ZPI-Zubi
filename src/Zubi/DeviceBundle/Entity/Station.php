<?php

namespace Zubi\DeviceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Zubi\DeviceBundle\Entity\Station
 */
class Station
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $hash
     */
    private $hash;

    /**
     * @var string $version
     */
    private $version;

    /**
     * @var string $country
     */
    private $country;

    /**
     * @var string $city
     */
    private $city;

    /**
     * @var string $street
     */
    private $street;

    /**
     * @var float $longitude
     */
    private $longitude;

    /**
     * @var float $latitude
     */
    private $latitude;

    /**
     * @var Zubi\UserBundle\Entity\User $user;
     */
    private $user;

    /**
     * @var Zubi\DeviceBundle\Entity\ProducedStation $producedStation;
     */
    private $producedStation;


    /**
     * @var ArrayCollection $measurements;
     */
    private $measurements;

    public function __construct() {
        $this->measurements = new ArrayCollection();
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
     * Set hash
     *
     * @param string $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set version
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     */
    public function setStreet($street)
    {
        $this->street = $street;
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
     * Set longitude
     *
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Add measurements
     *
     * @param Zubi\DeviceBundle\Entity\Measurement $measurements
     */
    public function addMeasurement(\Zubi\DeviceBundle\Entity\Measurement $measurements)
    {
        $this->measurements[] = $measurements;
    }

    /**
     * Get measurements
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMeasurements()
    {
        return $this->measurements;
    }

    
    
    /**
     * @var integer $userId
     */
    private $userId;

    /**
     * @var Zubi\UserBundle\Entity\User
     */
    private $station;


    /**
     * Set station
     *
     * @param Zubi\UserBundle\Entity\User $station
     */
    public function setStation(\Zubi\UserBundle\Entity\User $station)
    {
        $this->station = $station;
    }

    /**
     * Get station
     *
     * @return Zubi\UserBundle\Entity\User 
     */
    public function getStation()
    {
        return $this->station;
    }

    /**
     * Set user
     *
     * @param Zubi\UserBundle\Entity\User $user
     */
    public function setUser(\Zubi\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Zubi\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set producedStation
     *
     * @param Zubi\DeviceBundle\Entity\ProducedStation $producedStation
     * @return Station
     */
    public function setProducedStation(\Zubi\DeviceBundle\Entity\ProducedStation $producedStation = null)
    {
        $this->producedStation = $producedStation;
        return $this;
    }

    /**
     * Get producedStation
     *
     * @return Zubi\DeviceBundle\Entity\ProducedStation 
     */
    public function getProducedStation()
    {
        return $this->producedStation;
    }
}