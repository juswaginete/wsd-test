<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateContentFolder
{

    /**
     * @var ContentFolder $entity
     */
    protected $entity = null;

    /**
     * @param ContentFolder $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return ContentFolder
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param ContentFolder $entity
     * @return \WSD\BrightSignApi\Entity\Application\CreateContentFolder
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
