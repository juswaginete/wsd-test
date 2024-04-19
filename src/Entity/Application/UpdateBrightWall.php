<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWall
{

    /**
     * @var BrightWall $entity
     */
    protected $entity = null;

    /**
     * @param BrightWall $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return BrightWall
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param BrightWall $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWall
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
