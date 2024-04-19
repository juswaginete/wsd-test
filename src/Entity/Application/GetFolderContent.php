<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetFolderContent
{

    /**
     * @var string $virtualPath
     */
    protected $virtualPath = null;

    /**
     * @var string $marker
     */
    protected $marker = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @param string $virtualPath
     * @param string $marker
     * @param int $pageSize
     */
    public function __construct($virtualPath, $marker, $pageSize)
    {
      $this->virtualPath = $virtualPath;
      $this->marker = $marker;
      $this->pageSize = $pageSize;
    }

    /**
     * @return string
     */
    public function getVirtualPath()
    {
      return $this->virtualPath;
    }

    /**
     * @param string $virtualPath
     * @return \WSD\BrightSignApi\Entity\Application\GetFolderContent
     */
    public function setVirtualPath($virtualPath)
    {
      $this->virtualPath = $virtualPath;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetFolderContent
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
     * @return \WSD\BrightSignApi\Entity\Application\GetFolderContent
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
