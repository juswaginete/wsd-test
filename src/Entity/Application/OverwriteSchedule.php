<?php

namespace WSD\BrightSignApi\Entity\Application;

class OverwriteSchedule
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var ArrayOfScheduledPresentation $entities
     */
    protected $entities = null;

    /**
     * @param int $groupId
     * @param ArrayOfScheduledPresentation $entities
     */
    public function __construct($groupId, $entities)
    {
      $this->groupId = $groupId;
      $this->entities = $entities;
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
     * @return \WSD\BrightSignApi\Entity\Application\OverwriteSchedule
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return ArrayOfScheduledPresentation
     */
    public function getEntities()
    {
      return $this->entities;
    }

    /**
     * @param ArrayOfScheduledPresentation $entities
     * @return \WSD\BrightSignApi\Entity\Application\OverwriteSchedule
     */
    public function setEntities($entities)
    {
      $this->entities = $entities;
      return $this;
    }

}
