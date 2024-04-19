<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateBrightWallPresentation
{

    /**
     * @var BrightWallPresentation $entity
     */
    protected $entity = null;

    /**
     * @param BrightWallPresentation $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return BrightWallPresentation
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param BrightWallPresentation $entity
     * @return \WSD\BrightSignApi\Entity\Application\CreateBrightWallPresentation
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
