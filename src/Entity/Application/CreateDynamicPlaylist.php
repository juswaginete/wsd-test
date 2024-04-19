<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateDynamicPlaylist
{

    /**
     * @var DynamicPlaylist $entity
     */
    protected $entity = null;

    /**
     * @param DynamicPlaylist $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return DynamicPlaylist
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param DynamicPlaylist $entity
     * @return \WSD\BrightSignApi\Entity\Application\CreateDynamicPlaylist
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
