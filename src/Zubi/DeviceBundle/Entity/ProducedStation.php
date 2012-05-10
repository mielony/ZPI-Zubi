<?php

namespace Zubi\DeviceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zubi\DeviceBundle\Entity\ProducedStation
 */
class ProducedStation
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $mac
     */
    private $mac;

    /**
     * @var Zubi\DeviceBundle\Entity\Station $station;
     */
    private $station;
    
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
     * Set mac
     *
     * @param string $mac
     * @return ProducedStation
     */
    public function setMac($mac)
    {
        $this->mac = $mac;
        return $this;
    }

    /**
     * Get mac
     *
     * @return string 
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Set station
     *
     * @param Zubi\DeviceBundle\Entity\Station $station
     * @return ProducedStation
     */
    public function setStation(\Zubi\DeviceBundle\Entity\Station $station = null)
    {
        $this->station = $station;
        return $this;
    }

    /**
     * Get station
     *
     * @return Zubi\DeviceBundle\Entity\Station 
     */
    public function getStation()
    {
        return $this->station;
    }
}