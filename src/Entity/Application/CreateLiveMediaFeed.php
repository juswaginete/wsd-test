<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateLiveMediaFeed
{

    /**
     * @var LiveMediaFeed $entity
     */
    protected $entity = null;

    /**
     * @param LiveMediaFeed $entity
     */
    public function __construct($entity)
    {
      $this->entity = $entity;
    }

    /**
     * @return LiveMediaFeed
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param LiveMediaFeed $entity
     * @return \WSD\BrightSignApi\Entity\Application\CreateLiveMediaFeed
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
