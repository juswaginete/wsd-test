<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteBrightWall
{

    /**
     * @var int $brightWallId
     */
    protected $brightWallId = null;

    /**
     * @var int $reassignmentGroupId
     */
    protected $reassignmentGroupId = null;

    /**
     * @param int $brightWallId
     * @param int $reassignmentGroupId
     */
    public function __construct($brightWallId, $reassignmentGroupId)
    {
      $this->brightWallId = $brightWallId;
      $this->reassignmentGroupId = $reassignmentGroupId;
    }

    /**
     * @return int
     */
    public function getBrightWallId()
    {
      return $this->brightWallId;
    }

    /**
     * @param int $brightWallId
     * @return \WSD\BrightSignApi\Entity\Application\DeleteBrightWall
     */
    public function setBrightWallId($brightWallId)
    {
      $this->brightWallId = $brightWallId;
      return $this;
    }

    /**
     * @return int
     */
    public function getReassignmentGroupId()
    {
      return $this->reassignmentGroupId;
    }

    /**
     * @param int $reassignmentGroupId
     * @return \WSD\BrightSignApi\Entity\Application\DeleteBrightWall
     */
    public function setReassignmentGroupId($reassignmentGroupId)
    {
      $this->reassignmentGroupId = $reassignmentGroupId;
      return $this;
    }

}
