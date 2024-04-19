<?php

namespace WSD\BrightSignApi\Entity\Application;

class AddScheduledPresentation
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var ScheduledPresentation $entity
     */
    protected $entity = null;

    /**
     * @param int $groupId
     * @param ScheduledPresentation $entity
     */
    public function __construct($groupId, $entity)
    {
      $this->groupId = $groupId;
      $this->entity = $entity;
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
     * @return \WSD\BrightSignApi\Entity\Application\AddScheduledPresentation
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return ScheduledPresentation
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param ScheduledPresentation $entity
     * @return \WSD\BrightSignApi\Entity\Application\AddScheduledPresentation
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
