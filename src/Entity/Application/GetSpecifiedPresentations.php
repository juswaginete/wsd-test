<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedPresentations
{

    /**
     * @var ArrayOfint $presentationIds
     */
    protected $presentationIds = null;

    /**
     * @param ArrayOfint $presentationIds
     */
    public function __construct($presentationIds)
    {
      $this->presentationIds = $presentationIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getPresentationIds()
    {
      return $this->presentationIds;
    }

    /**
     * @param ArrayOfint $presentationIds
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedPresentations
     */
    public function setPresentationIds($presentationIds)
    {
      $this->presentationIds = $presentationIds;
      return $this;
    }

}
