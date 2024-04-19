<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateAccountSettingsResponse
{

    /**
     * @var boolean $UpdateAccountSettingsResult
     */
    protected $UpdateAccountSettingsResult = null;

    /**
     * @param boolean $UpdateAccountSettingsResult
     */
    public function __construct($UpdateAccountSettingsResult)
    {
      $this->UpdateAccountSettingsResult = $UpdateAccountSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateAccountSettingsResult()
    {
      return $this->UpdateAccountSettingsResult;
    }

    /**
     * @param boolean $UpdateAccountSettingsResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateAccountSettingsResponse
     */
    public function setUpdateAccountSettingsResult($UpdateAccountSettingsResult)
    {
      $this->UpdateAccountSettingsResult = $UpdateAccountSettingsResult;
      return $this;
    }

}
