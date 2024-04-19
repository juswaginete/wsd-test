<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindContent
{

    /**
     * @var string $fileNamePattern
     */
    protected $fileNamePattern = null;

    /**
     * @var string $marker
     */
    protected $marker = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @param string $fileNamePattern
     * @param string $marker
     * @param int $pageSize
     */
    public function __construct($fileNamePattern, $marker, $pageSize)
    {
      $this->fileNamePattern = $fileNamePattern;
      $this->marker = $marker;
      $this->pageSize = $pageSize;
    }

    /**
     * @return string
     */
    public function getFileNamePattern()
    {
      return $this->fileNamePattern;
    }

    /**
     * @param string $fileNamePattern
     * @return \WSD\BrightSignApi\Entity\Application\FindContent
     */
    public function setFileNamePattern($fileNamePattern)
    {
      $this->fileNamePattern = $fileNamePattern;
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
     * @return \WSD\BrightSignApi\Entity\Application\FindContent
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
     * @return \WSD\BrightSignApi\Entity\Application\FindContent
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
