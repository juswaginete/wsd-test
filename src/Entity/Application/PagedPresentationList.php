<?php

namespace WSD\BrightSignApi\Entity\Application;

class PagedPresentationList
{

    /**
     * @var string $FilterExpression
     */
    protected $FilterExpression = null;

    /**
     * @var boolean $IsTruncated
     */
    protected $IsTruncated = null;

    /**
     * @var ArrayOfPresentation $Items
     */
    protected $Items = null;

    /**
     * @var string $NextMarker
     */
    protected $NextMarker = null;

    /**
     * @var int $PageSize
     */
    protected $PageSize = null;

    /**
     * @var string $SortExpression
     */
    protected $SortExpression = null;

    /**
     * @var int $TotalItemCount
     */
    protected $TotalItemCount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFilterExpression()
    {
      return $this->FilterExpression;
    }

    /**
     * @param string $FilterExpression
     * @return \WSD\BrightSignApi\Entity\Application\PagedPresentationList
     */
    public function setFilterExpression($FilterExpression)
    {
      $this->FilterExpression = $FilterExpression;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTruncated()
    {
      return $this->IsTruncated;
    }

    /**
     * @param boolean $IsTruncated
     * @return \WSD\BrightSignApi\Entity\Application\PagedPresentationList
     */
    public function setIsTruncated($IsTruncated)
    {
      $this->IsTruncated = $IsTruncated;
      return $this;
    }

    /**
     * @return ArrayOfPresentation
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfPresentation $Items
     * @return \WSD\BrightSignApi\Entity\Application\PagedPresentationList
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

    /**
     * @return string
     */
    public function getNextMarker()
    {
      return $this->NextMarker;
    }

    /**
     * @param string $NextMarker
     * @return \WSD\BrightSignApi\Entity\Application\PagedPresentationList
     */
    public function setNextMarker($NextMarker)
    {
      $this->NextMarker = $NextMarker;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return \WSD\BrightSignApi\Entity\Application\PagedPresentationList
     */
    public function setPageSize($PageSize)
    {
      $this->PageSize = $PageSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortExpression()
    {
      return $this->SortExpression;
    }

    /**
     * @param string $SortExpression
     * @return \WSD\BrightSignApi\Entity\Application\PagedPresentationList
     */
    public function setSortExpression($SortExpression)
    {
      $this->SortExpression = $SortExpression;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalItemCount()
    {
      return $this->TotalItemCount;
    }

    /**
     * @param int $TotalItemCount
     * @return \WSD\BrightSignApi\Entity\Application\PagedPresentationList
     */
    public function setTotalItemCount($TotalItemCount)
    {
      $this->TotalItemCount = $TotalItemCount;
      return $this;
    }

}