<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetGroup
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var boolean $loadDevices
     */
    protected $loadDevices = null;

    /**
     * @param int $groupId
     * @param boolean $loadDevices
     */
    public function __construct($groupId, $loadDevices)
    {
      $this->groupId = $groupId;
      $this->loadDevices = $loadDevices;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return \WSD\BrightSignApi\Entity\Application\GetGroup
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadDevices()
    {
      return $this->loadDevices;
    }

    /**
     * @param boolean $loadDevices
     * @return \WSD\BrightSignApi\Entity\Application\GetGroup
     */
    public function setLoadDevices($loadDevices)
    {
      $this->loadDevices = $loadDevices;
      return $this;
    }

}
