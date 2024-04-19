<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedWebPages
{

    /**
     * @var ArrayOfint $webPageIds
     */
    protected $webPageIds = null;

    /**
     * @param ArrayOfint $webPageIds
     */
    public function __construct($webPageIds)
    {
      $this->webPageIds = $webPageIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getWebPageIds()
    {
      return $this->webPageIds;
    }

    /**
     * @param ArrayOfint $webPageIds
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedWebPages
     */
    public function setWebPageIds($webPageIds)
    {
      $this->webPageIds = $webPageIds;
      return $this;
    }

}
