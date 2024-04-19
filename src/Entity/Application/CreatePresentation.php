<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreatePresentation
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
     * @return \WSD\BrightSignApi\Entity\Application\CreatePresentation
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
