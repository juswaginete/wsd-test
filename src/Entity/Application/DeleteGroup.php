<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteGroup
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var int $reassignmentGroupId
     */
    protected $reassignmentGroupId = null;

    /**
     * @param int $groupId
     * @param int $reassignmentGroupId
     */
    public function __construct($groupId, $reassignmentGroupId)
    {
      $this->groupId = $groupId;
      $this->reassignmentGroupId = $reassignmentGroupId;
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
     * @return \WSD\BrightSignApi\Entity\Application\DeleteGroup
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
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
     * @return \WSD\BrightSignApi\Entity\Application\DeleteGroup
     */
    public function setReassignmentGroupId($reassignmentGroupId)
    {
      $this->reassignmentGroupId = $reassignmentGroupId;
      return $this;
    }

}
