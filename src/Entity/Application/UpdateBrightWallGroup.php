<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWallGroup
{

    /**
     * @var BrightWallGroup $entity
     */
    protected $entity = null;

    /**
     * @param BrightWallGroup $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return BrightWallGroup
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param BrightWallGroup $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWallGroup
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
