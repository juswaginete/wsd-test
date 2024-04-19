<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallGroups
{

    /**
     * @var int $configurationId
     */
    protected $configurationId = null;

    /**
     * @var string $marker
     */
    protected $marker = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @param int $configurationId
     * @param string $marker
     * @param int $pageSize
     */
    public function __construct($configurationId, $marker, $pageSize)
    {
      $this->configurationId = $configurationId;
      $this->marker = $marker;
      $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getConfigurationId()
    {
      return $this->configurationId;
    }

    /**
     * @param int $configurationId
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroups
     */
    public function setConfigurationId($configurationId)
    {
      $this->configurationId = $configurationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarker()
    {
      return $this->marker;
    }

    /**
     * @param string $marker
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroups
     */
    public function setMarker($marker)
    {
      $this->marker = $marker;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroups
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
