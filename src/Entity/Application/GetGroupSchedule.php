<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetGroupSchedule
{

    /**
     * @var int $groupId
     */
    protected $groupId = null;

    /**
     * @var string $marker
     */
    protected $marker = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @param int $groupId
     * @param string $marker
     * @param int $pageSize
     */
    public function __construct($groupId, $marker, $pageSize)
    {
      $this->groupId = $groupId;
      $this->marker = $marker;
      $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupSchedule
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupSchedule
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
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupSchedule
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
