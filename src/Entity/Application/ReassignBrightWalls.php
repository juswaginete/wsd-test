<?php

namespace WSD\BrightSignApi\Entity\Application;

class ReassignBrightWalls
{

    /**
     * @var ArrayOfint $brightWallIds
     */
    protected $brightWallIds = null;

    /**
     * @var int $newGroupId
     */
    protected $newGroupId = null;

    /**
     * @param ArrayOfint $brightWallIds
     * @param int $newGroupId
     */
    public function __construct($brightWallIds, $newGroupId)
    {
      $this->brightWallIds = $brightWallIds;
      $this->newGroupId = $newGroupId;
    }

    /**
     * @return ArrayOfint
     */
    public function getBrightWallIds()
    {
      return $this->brightWallIds;
    }

    /**
     * @param ArrayOfint $brightWallIds
     * @return \WSD\BrightSignApi\Entity\Application\ReassignBrightWalls
     */
    public function setBrightWallIds($brightWallIds)
    {
      $this->brightWallIds = $brightWallIds;
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
     * @return \WSD\BrightSignApi\Entity\Application\ReassignBrightWalls
     */
    public function setNewGroupId($newGroupId)
    {
      $this->newGroupId = $newGroupId;
      return $this;
    }

}
