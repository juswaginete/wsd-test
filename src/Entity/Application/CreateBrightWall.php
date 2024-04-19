<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateBrightWall
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
     * @return \WSD\BrightSignApi\Entity\Application\CreateBrightWall
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
