<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateLiveTextFeed
{

    /**
     * @var LiveTextFeed $entity
     */
    protected $entity = null;

    /**
     * @param LiveTextFeed $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return LiveTextFeed
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param LiveTextFeed $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdateLiveTextFeed
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
