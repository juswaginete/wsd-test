<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetAllBrightWallPresentations
{

    /**
     * @var string $marker
     */
    protected $marker = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @param string $marker
     * @param int $pageSize
     */
    public function __construct($marker, $pageSize)
    {
      $this->marker = $marker;
      $this->pageSize = $pageSize;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetAllBrightWallPresentations
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
     * @return \WSD\BrightSignApi\Entity\Application\GetAllBrightWallPresentations
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
