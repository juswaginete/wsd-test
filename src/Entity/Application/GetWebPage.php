<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetWebPage
{

    /**
     * @var int $webPageId
     */
    protected $webPageId = null;

    /**
     * @var boolean $loadAssets
     */
    protected $loadAssets = null;

    /**
     * @param int $webPageId
     * @param boolean $loadAssets
     */
    public function __construct($webPageId, $loadAssets)
    {
      $this->webPageId = $webPageId;
      $this->loadAssets = $loadAssets;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetWebPage
     */
    public function setWebPageId($webPageId)
    {
      $this->webPageId = $webPageId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadAssets()
    {
      return $this->loadAssets;
    }

    /**
     * @param boolean $loadAssets
     * @return \WSD\BrightSignApi\Entity\Application\GetWebPage
     */
    public function setLoadAssets($loadAssets)
    {
      $this->loadAssets = $loadAssets;
      return $this;
    }

}
