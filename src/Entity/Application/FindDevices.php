<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindDevices
{

    /**
     * @var string $namePattern
     */
    protected $namePattern = null;

    /**
     * @var string $marker
     */
    protected $marker = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @param string $namePattern
     * @param string $marker
     * @param int $pageSize
     */
    public function __construct($namePattern, $marker, $pageSize)
    {
      $this->namePattern = $namePattern;
      $this->marker = $marker;
      $this->pageSize = $pageSize;
    }

    /**
     * @return string
     */
    public function getNamePattern()
    {
      return $this->namePattern;
    }

    /**
     * @param string $namePattern
     * @return \WSD\BrightSignApi\Entity\Application\FindDevices
     */
    public function setNamePattern($namePattern)
    {
      $this->namePattern = $namePattern;
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
     * @return \WSD\BrightSignApi\Entity\Application\FindDevices
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
     * @return \WSD\BrightSignApi\Entity\Application\FindDevices
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
