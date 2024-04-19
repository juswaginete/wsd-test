<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDevice
{

    /**
     * @var Device $entity
     */
    protected $entity = null;

    /**
     * @param Device $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return Device
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param Device $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDevice
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
