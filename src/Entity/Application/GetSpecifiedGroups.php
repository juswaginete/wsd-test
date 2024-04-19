<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedGroups
{

    /**
     * @var ArrayOfint $groupIds
     */
    protected $groupIds = null;

    /**
     * @param ArrayOfint $groupIds
     */
    public function __construct($groupIds)
    {
      $this->groupIds = $groupIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getGroupIds()
    {
      return $this->groupIds;
    }

    /**
     * @param ArrayOfint $groupIds
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedGroups
     */
    public function setGroupIds($groupIds)
    {
      $this->groupIds = $groupIds;
      return $this;
    }

}
