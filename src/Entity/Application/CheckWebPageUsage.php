<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckWebPageUsage
{

    /**
     * @var int $webPageId
     */
    protected $webPageId = null;

    /**
     * @param int $webPageId
     */
    public function __construct($webPageId)
    {
      $this->webPageId = $webPageId;
    }

    /**
     * @return int
     */
    public function getWebPageId()
    {
      return $this->webPageId;
    }

    /**
     * @param int $webPageId
     * @return \WSD\BrightSignApi\Entity\Application\CheckWebPageUsage
     */
    public function setWebPageId($webPageId)
    {
      $this->webPageId = $webPageId;
      return $this;
    }

}
