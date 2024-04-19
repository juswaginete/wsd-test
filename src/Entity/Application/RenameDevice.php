<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameDevice
{

    /**
     * @var int $deviceId
     */
    protected $deviceId = null;

    /**
     * @var string $newName
     */
    protected $newName = null;

    /**
     * @var string $newDescription
     */
    protected $newDescription = null;

    /**
     * @param int $deviceId
     * @param string $newName
     * @param string $newDescription
     */
    public function __construct($deviceId, $newName, $newDescription)
    {
      $this->deviceId = $deviceId;
      $this->newName = $newName;
      $this->newDescription = $newDescription;
    }

    /**
     * @return int
     */
    public function getDeviceId()
    {
      return $this->deviceId;
    }

    /**
     * @param int $deviceId
     * @return \WSD\BrightSignApi\Entity\Application\RenameDevice
     */
    public function setDeviceId($deviceId)
    {
      $this->deviceId = $deviceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewName()
    {
      return $this->newName;
    }

    /**
     * @param string $newName
     * @return \WSD\BrightSignApi\Entity\Application\RenameDevice
     */
    public function setNewName($newName)
    {
      $this->newName = $newName;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewDescription()
    {
      return $this->newDescription;
    }

    /**
     * @param string $newDescription
     * @return \WSD\BrightSignApi\Entity\Application\RenameDevice
     */
    public function setNewDescription($newDescription)
    {
      $this->newDescription = $newDescription;
      return $this;
    }

}
