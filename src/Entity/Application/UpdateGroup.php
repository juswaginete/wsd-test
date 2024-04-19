<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateGroup
{

    /**
     * @var Group $entity
     */
    protected $entity = null;

    /**
     * @param Group $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return Group
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param Group $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroup
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
