<?php

namespace WSD\BrightSignApi\Entity\Application;

class ReassignDevices
{

    /**
     * @var ArrayOfint $deviceIds
     */
    protected $deviceIds = null;

    /**
     * @var int $newGroupId
     */
    protected $newGroupId = null;

    /**
     * @var int $newBrightWallId
     */
    protected $newBrightWallId = null;

    /**
     * @var int $newBrightWallScreenNumber
     */
    protected $newBrightWallScreenNumber = null;

    /**
     * @param ArrayOfint $deviceIds
     * @param int $newGroupId
     * @param int $newBrightWallId
     * @param int $newBrightWallScreenNumber
     */
    public function __construct($deviceIds, $newGroupId, $newBrightWallId, $newBrightWallScreenNumber)
    {
      $this->deviceIds = $deviceIds;
      $this->newGroupId = $newGroupId;
      $this->newBrightWallId = $newBrightWallId;
      $this->newBrightWallScreenNumber = $newBrightWallScreenNumber;
    }

    /**
     * @return ArrayOfint
     */
    public function getDeviceIds()
    {
      return $this->deviceIds;
    }

    /**
     * @param ArrayOfint $deviceIds
     * @return \WSD\BrightSignApi\Entity\Application\ReassignDevices
     */
    public function setDeviceIds($deviceIds)
    {
      $this->deviceIds = $deviceIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewGroupId()
    {
      return $this->newGroupId;
    }

    /**
     * @param int $newGroupId
     * @return \WSD\BrightSignApi\Entity\Application\ReassignDevices
     */
    public function setNewGroupId($newGroupId)
    {
      $this->newGroupId = $newGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewBrightWallId()
    {
      return $this->newBrightWallId;
    }

    /**
     * @param int $newBrightWallId
     * @return \WSD\BrightSignApi\Entity\Application\ReassignDevices
     */
    public function setNewBrightWallId($newBrightWallId)
    {
      $this->newBrightWallId = $newBrightWallId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewBrightWallScreenNumber()
    {
      return $this->newBrightWallScreenNumber;
    }

    /**
     * @param int $newBrightWallScreenNumber
     * @return \WSD\BrightSignApi\Entity\Application\ReassignDevices
     */
    public function setNewBrightWallScreenNumber($newBrightWallScreenNumber)
    {
      $this->newBrightWallScreenNumber = $newBrightWallScreenNumber;
      return $this;
    }

}
