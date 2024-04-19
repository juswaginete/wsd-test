<?php

namespace WSD\BrightSignApi\Entity\Application;

class RemoveScheduledPresentation
{

    /**
     * @var ScheduledPresentation $entity
     */
    protected $entity = null;

    /**
     * @param ScheduledPresentation $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
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
     * @return \WSD\BrightSignApi\Entity\Application\RemoveScheduledPresentation
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
