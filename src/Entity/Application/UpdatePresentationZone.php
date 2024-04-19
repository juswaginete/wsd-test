<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdatePresentationZone
{

    /**
     * @var int $presentationId
     */
    protected $presentationId = null;

    /**
     * @var PresentationZone $entity
     */
    protected $entity = null;

    /**
     * @param int $presentationId
     * @param PresentationZone $entity
     */
    public function __construct($presentationId, $entity)
    {
      $this->presentationId = $presentationId;
      $this->entity = $entity;
    }

    /**
     * @return int
     */
    public function getPresentationId()
    {
      return $this->presentationId;
    }

    /**
     * @param int $presentationId
     * @return \WSD\BrightSignApi\Entity\Application\UpdatePresentationZone
     */
    public function setPresentationId($presentationId)
    {
      $this->presentationId = $presentationId;
      return $this;
    }

    /**
     * @return PresentationZone
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param PresentationZone $entity
     * @return \WSD\BrightSignApi\Entity\Application\UpdatePresentationZone
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

}
