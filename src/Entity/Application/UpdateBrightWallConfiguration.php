<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWallConfiguration
{

    /**
     * @var BrightWallConfiguration $entity
     */
    protected $entity = null;

    /**
     * @param BrightWallConfiguration $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return BrightWallConfiguration
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param BrightWallConfiguration $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWallConfiguration
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
