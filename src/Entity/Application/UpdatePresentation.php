<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdatePresentation
{

    /**
     * @var Presentation $entity
     */
    protected $entity = null;

    /**
     * @param Presentation $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return Presentation
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param Presentation $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdatePresentation
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
