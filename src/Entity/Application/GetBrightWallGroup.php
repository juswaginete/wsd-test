<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallGroup
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var boolean $loadBrightWalls
     */
    protected $loadBrightWalls = null;

    /**
     * @param int $groupId
     * @param boolean $loadBrightWalls
     */
    public function __construct($groupId, $loadBrightWalls)
    {
      $this->groupId = $groupId;
      $this->loadBrightWalls = $loadBrightWalls;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroup
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadBrightWalls()
    {
      return $this->loadBrightWalls;
    }

    /**
     * @param boolean $loadBrightWalls
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroup
     */
    public function setLoadBrightWalls($loadBrightWalls)
    {
      $this->loadBrightWalls = $loadBrightWalls;
      return $this;
    }

}
